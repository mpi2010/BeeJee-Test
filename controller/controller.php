<?php
require($_SERVER['DOCUMENT_ROOT'].'/config/dbconnect.php');
//
session_start();
    if(isset($_GET['sort']))
    {
        unset($_SESSION['sort']);
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['status']);
        $_SESSION['sort'] = $_GET['sort'];
  //----------------------
            if(isset($_GET['name'])) {
                $_SESSION['name'] = $_GET['name'];
                if($_GET['sort']=='asc'){
                    $statement = $pdo->prepare("SELECT * FROM tasks ORDER BY name ASC");
                }else{
                    $statement = $pdo->prepare("SELECT * FROM tasks ORDER BY name DESC");
                }
            }
            if(isset($_GET['email'])) {
                $_SESSION['email'] = $_GET['email'];
                if($_GET['sort']=='asc'){
                    $statement = $pdo->prepare("SELECT * FROM tasks ORDER BY email ASC");
                }else{
                    $statement = $pdo->prepare("SELECT * FROM tasks ORDER BY email DESC");
                }
            }
            if(isset($_GET['status'])) {
                $_SESSION['status'] = $_GET['status'];
                if($_GET['sort']=='asc'){
                    $statement = $pdo->prepare("SELECT * FROM tasks ORDER BY status ASC");
                }else{
                    $statement = $pdo->prepare("SELECT * FROM tasks ORDER BY status DESC");
                }
            }

            $statement->execute();
            $tasks = $statement->fetchAll(PDO::FETCH_ASSOC);
//
                $i=1;
      foreach ($tasks as $item ){

          $data = [
              "id" => $item['id'],
              "idsort"   =>  count($tasks)-$i
          ];

          $sql = "UPDATE tasks SET id_sort = :idsort WHERE id = :id";
          $statement = $pdo->prepare($sql);
          $statement->execute($data); // true || false
          $i++;
      }

 //-----------------------------
        header("Location: /");
    }
    if(isset($_GET['page'])){
        $_SESSION['page']=$_GET['page'];

//
        header("Location: /");
    }

