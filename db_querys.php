<?php


$db = new PDO('mysql:dbname=portfolio;host=127.0.0.1', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

function retrieve_data($db)
{
    $retrieve_statement = $db->prepare('SELECT `content`, `picture_link`, `phone_number`, `email` FROM `about_me` WHERE `id` = 1');
    $retrieve_statement->execute();
    $start_data = $retrieve_statement->fetchAll();
    return $start_data;
}

function set_about_me($content, $picture_link, $db, $email, $phone_number)
{
    if (isset($_POST[content]) || isset($_POST[picture_link]) || isset($_POST[email]) || isset($_POST[$phone_number])) {
        $query = $db->prepare('UPDATE `about_me` SET content=?, picture_link=?, phone_number=?, email=? WHERE(`id` = 1);');
        $query->bindParam(1, $content);
        $query->bindParam(2, $picture_link);
        $query->bindParam(3, $phone_number);
        $query->bindParam(4, $email);
        $query->execute();
        header('Location: about.php');
    }
}

function set_projects($app_link, $picture_text, $db, $picture_url, $code_link, $drop_down)
{
    if (isset($_POST[app_link]) || isset($_POST[picture_text]) || isset($_POST[picture_url]) || isset($_POST[code_link]) || isset($_POST[position])) {
        $query = $db->prepare('UPDATE `projects` SET picture_link=?, picture_text=?, picture_image_front=?, code_link=? WHERE(`id` = ?);');
        $query->bindParam(1, $app_link);
        $query->bindParam(2, $picture_text);
        $query->bindParam(3, $picture_url);
        $query->bindParam(4, $code_link);
        $query->bindParam(5, $drop_down);
        $query->execute();
        header('Location: products.php');
    }
}




$app_link = $_POST[app_link];
$picture_text = $_POST[picture_text];
$picture_url = $_POST[picture_url];
$code_link = $_POST[code_link];
$drop_down = $_POST[position];

$content = $_POST[content];
$phone_number = $_POST[phone_number];
$email = $_POST[email];
$picture_link = $_POST[picture_link];

set_about_me($content, $picture_link, $db, $email, $phone_number);
set_projects($app_link, $picture_text, $db, $picture_url, $code_link, $drop_down);

?>