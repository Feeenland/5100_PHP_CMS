<?php
/**
 * The Index.php controls the whole website.
 * or to say so index.php is the whole website with different content each time.
 */

// database connection
include('database/config.php');
include('database/database.php');
// helpers
include('helpers/validations.php');

session_start();
error_reporting(E_WARNING); // don't show the warnings
$pageElement= null;
$p ='home';

if(isset($_GET['p']) && $_GET['p'] != ''){// from the get param, is p set and not empty ? load the page
    $p =$_GET['p'] ;
    if($_GET['p'] == 'login'){
        include('controllers/login.php');
        $pageTitle = 'Login bereich';
    }else if($_GET['p'] == 'home'){
        $page = 'templates/home.php';
        $pageTitle = 'Lederbearbeitung';
    }else if($_GET['p'] == 'news'){
        $page = 'templates/news.php';
        $pageTitle = 'Neues';
    }else if($_GET['p'] == 'work'){
        $page = 'templates/work.php';
        $pageTitle = 'Lederbearbeitung';
    }else if($_GET['p'] == 'tools'){
        $page = 'templates/tools.php';
        $pageTitle = 'Werkzeug zur Lederbearbeitung';
    }else if($_GET['p'] == 'gallery'){
        $page = 'templates/gallery.php';
        $pageTitle = 'Gallerie';
    }else if($_GET['p'] == 'contact'){
        include('controllers/contact.php');
        $pageTitle = 'Kontakt';
    }else if($_GET['p'] == 'contact_confirm'){
        $page ='templates/contact_confirm.php';
        $pageTitle = 'Kontakt';
    }else if($_GET['p'] == 'imprint'){
        $page ='templates/imprint.php';
        $pageTitle = 'Impressum';
    }else if($_GET['p'] == 'data_protection'){
        $page ='templates/data_protection.php';
        $pageTitle = 'Datenschutzerklärung';
    }else if($_GET['p'] == 'admin'){
        $page ='templates/admin/admin.php';
        $pageTitle = 'Admin bereich';
    }
}else{
    $page = 'templates/home.php';
}

require 'templates/layout.php';
