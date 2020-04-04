<?php
//
session_start();
unset($_SESSION['errors']);
require($_SERVER['DOCUMENT_ROOT'].'/config/dbconnect.php');
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $description = strip_tags($_POST['description']);
     $errors = false;
    if(strlen($name)<2){
        $errors[] = 'Name short then 2';
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = 'email not validate';
    }

    if(strlen($description)<2){
        $errors[] = '$description short then 5';
    }
       if($errors!==false) {
          $_SESSION['errors'] = $errors;
           header("Location: /views/create.php");
       }else
           {

           $sql = "INSERT INTO tasks(name,email,description) VALUES (:value_n, :value_e, :value_d)";
           $statement = $pdo->prepare($sql);
           $statement->bindParam(":value_n", $name);
           $statement->bindParam(":value_e", $email);
           $statement->bindParam(":value_d", $description);
           $statement->execute();

           header("Location: /");

       }
}