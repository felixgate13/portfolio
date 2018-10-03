<?php
require 'dbConn.php';
function retrieve_data_project($db, $selector) {

    $retrieve_statement = $db->prepare('SELECT `picture_link`, `picture_text`, `picture_image_front`, `code_link` FROM `projects` WHERE `id` = ?;');
    $retrieve_statement->bindParam(1, $selector);
    $retrieve_statement->execute();
    $data = $retrieve_statement->fetchAll();
    return $data;
}
$start_data_project = retrieve_data_project($db, $_GET['position']);
$id = $_GET['position'];
?>
<!DOCTYPE html>
<html>
    <title> Project Page </title>
</head>
<body>
<form method="post" action="db_querys_products.php" >

    <br>
    <label for="picture_image_front"> picture_image_front </label>
    <input type="text" name="picture_image_front" value=" <?php echo $start_data_project[0]['picture_image_front']?>"><br>

    <label for="picture_text"> picture_text </label>
    <input type="text" name="picture_text" value=" <?php echo $start_data_project[0]['picture_text']?>"><br>

    <label for="picture_link"> picture_link </label>
    <input type="text" name="picture_link" value=" <?php echo $start_data_project[0]['picture_link']?>"><br>

    <label for="code_link"> code_link </label>
    <input type="text" name="code_link" value=" <?php echo $start_data_project[0]['code_link']?>"><br>

    <input type="hidden" name="position" value="<?php echo $id; ?>">
    <input type="submit" >

</form>
<a href="dashboard.php">Back</a>
</body>
</html>