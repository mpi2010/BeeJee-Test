<?php
require($_SERVER['DOCUMENT_ROOT'].'/config/dbconnect.php');
session_start();
//
$statement = $pdo->prepare("SELECT * FROM tasks WHERE id=:id");
$statement->bindParam(":id", $_GET['id']);
$statement->execute();
$task = $statement->fetch(PDO::FETCH_ASSOC);
//
unset($_SESSION['errors']);
if(isset($_POST['submit'])) {

    $errors = false;
     if(strlen($_POST['description'])<5){
        $errors[] = 'description short then 5';
    }
       if($errors!==false) {
           $errors[] = 'errors';
           $_SESSION['errors'] = $errors;

           header("Location: /views/admin/edit.php");
       }else
           {
               if(strcmp($task['description'], strip_tags($_POST['description']))){
                        $task['status_admin'] = 1;
               }
               $data = [
                   "id" => strip_tags($_GET['id']),
                   "status"   =>  strip_tags($_POST['status']),
                   "status_admin"   =>  strip_tags($task['status_admin']),
                   "description" => strip_tags($_POST['description'])
               ];

               $sql = 'UPDATE tasks SET status=:status, status_admin=:status_admin, description=:description WHERE id=:id';
               $statement = $pdo->prepare($sql);
               $statement->execute($data); // true || false

           header("Location: /views/admin/index.php");
       }
}