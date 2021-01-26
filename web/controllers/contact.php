<?php
/**
 * This file controls the contact form. Mail delivery :)
 */

$page = 'templates/forms/contact.php';

$errorMessage =[
        'first_name' => '',
        'last_name' => '',
        'email' => '',
        'message' => ''
];

$receiver = 'lauraleaa@mail.com'; // change Email here to try
$subject = 'Kontakt per Leder Tatze';
$message = '';
$header = '';


if (isset($_POST['submit'])) {
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
// valid infos ?= send Mail
    /* isset mit Martin angeschaut, hat nicht funktioniert! (comment steht hier auf Martins Wunsch:)*/
    if (strlen($_POST['first_name']) < 1) {
        $errorMessage['first_name'] = 'Bitte ausfüllen';
    } else if (strlen($_POST['last_name']) < 1) {
        $errorMessage['last_name'] = 'Bitte ausfüllen';
    } else if (strlen($_POST['email']) < 1) {
        $errorMessage['email'] = 'Bitte Email angeben!';
    } else if (!preg_match('/^[\w\-\.]+@([\w\-]+\.)+[\w\-]{1,5}/', $_POST['email'])) {
        $errorMessage['email'] = 'Bitte korrekte Email angeben!';
    } else if (strlen($_POST['message']) < 1) {
        $errorMessage['message'] = 'Bitte Schreibe eine Nachricht =)';
    } else {
        $message = $_POST['message'];
        $header .= 'From: ' . $_POST['email'] . "\n";
        $header .= 'X-Mailer: PHP/' . phpversion();
        $header .= 'Content-type: text/plain; charset=iso-8859-1';
        // Send Email :)
        mail($receiver, $subject, $message, $header);
        //echo 'Hiiii, die Mail wurde versand! :D';
        $page = 'templates/contact_confirm.php';
        return true;
    }
}

?>
