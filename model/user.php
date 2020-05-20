<?php
    session_start();
//
    if (!empty($_SESSION['auth']))
    {
        session_destroy();
        header("Location: /views/admin/login.php");
    } else {

        if (isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $password = $_POST['password'];
            $errors = false;
            echo $name;
            if ($name !== 'admin') {
            $errors[] = 'wrong login';
        }
            if ($password !== '123') {
                $errors[] = 'wrong password';
            }
            if ($errors !== false) {
                $_SESSION['errors'] = $errors;
                header("Location: /views/admin/login.php");
            } else {
                $_SESSION['auth'] = true;
                 unset($_SESSION['errors']);

                header("Location: /views/admin/index.php");
            }
        }
    }