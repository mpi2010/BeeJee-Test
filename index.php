<?php
require($_SERVER['DOCUMENT_ROOT'].'/config/dbconnect.php');
require($_SERVER['DOCUMENT_ROOT'].'/model/db.php');
unset($_SESSION['errors']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="with=device-with, initial-scale=1.0">
    <title>Bootstrap 4 site</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
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
                    <li><h4><button type="button" class="btn btn-default"><a href="/views/create.php">Добавить задачу</a></button></h4></li>
                    <li class="active"><a href="/views/admin/login.php">Login</a></li>

                </ul>
            </div>
        </div>
    </div>
    <div id="headerwrap">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-8 col-lg-offset-2">
                    <h1>Task manager!</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container wb">
        <div class="row centered">
            <br><br>
            <div class="col-lg-2">
                <h4><button type="button" class="btn btn-default"><a href="/views/create.php">Добавить задачу</a></button></h4>
            </div>
            <div class="col-lg-10">
                <h4>Список задач</h4>
             </div>
        </div>
    </div>
     <div class="container w">
        <div class="row centered">
            <div class="nav">
                <div class="col-lg-3">
                    Sort by :
                </div>
                <div class="col-lg-3">
                    Name (<a href="/controller/controller.php?name=1&sort=asc">возрастание</a>|
                          <a href="/controller/controller.php?name=1&sort=desc">убывание</a>)
                </div>
                <div class="col-lg-3">
                    e-mail (<a href="/controller/controller.php?email=1&sort=asc">возрастание</a>|
                            <a href="/controller/controller.php?email=1&sort=desc">убывание</a>)
                </div>
                <div class="col-lg-3">
                    status (<a href="/controller/controller.php?status=1&sort=asc">на исполнении</a>|
                            <a href="/controller/controller.php?status=1&sort=desc">выполнена</a>)
                </div>
            </div>
            <br><br>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col"><h4>Number</h4></th>
                    <th class="centered" scope="col"><h4>Name</h4></th>
                    <th class="centered" scope="col"><h4>Description</h4></th>
                    <th class="centered" scope="col"><h4><i class="fa fa-envelope"></h4></th>
                    <th class="centered" scope="col"><h4>Status</h4></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tasks as $item):?>
                <tr>
                    <td scope="row"><?=$item['id'];?></td>
                    <td><?=$item['name'];?></td>
                    <td><?=$item['description'];?></td>
                    <td><?=$item['email'];?></td>
                    <td><?=$item['status']?'Выполнена': 'На исполнении';?></td>
                </tr>
                 <?php endforeach;?>
                </tbody>
            </table>

        </div>
         <nav aria-label="Page navigation">
             <ul class="pagination">
                    <?php echo $str_paginate;?>
             </ul>
         </nav>
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
    <script src="../assets/js/bootstrap.min.js"></script>

</body>
</html>