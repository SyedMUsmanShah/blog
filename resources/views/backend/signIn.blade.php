<?php
session_start();
require_once './inc/sqlfunctions.php';
if(isset($_SESSION['loggedIn'])){
    header("location:index.php");
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $res = mysqli_query($connection, "SELECT * FROM `admin` WHERE `username` = '$name' AND `password` = '$pass'");
    if(mysqli_num_rows($res)>0){
        $_SESSION['loggedIn'] = true;
        header("location:index.php");
    }
}
 ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-dark" style="background-color: #17191a;">
        <a class="navbar-brand" href="#"> <i class="fa fa-book fa-2x" aria-hidden="true"></i> Library Management System</a>
    </nav>
    <div class="col-6 mx-auto p-5">
        <div class="mt-5">
            <div class="mt-5 shadow pt-5" >
                <div class="display-4 text-center">
                    Admin Login
                </div>
                <div class="p-5">
                    <form action="" method="post">
                        <div class="form-group">
                          <label for="">Username</label>
                          <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="">Password</label>
                          <input type="password" class="form-control" name="password" id="" placeholder="">
                        </div>
                        <div>
                            <button type="submit" name="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
