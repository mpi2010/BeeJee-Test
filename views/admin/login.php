<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="with=device-with, initial-scale=1.0">
    <title>Bootstrap 4 site</title>
    <link rel="stylesheet" href="http://btest.mpi.biz.ua/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://btest.mpi.biz.ua/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://btest.mpi.biz.ua/assets/css/main.css">
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"> </span>
                    <span class="icon-bar"> </span>
                    <span class="icon-bar"> </span>
                </button>
                <a class="navbar-brand" href="/">BeeJee<i class="fa fa-circle"></i>Test</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="http://btest.mpi.biz.ua/views/admin/login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Вход в админпанель</h1>
                <?php if (isset($_SESSION['errors']) && is_array($_SESSION['errors'])): ?>
                    <ul>
                        <?php foreach ($_SESSION['errors'] as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <form action="/model/user.php" method="post">
                    <h4>E-mail</h4>
                    <div class="form-group">
                        <input type="name" name="name" >
                    </div>
                    <h4>Password</h4>
                    <div class="form-group">
                        <input type="password" name="password" >
                    </div>
                    <div class="form-group">
                        <input name="submit" class="btn btn-primary" type="submit" value="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="r">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-8 col-lg-offset-2">
                    <h4>Professional develope sites!</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="f">
        <div class="container">
            <div class="row centered">
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <div class="container fc">
            <div class="row centered">
                <a href="#">2020<i class="fa fa-copyright"></i>test</a>
             </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="http://btest.mpi.biz.ua/assets/js/bootstrap.min.js"></script>

</body>
</html>