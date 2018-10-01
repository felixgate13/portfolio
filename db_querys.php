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

$content = $_POST[content];
$phone_number = $_POST[phone_number];
$email = $_POST[email];
$picture_link = $_POST[picture_link];

set_about_me($content, $picture_link, $db, $email, $phone_number);


?>