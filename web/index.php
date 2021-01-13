<?php

// database connection
include('database/config.php');
include('database/database.php');

session_start();
//error_reporting(E_WARNING);

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
    }
}else{
    $page = 'templates/home.php';
}

require 'templates/layout.php';
