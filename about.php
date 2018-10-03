<?php
require 'dbConn.php';
function retrieve_data($db) {
    $retrieve_statement = $db->query('SELECT `content`, `picture_link`, `phone_number`, `email` FROM `about_me` WHERE `id` = 1;');
    $start_data = $retrieve_statement->fetch();
    return $start_data;
}
$start_data = retrieve_data($db);
?>
<!DOCTYPE html>
<html>
<head>
    <title> About Page </title>
</head>
<body>

<form action="db_querys.php" method="post">
    <label for="content"> Content </label>
    <input type="text" name="content" value="<?php echo $start_data['content']?>"> <br>
    <label for="phone_number"> Phone number </label>
    <input type="tel" name="phone_number"  value="<?php echo $start_data['phone_number']?>">  <br>
    <label for="email"> Email </label>
    <input type="text" name="email" value="<?php echo $start_data['email']?>" ><br>
    <label for="picture_link"> Picture link </label>
    <input type="text" name="picture_link" value="<?php echo $start_data['picture_link']?>"> <br>
    <input type="submit" name="submit_about">
</form>
<a href="dashboard.php"> Back </a>
</body>
</html>