<?php
/**
 * The Index.php controls the whole website.
 * or to say so index.php is the whole website with different content each time.
 */

// database connection
include('database/config.php');
include('database/database.php');

session_start();
//error_reporting(E_WARNING);
$pageElement= null;
$p ='home';

if(isset($_GET['p']) && $_GET['p'] != ''){// from the get param, is p set and not empty ?
    $p =$_GET['p'] ;
    if($_GET['p'] == 'login'){
        include('controllers/login.php');
    }else if($_GET['p'] == 'home'){
        $page = 'templates/home.php';
    }else if($_GET['p'] == 'news'){
        $page = 'templates/news.php';
    }else if($_GET['p'] == 'work'){
        $page = 'templates/work.php';
    }else if($_GET['p'] == 'tools'){
        $page = 'templates/tools.php';
    }else if($_GET['p'] == 'contact'){
        include('controllers/contact.php');
    }else if($_GET['p'] == 'admin'){
        $page ='templates/admin/admin.php';
    }
}else{
    $page = 'templates/home.php';
}

require 'templates/layout.php';
