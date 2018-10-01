<?php
require 'db_querys.php';
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
    <input type="text" name="phone_number"  value="<?php echo $start_data[0]['phone_number']?>">  <br>

    Email
    <input type="text" name="email" value="<?php echo $start_data[0]['email']?>" ><br>

    Picture link
    <input type="text" name="picture_link" value="<?php echo $start_data[0]['picture_link']?>">

    <br>

    <input type="submit">

</form>


</body>



</html>