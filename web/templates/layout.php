<?php
/**
 * layout.php = This file connects the various contents and integrates the header and JS data.
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- seo optimierte meta description und title -->
    <title>Leder Tatze - <?php if (isset($pageTitle)){print $pageTitle;} else {print 'Lederbearbeitung';}  ?></title>
    <meta name="Description" content="Lederrüstung für ein LARP selbst anfertigen.
     Auf dieser Webseite werden Arbeitsschritte und Werkzeuge beschrieben, welche du benötigst, um selbst eine Rüstung aus Leder anzufertigen "/>
    <meta name="keywords" content="LARP, Leder, Lederbearbeitung, Rüsung">

    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#000000">

    <!-- style -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php include('navigation.php') ?>
<div class="container">
    <div class="row">
        <div class="col-10 offset-1">
            <span class="login_output font_wind"> <!--// prints infos from the login (like failed etc.)-->
                <?php if (isset($login_output)){print $login_output;} ?>
            </span>
        </div>
    </div>
</div>


<?php

if(isset($page)){ //is the var $page defined
    include($page); // include $page
}else{
    if (isset($content)){ //is the var $content defined //content is not defined jet!
        print $content; // print content
    }else{
        //print 'nothing found'; // else load default file
        include('default.php');
    }
}
?>

<?php include('footer.php') ?>


<!-- js -->
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- My js -->
<script src="js/script.js"></script>

</body>
</html>
