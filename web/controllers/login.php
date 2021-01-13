<?php
/*  // with this the login works local, without the DB.
$validLogins = [
    [
        'email' => 'lauralea@ledertatze.com',
        'password' => 'leder',
        'role' => 'admin'
    ],[
        'email' => 'cmsuser@ledertatze.com',
        'password' => '5100cmsuser',
        'role' => 'user'
    ],
];

if(isset($_POST['login_try']) ) {
    // controll credentials
    foreach($validLogins as $account){
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
*/


$login_tries = 3;
$ban_time = 60 * 60; // in seconds = 1h
$db_datetime_format = 'Y-m-d H:i:s';

if(isset($_POST['login_try']) ) {
    // valid user?
    include('models/user.php');
    $usr = getUserByEmail($_REQUEST['email']);

    if($usr == false){
        // Return fail message
        die('wrong user');
    }else{
        // is user banned?
        if($usr['banned_at'] != null){
            $banned_at = date_create_from_format($db_datetime_format, $usr['banned_at']);
            $now = new DateTime();
            $interval = $now->getTimestamp() - $banned_at->getTimestamp() ;
            if($interval <= $ban_time){
                die('You are banned. Wait longer');
            }else{
                updateUserField($usr['id'], 'banned_at', null, 's');
                updateUserField($usr['id'], 'login_try', 0, 'i');
                $usr['login_try'] = 0;
            }
        }

        // check password
        if(password_verify($_REQUEST['password'], $usr['password'])){
            // reset login_try, if there are any
            if($usr['login_try'] != 0) {
                updateUserField($usr['id'], 'login_try', 0, 'i');
            }
            // start session
            die('correct password'); //logged in
        }else{
            // increment failure counter
            $fails = $usr['login_try'] + 1;
            // check failure counter, ban if needed
            if($fails >= $login_tries){
                updateUserField($usr['id'], 'banned_at', date('Y-m-d H:i:s'), 's');
                die('ban user: ' . date('Y-m-d H:i:s'));
            }else{
                // update user with incremented failures
                updateUserField($usr['id'], 'login_try', $fails, 'i');
                die('mistake counter incremented');
            }
        }
    }
    // login

    // or generate errors
}else{
    switch($_GET['action']){
        case 'logout':
            session_destroy();
            $content = 'Sie wurden ausgeloggt';
//            die('killed');
            break;
        default:

            if($_SESSION['logged_in'] == 1) {
                $content = 'Sie sind bereits eingeloggt';
            }else{
                $page = 'templates/forms/login.php';
            }
    }
}



