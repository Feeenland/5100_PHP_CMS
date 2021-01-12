<?php

$validLogins = [
    [
        'email' => 'dings@bums.com',
        'password' => '123456',
        'role' => 'admin'
    ],[
        'email' => 'test@example.com',
        'password' => 'asd123',
        'role' => 'moderator'
    ],
];

if(isset($_POST['login_try']) ) {
    // controll credentials
    foreach($validLogins as $account){
        // take it from the DB !!! ### 1:13h ### (auch für user/admin)

        if($_POST['email'] == $account['email'] &&
            $_POST['password'] == $account['password']){
            $_SESSION['logged_in'] = 1;
            $_SESSION['role'] = $account['role'];
        }
    }
}else{ //generate errors
    switch($_GET['action']){
        case 'logout':
            session_destroy();
            $content = 'Sie wurden ausgeloggt';
            // die('killed');
            break;
        default:

            if($_SESSION['logged_in'] == 1) {
                $content = 'Sie sind bereits eingeloggt';
            }else{
                $page = 'templates/forms/login.php';
            }
    }
}


$page = 'templates/forms/login.php';


