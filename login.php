<?php
session_start();
if (isset($_POST[submit])){
    if (password_verify($_POST['password'], '$2y$10$2GyC6.oj2u2dADpUtjl2CObSOQMMCrr1Yk4aGuyknS8oGI09pyU/a') && password_verify($_POST['username'], '$2y$10$rDQO8fN2A5c02pSyRg0.ouwGKfFE4aJslDrsLG4f0K88v8GWH3gDG')) {
        header('Location: dashboard.php');

    }

}

$username = $_POST['username'];
$password = $_POST['password'];




?>
<!DOCTYPE html>
<html>

<head>
    <title> About Page </title>
    <link rel="stylesheet" href="initialscreen.css">
</head>
    <body>
    <div class="login_box">
       <form method="post">
            Username
            <input type="text" placeholder="Username" name="username">
            Password
            <input type="password" placeholder="Password" name="password">
           <input type="submit" placeholder="Login" name="submit">

       </form>

    </div>
    </body>
</html>
