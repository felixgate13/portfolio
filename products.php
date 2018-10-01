<?php
?>
<!DOCTYPE html>
<html>

<head>

    <title> Project Page </title>

</head>


<body>


<form action="db_querys.php" method="post">
    <select name="position">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
    </select>
    <br>
    picture_image_front
    <input type="text" name="picture_url" value=" <?php echo $start_data_project[0]['picture_url']?>"><br>

    picture_text
    <input type="text" name="picture_text" value=" <?php echo $start_data_project[0]['picture_text']?>"><br>

    app_link
    <input type="text" name="app_link" value=" <?php echo $start_data_project[0]['app_link']?>"><br>

    code_link
    <input type="text" name="code_link" value=" <?php echo $start_data_project[0]['code_link']?>"><br>

    <input type="submit">

</form>
<a href="dashboard.php">
    Back
</a>

</body>



</html>