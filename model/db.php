<?php
const PAGE_NUMBER = 3;
session_start();
$statement = $pdo->query("SELECT COUNT(*) as count FROM tasks");
$statement->setFetchMode(PDO::FETCH_ASSOC);
$row = $statement->fetch();
$count = $row['count'];
$name_sort = 'id';
$sort = 'ASC';
    if(isset($_SESSION['sort'])) {
        if(isset($_SESSION['name']) && ($_SESSION['name']==1)) $name_sort = 'name';
        if(isset($_SESSION['email']) && ($_SESSION['email']==1)) $name_sort = 'email';
        if(isset($_SESSION['status']) && ($_SESSION['status']==1)) $name_sort = 'status';
        $sort =strtoupper($_SESSION['sort']);
    }
     $all_page = intdiv($count, PAGE_NUMBER);
     if ((!$count % PAGE_NUMBER == 0)) {
         $all_page++;
     }

     $str_paginate ='';
     for($i=1;$i<=$all_page;$i++)
     {
         $str_paginate.= '<li class="page-item"><a class="page-link" href="/controller/controller.php?page=';
         $str_paginate.="$i";
         $str_paginate.='">';
         $str_paginate.="$i";
         $str_paginate.='</a></li>';
     }
     $page_active = 1;
     if (isset($_SESSION['page']))
     {
         $page_active = $_SESSION['page'];
     }
     $t1 = ($page_active - 1) * PAGE_NUMBER;
     $t2 = PAGE_NUMBER;

    $statement = $pdo->prepare("SELECT * FROM tasks ORDER BY id_sort DESC LIMIT :t1 , :t2");

     $statement->bindParam(':t2', $t2, PDO::PARAM_INT);
     $statement->bindParam(':t1', $t1, PDO::PARAM_INT);
     $statement->execute();
     $tasks = $statement->fetchAll(PDO::FETCH_ASSOC);
