<?php
require 'dbConn.php';
function retrieve_data($db)
{
    $retrieve_statement = $db->prepare('SELECT `content`, `picture_link`, `phone_number`, `email` FROM `about_me` WHERE `id` = 1;');
    $retrieve_statement->execute();
    $start_data = $retrieve_statement->fetchAll();
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

    About me content
    <input type="text" name="content"  value="<?php echo $start_data[0]['content']?>"> <br>

    Phone number
    <input type="tel" name="phone_number"  value="<?php echo $start_data[0]['phone_number']?>">  <br>

    Email
    <input type="text" name="email" value="<?php echo $start_data[0]['email']?>" ><br>

    Picture link
    <input type="text" name="picture_link" value="<?php echo $start_data[0]['picture_link']?>">

    <br>

    <input type="submit" name="submit_about">

</form>
<a href="dashboard.php">
    Back
</a>

</body>



</html>