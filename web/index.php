<?php



session_start();



if(isset($_GET['p']) && $_GET['p'] != ''){ // from the get param, is p set and not empty ?
    if($_GET['p'] == 'login'){

        include('controllers/login.php');
    }
}

require 'templates/layout.php';
