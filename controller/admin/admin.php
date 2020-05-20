<?php
//
require($_SERVER['DOCUMENT_ROOT'].'/config/dbconnect.php');
 if(isset($_GET['status']))
 {
         if ($_GET['status'] == 1)
         {
             $_GET['status'] = 0;
         } else {
             $_GET['status'] = 1;
         }

         $data = [
             "id" => $_GET['id'],
             "status" => $_GET['status']
         ];

         $sql = "UPDATE tasks SET status=:status WHERE id=:id";
         $statement = $pdo->prepare($sql);
         $statement->execute($data); // true || false

         header("Location: /views/admin/index.php");
 }
    if(isset($_GET['admin']) and ($_GET['admin']==0))
    {
              session_start();
             $_SESSION['auth'] = false;
            header("Location: /");
    }

