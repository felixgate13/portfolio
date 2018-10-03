<?php
require 'dbConn.php';
//setting the data into the  about me page
function set_about_me($content, $picture_link, $db, $email, $phone_number) {
        $query = $db->prepare('UPDATE `about_me` SET content=?, picture_link=?, phone_number=?, email=? WHERE `id` = 1;');
        $query->bindParam(1, $content);
        $query->bindParam(2, $picture_link);
        $query->bindParam(3, $phone_number);
        $query->bindParam(4, $email);
        $query->execute();
        $row_count = $query->rowCount();
        return "Replaced $row_count row(s). \n";
}

function check_array($key, array $array){
    if (array_key_exists($key, $array)){
        return $array[$key];
    }
    else {
        return "unexpected error -- array key does not exist";
    }
}

$content = check_array('content', $_POST);
$phone_number = check_array('phone_number', $_POST);
$email = check_array('email', $_POST);
$picture_link = check_array('picture_link', $_POST);

set_about_me($content, $picture_link, $db, $email, $phone_number);
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




