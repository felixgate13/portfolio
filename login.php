<?php
if($_GET['error'] == '01'){
    $error = 'you have entered the wrong username or password :)';
}

?>
<!DOCTYPE html>
<html>
<head>
    <title> About Page </title>
    <link rel="stylesheet" href="initialscreen.css">
</head>
    <body>
    <div class="login_box">
       <form method="post" action="loginscript.php">
            <label for="username">Username</label>
            <input type="text" placeholder="Username" name="username">
           <label for="password">Password</label>
            <input type="password" placeholder="Password" name="password">
           <input type="submit" placeholder="Login" name="submit">
       </form>
        <?php if(isset($error)){ echo $error; } ?>
    </div>
    </body>
</html>
