<?php
require($_SERVER['DOCUMENT_ROOT'].'/config/dbconnect.php');
require($_SERVER['DOCUMENT_ROOT'].'/model/admin/db_admin.php');
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
                    <li><?php if( isset($_SESSION['auth']) ){echo'<a href="/controller/admin/admin.php?admin=0">Logout</a>';}?></li>
                </ul>
            </div>
        </div>
    </div>
     <div class="container w">
        <div class="row centered">
            <br><br>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col"><h4>Number</h4></th>
                    <th class="centered" scope="col"><h4>Name</h4></th>
                    <th class="centered" scope="col"><h4>Description</h4></th>
                    <th class="centered" scope="col"><h4><i class="fa fa-envelope"></h4></th>
                    <th class="centered" scope="col"><h4>Status</h4></th>
                    <th class="centered" scope="col"><h4>Operation</h4></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tasks as $item):?>
                <tr>
                    <td scope="row"><?=$item['id'];?></td>
                    <td><?=$item['name'];?></td>
                    <td><?=$item['description'];?></td>
                    <td><?=$item['email'];?></td>
                    <td><?=$item['status']?'Решена':'В процессе';?>
                        <?=$item['status_admin']?' ,отредактировано администратором':'';?></td>
                    <td><h4>
                        <a class="fa fa-pencil" href="/views/admin/edit.php?id=<?=$item['id']?>" class= "fa fa-pencil"></a>
                        <a href="/controller/admin/admin.php?id=<?=$item['id']?>&status=<?=$item['status']?>"  class="fa fa-<?php if($item['status']==1) {echo 'check-circle';} else {echo 'times-circle';} ?>
                        pencil"></a>
                        </h4>

                    </td>
                </tr>
                 <?php endforeach;?>
                </tbody>
            </table>

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
    <script src="../assets/js/bootstrap.min.js"></script>

</body>
</html>