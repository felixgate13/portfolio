<?php
session_start();
if (!isset($_SESSION['admin']) || $_SESSION['admin'] != 'loggedIn') {
    header('Location: login.php');
}


?>
<!DOCTYPE html>
<html>
<head>
    <title> About Page </title>
</head>
<body>
<form action="products.php" method="GET" >
    <select name="position">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <input type="submit">
    </select>
</form>
</body>
</html>
