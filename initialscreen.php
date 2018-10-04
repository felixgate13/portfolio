<?php
require 'dbConn.php';
function retrieve_data($db)
{
    $retrieve_statement = $db->prepare('SELECT `content`, `picture_link`, `phone_number`, `email` FROM `about_me` WHERE `id` = 1;');
    $retrieve_statement->execute();
    $start_data = $retrieve_statement->fetch();
    return $start_data;
}

$start_data = retrieve_data($db);

function retrieve_data_project($db, $selector) {

    $retrieve_statement = $db->prepare('SELECT `picture_link`, `picture_text`, `picture_image_front`, `code_link` FROM `projects` WHERE `id` = ?;');
    $retrieve_statement->bindParam(1, $selector);
    $retrieve_statement->execute();
    $data = $retrieve_statement->fetch();
    return $data;
}
$picture_data1 = retrieve_data_project($db, 1);
$picture_data2 = retrieve_data_project($db, 2);
$picture_data3 = retrieve_data_project($db, 3);
$picture_data4 = retrieve_data_project($db, 4);
$picture_data5 = retrieve_data_project($db, 5);
$picture_data6 = retrieve_data_project($db, 6);
$picture_data7 = retrieve_data_project($db, 7);
$picture_data8 = retrieve_data_project($db, 8);
$picture_data9 = retrieve_data_project($db, 9);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>
    <link rel="stylesheet" type="text/css" href="initialscreen.css">.
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:200,500">
</head>
<body>
<!-- HOME PAGE -->
<div class="headerbox">
    <div class="applicationimages1">
        <img src="html5-original-wordmark.svg" class="logoleft">
        <img src="css3-original-wordmark.svg" class="logoleft">
        <img src="javascript-original.svg" class="logoleft">
    </div>
    <div class="descriptionbox">
        <div class="descrip-holder">
            <h1 class="name">
                Felix Gate
            </h1>
            <h2 class="title">
                full stack developer, website creator
            </h2>
            <div class="downcontainer">
                <a href="#project" >
                    <p class="downlink">
                        explore my work &#8628;
                    </p>
                </a>
            </div>
         </div>
    </div>
    <div class="applicationimages2">
        <img src="php-original.svg" class="logoright">
        <img src="git-original-wordmark.svg" class="logoright">
        <img src="mysql-original-wordmark.svg" class="logoright">
    </div>
</div>
<!-- SITCKY-NAV -->
<div id="portfolio"></div> <!-- portfolio div required for internal links -->
<nav class="stickynav">
    <div class="linkcontainer" >
        <a href="#" class="navlink">
            home
        </a>
        <a href="#portfolio" class="navlink">
            aboutme
        </a>
        <a href="#project" class="navlink">
            porfolio
        </a>
        <a href="#contactme" class="navlink" >
            contact me
        </a>
    </div>
</nav>
<!-- ABOUT ME CONTENT -->
<div class="content-container">
    <section class="aboutme" >
       <div class="title-wrapper">
            <h2 id="metitle">
                About me
            </h2>
       </div>
        <div id="my-photo-holder">
            <img src="<?php echo $start_data['picture_link'] ?>" >
        </div>
        <p id="about-me-content">
            <?php
            echo $start_data['content']
            ?>
        </p>
    </section>
    <!--PORTFOLIO CONTENT    THIS IS WHERE THE PICTURE DATA WILL GO NEED TO BUILD HTML FOR THIS   -->
    <div id="project"></div>
    <section class="portfolio"  >
        <h2 class="project" > Projects </h2>
        <div class="boxholder">
            <div class="picturelink">
                <div class="front-picture">
                    <img src="<?php echo $picture_data1['picture_image_front']?>" class="port_img">
                </div>
                <div class="back-picture">
                    <div class="code-link">
                        <a href="<?php echo $picture_data1['code_link'] ?>"> Code Link </a>
                    </div>
                    <div class="app-link">
                        <a href="<?php echo $picture_data1['picture_link'] ?>"> App Link </a>
                    </div>
                </div>
            </div>
            <div class="picturelink">
                <div class="front-picture">
                <img src="<?php echo $picture_data2['picture_image_front']?>" class="port_img">
                </div>
                <div class="back-picture">
                    <div class="code-link">
                        <a href="<?php echo $picture_data2['code_link'] ?>"> Link </a>
                    </div>
                    <div class="app-link">
                        <a href="<?php echo $picture_data2['picture_link'] ?>"> App Link </a>
                    </div>
            </div>
            </div>
            <div class="picturelink">
                <div class="front-picture">
                <img src="<?php echo $picture_data3['picture_image_front']?>" class="port_img">
                </div>
                <div class="back-picture">
                    <div class="code-link">
                        <a href="<?php echo $picture_data3['code_link'] ?>"> Code Link  </a>
                    </div>
                    <div class="app-link">
                        <a href="<?php echo $picture_data3['picture_link'] ?>"> App Link  </a>
                    </div>
            </div>
            </div>
            <div class="picturelink">
                <div class="front-picture">
                <img src="<?php echo $picture_data4['picture_image_front']?>" class="port_img">
                </div>
                <div class="back-picture">
                    <div class="code-link">
                        <a href="<?php echo $picture_data4['code_link'] ?>"> Code Link </a>
                    </div>
                    <div class="app-link">
                        <a href="<?php echo $picture_data4['picture_link'] ?>"> App Link </a>
                    </div>
            </div>
            </div>
            <div class="picturelink">
                <div class="front-picture">
                <img src="<?php echo $picture_data5['picture_image_front']?>" class="port_img">
                </div>
                <div class="back-picture">
                    <div class="code-link">
                        <a href="<?php echo $picture_data5['code_link'] ?>"> Code Link </a>
                    </div>
                    <div class="app-link">
                        <a href="<?php echo $picture_data5['picture_link'] ?>"> App Link </a>
                    </div>
            </div>
            </div>
            <div class="picturelink">
                <div class="front-picture">
                <img src="<?php echo $picture_data6['picture_image_front']?>" class="port_img">
                </div>
                <div class="back-picture">
                    <div class="code-link">
                        <a href="<?php echo $picture_data6['code_link'] ?>"> Code Link </a>
                    </div>
                    <div class="app-link">
                        <a href="<?php echo $picture_data6['picture_link'] ?>"> App Link </a>
                    </div>
            </div>
            </div>
            <div class="picturelink">
                <div class="front-picture">
                <img src="<?php echo $picture_data7['picture_image_front']?>" class="port_img">
                </div>
                <div class="back-picture">
                    <div class="code-link">
                        <a href="<?php echo $picture_data7['code_link'] ?>"> Code Link </a>
                    </div>
                    <div class="app-link">
                        <a href="<?php echo $picture_data7['picture_link'] ?>"> App Link </a>
                    </div>
            </div>
            </div>
            <div class="picturelink">
                <div class="front-picture">
                <img src="<?php echo $picture_data8['picture_image_front']?>" class="port_img">
                </div>
                <div class="back-picture">
                    <div class="code-link">
                        <a href="<?php echo $picture_data8['code_link'] ?>"> Code Link </a>
                    </div>
                    <div class="app-link">
                        <a href="<?php echo $picture_data8['picture_link'] ?>"> App Link </a>
                    </div>
            </div>
            </div>
            <div class="picturelink">
                <div class="front-picture">
                    <img src="<?php echo $picture_data9['picture_image_front']?>" class="port_img">
                </div>
                <div class="back-picture">
                    <div class="code-link">
                        <a href="<?php echo $picture_data9['code_link'] ?>"> Code Link </a>
                    </div>
                    <div class="app-link">
                        <a href="<?php echo $picture_data9['picture_link'] ?>"> App Link </a>
                    </div>
            </div>
            </div>
        </div>
    </section>
</div>
<!--CONTACT INFO-->
<div class="contactme" >
    <div id="contactme"></div> <!-- FOR NAV BAR INTERNAL LINK -->
    <h2 class="contact-me-title">
        Contact me
    </h2>
    <footer class="contactinfo">
        <p>
            <?php
            echo $start_data['email']
            ?>
        </p>
        <p>
            <?php
            echo $start_data['phone_number']
            ?>
        </p>
        <p>
            https://github.com/felixgate13
        </p>
    </footer>
</div>
</body>
</html>