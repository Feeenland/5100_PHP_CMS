<?php


$login_tries = 3; // 3 tries get the user to log in
$ban_time = 60 * 60; // in seconds = 1h will the user be banner by 3 fails
$db_datetime_format = 'Y-m-d H:i:s'; // date format = 2021-01-13 11:06:37
$login_output = ''; // gives out what happened (fail ty, banned)

if(isset($_POST['login_try']) ) {
    // valid user?
    include('models/users.php');
    $usr = getUserByEmail($_REQUEST['email']);

    if($usr == false){
        // Return fail message
        $login_output = 'fehlerhafter login versuch, etwas wurde falsch eingegeben';
        $page = 'templates/forms/login.php';
        //die('wrong user');
    }else{
        // is user banned?
        if($usr['banned_at'] != null){
            $banned_at = date_create_from_format($db_datetime_format, $usr['banned_at']);
            $now = new DateTime();
            $interval = $now->getTimestamp() - $banned_at->getTimestamp() ;
            //print $interval.'and'.$ban_time;
            if($interval <= $ban_time){
                $login_output = 'Aufgrund zu vieler falscher login versuche wurden sie gebannt <br>
                                    versuchen sie es später erneut! ';
                $page = 'templates/forms/login.php';
                //die('You are banned. Wait longer'); // break?
            }else{

                updateUserField($usr['id'], 'banned_at', null, 's');
                updateUserField($usr['id'], 'login_try', 0, 'i');
                $usr['login_try'] = 0;
                print $usr['login_try'];
            }

        }
        if ( $usr['banned_at'] == null || $usr['login_try'] <= 1){

            // check password
            if(password_verify($_REQUEST['password'], $usr['password'])){ //match the pw with pw in DB
                // reset login_try, if there are any
                if($usr['login_try'] != 0) {
                    updateUserField($usr['id'], 'login_try', 0, 'i');
                }
                //print 'pw down';
                // start session
                $_SESSION['logged_in'] = 1;
                $login_output = 'Hallo '.$usr['first_name'].' '.$usr['last_name'].'<br> sie haben sich korrekt eingeloggt';
                $page = 'templates/admin/admin.php';
                //$page = 'templates/news.php';
                //die('correct password'); //logged in
            }else{
                // increment failure counter
                $fails = $usr['login_try'] + 1; //every try +1, and banned at 3
                // check failure counter, ban if needed
                if($fails >= $login_tries){
                    updateUserField($usr['id'], 'banned_at', date('Y-m-d H:i:s'), 's');
                    $login_output = 'Aufgrund zu vieler falscher login versuche wurden sie gebannt <br>
                                    versuchen sie es später erneut! <br>
                                    zeit der Bannung: '.date('Y-m-d H:i:s');
                    $page = 'templates/forms/login.php';
                    //die('ban user: ' . date('Y-m-d H:i:s'));
                }else{
                    // update user with incremented failures
                    updateUserField($usr['id'], 'login_try', $fails, 'i');
                    $login_output = 'fehlerhafter login versuch, etwas wurde falsch eingegeben';
                    $page = 'templates/forms/login.php';
                    //die('mistake counter incremented');
                }
            }
        }

    }
    // login

    // or generate errors
}else{
        switch($_GET['action']){    // browser said its undefined! (but with a isset it's not working)
            case 'logout':
                session_destroy();
                $login_output= 'Sie wurden ausgeloggt';
                $page = 'templates/forms/login.php';
                //$content = 'Sie wurden ausgeloggt';
                //   die('killed');
                break;
            default:

                if(isset($_SESSION['logged_in'])){ // this case should not happen
                    $_SESSION['logged_in'] == 1 ;
                    $content = 'Sie sind bereits eingeloggt';
                }else{
                    $page = 'templates/forms/login.php';
                }
        }

}


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



