<?php
require 'db_querys_products.php';
$start_data_project = retrieve_data_project($db, $_GET[position]);
print_r($_GET[position]);

?>

<!DOCTYPE html>
<html>

<head>

    <title> Project Page </title>

</head>


<body>


<form method="post" action="db_querys_products.php">

    <br>
    picture_image_front
    <input type="text" name="picture_image_front" value=" <?php echo $start_data_project[0]['picture_image_front']?>"><br>

    picture_text
    <input type="text" name="picture_text" value=" <?php echo $start_data_project[0]['picture_text']?>"><br>

    picture_link
    <input type="text" name="picture_link" value=" <?php echo $start_data_project[0]['picture_link']?>"><br>

    code_link
    <input type="text" name="code_link" value=" <?php echo $start_data_project[0]['code_link']?>"><br>

    <input type="submit" name="submit_project">

</form>
<a href="dashboard.php">
    Back
</a>

</body>



</html>