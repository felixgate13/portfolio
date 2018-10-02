<?php

$picture_link = $_POST[picture_link];
$picture_text = $_POST[picture_text];
$picture_image_front = $_POST[picture_image_front];
$code_link = $_POST[code_link];

$db = new PDO('mysql:dbname=portfolio;host=127.0.0.1', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// extracting data from database
function retrieve_data_project($db, $selector)
{

    $retrieve_statement = $db->prepare('SELECT `picture_link`, `picture_text`, `picture_image_front`, `code_link` FROM `projects` WHERE `id` = ?;');
    $retrieve_statement->bindParam(1, $selector);
    $retrieve_statement->execute();
    $data = $retrieve_statement->fetchAll();
    return $data;
}

// Setting data into database
function set_projects($picture_link, $picture_text, $db, $picture_url, $code_link, $selector)
{
    if (isset($_POST[submit_project])) {
        $query = $db->prepare('UPDATE `projects` SET picture_link=?, picture_text=?, picture_image_front=?, code_link=? WHERE `id` = ?;');
        $query->bindParam(1, $picture_link);
        $query->bindParam(2, $picture_text);
        $query->bindParam(3, $picture_url);
        $query->bindParam(4, $code_link);
        $query->bindParam(5, $selector);
        $query->execute();
        header('Location: dashboard.php');
    }

}
set_projects($picture_link, $picture_text, $db, $picture_image_front, $code_link, $_GET[position]);




?>




