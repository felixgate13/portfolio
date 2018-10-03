<?php


require 'dbConn.php';


//setting the data into the  about me page
function set_about_me($content, $picture_link, $db, $email, $phone_number)
{
        $query = $db->prepare('UPDATE `about_me` SET content=?, picture_link=?, phone_number=?, email=? WHERE `id` = 1;');
        $query->bindParam(1, $content);
        $query->bindParam(2, $picture_link);
        $query->bindParam(3, $phone_number);
        $query->bindParam(4, $email);
        $query->execute();
        $row_count = $query->rowCount();
        print("Replaced $row_count row(s). \n");
}



$content = $_POST[content];
$phone_number = $_POST[phone_number];
$email = $_POST[email];
$picture_link = $_POST[picture_link];


set_about_me($content, $picture_link, $db, $email, $phone_number);
?>
<!---->
<!--function set_about_me($content, $picture_link, $db, $email, $phone_number)-->
<!--{-->
<!--if (isset($_POST[submit_about])) {-->
<!--$query = $db->prepare('UPDATE `about_me` SET content=?, picture_link=?, phone_number=?, email=? WHERE `id` = 1;');-->
<!--$query->bindParam(1, $content);-->
<!--$query->bindParam(2, $picture_link);-->
<!--$query->bindParam(3, $phone_number);-->
<!--$query->bindParam(4, $email);-->
<!--$query->execute();-->
<!--header('Location: about.php');-->
<!--}-->
<!--}-->
<!--*/-->