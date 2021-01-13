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
    <title><?php print $pageTitle ?? 'Leder Tatze' ?></title>
    <meta name="Description" content="Lederrüstung für ein LARP selbst anfertigen.
     Auf dieser Webseite werden Arbeitsschritte und Werkzeuge beschrieben, welche du benötigst, um selbst eine Rüstung aus Leder anzufertigen "/>
    <meta name="keywords" content="LARP, Leder, Rüsung, selbst">

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

<?php

if(isset($page)){ //is the var $page defined
    include($page); // include $page
}else{
    if($content){ //is the var $content defined //content is not defined jet!
        print $content; // print content
    }else{
        //print 'nothing found'; // else load default file
        include('default.php');
    }
}
?>

<?php include('footer.php') ?>


<!-- js -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
