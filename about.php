<?php
$db = new PDO('mysql:dbname=portfolio;host=127.0.0.1', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare('UPDATE `about_me` SET content=?, picture_link=? WHERE(`id` = 2);');
$content = $_POST[content];
$picture_link = $_POST[picture_link];
$query->bindParam(1,$content);
$query->bindParam(2,$picture_link);
$query->execute();
function set_about_me($content, $picture_link){



}
?>
<!DOCTYPE html>
<html>

<head>

    <title> About Page </title>

</head>


<body>


<form action="about.php" method="post">

    About_me_content
    <input type="text" name="content" placeholder="content"> <br>

    picture_link
    <input type="text" name="picture_link" placeholder="picture_link">

    <br>

    <input type="submit">

</form>


</body>



</html>