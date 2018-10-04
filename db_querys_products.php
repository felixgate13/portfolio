<?php
require 'dbConn.php';

// checking that the key exists withing the array
function check_array($key, array $array) {
    if (array_key_exists($key, $array)){
        return $array[$key];
    }
    else {
        return "unexpected error -- array key does not exist";
    }
}

$picture_link = check_array('picture_link', $_POST);
$picture_text = check_array('picture_text', $_POST);
$picture_image_front = check_array('picture_image_front', $_POST);
$code_link = check_array('code_link', $_POST);



// setting projects
function set_projects($picture_link, $picture_text, $db, $picture_url, $code_link, $selector) {
           $query = $db->prepare('UPDATE `projects` SET picture_link=?, picture_text=?, picture_image_front=?, code_link=? WHERE `id` = ?;');
           $query->bindParam(1, $picture_link);
           $query->bindParam(2, $picture_text);
           $query->bindParam(3, $picture_url);
           $query->bindParam(4, $code_link);
           $query->bindParam(5, $selector);
           $query->execute();
           $row_count = $query->rowCount();
           return "Replaced $row_count row(s). \n";

}

$position = $_POST['position'];
set_projects($picture_link, $picture_text, $db, $picture_image_front, $code_link, $position);

?>
<!DOCTYPE html>
<html>
<head>
    <title> About Page </title>
</head>
<body>
<a href="dashboard.php">Back</a>
</body>
</html>




