<?php
/**
 * This file controls the contact form.
 */


$page = 'templates/forms/contact.php';

$rules = [
    'first_name' => ['required'],
    'last_name' => ['required'],
    'email' => ['required','isEmail'],
    'message' => ['required']
];


if (isset($_POST['send'])){
    $pageElement = sendContactForm($rules);
    print 'blub';
}

print_r ($pageElement);

function sendContactForm($rules){
    // Starting point: define variables
    $receiver = 'lauraleaa@mail.com';
    $subject = 'Anfrage per Website Leder-Tatze';
    $message = '';
    $header = '';

    $errors = validateFields($rules);
    if (count($errors) != 0) {
        // errors in fields! Show Field
        return printErrors(
            $errors,
            [
                'first_name' => $_REQUEST['first_name'],
                'last_name' => $_REQUEST['last_name'],
                'subtitle' => $_REQUEST['subtitle'],
                'email' => $_REQUEST['email'],
                'message' => $_REQUEST['message']
            ]);
    } else{
        print '0 errors';
        $message = $_POST['message'];
        $header .= 'From: ' . $_POST['email'] . "\n";
        $header .= 'X-Mailer: PHP/' . phpversion();
        $header .= 'Content-type: text/plain; charset=iso-8859-1';
        mail($receiver, $subject, $message, $header);
    }

}


function printErrors($errors = [], $values = []){
    return [
        'page' => 'templates/forms/contact.php',
        'errors' => $errors,
        'values' => $values
    ];
}





/* Mailversand in PHP  tierry funktionierte*/

// Ausgangslage: Variablen definieren
$empfaenger = 'lauraleaa@mail.com';
$betreff = '';
$nachricht = '';
$header = '';

// Verarbeitung: Mail vorbereiten und senden
if (isset($_POST['vorname']) && isset($_POST['nachname']) && isset($_POST['email']) && isset($_POST['message'])) {
    // Ziel: mit der Funktion mail() ein E-Mail versenden. (online testen!!)
    mail($empfaenger, $betreff, $nachricht, $header);
}

// Verarbeitung: Mail vorbereiten und senden
if (isset($_POST['vorname']) && isset($_POST['nachname']) && isset($_POST['email']) && isset($_POST['message'])) {
    $nachricht = $_POST['message'];
    $header .= 'From: ' . $_POST['email'] . "\n";
    $header .= 'X-Mailer: PHP/' . phpversion();
    $header .= 'Content-type: text/plain; charset=iso-8859-1';
    // Ziel: mit der Funktion mail() ein E-Mail versenden. (online testen!!)
    mail($empfaenger, $betreff, $nachricht, $header);
    echo 'Hiiii, die Mail wurde versand! :D';
}

// 1. Durchgang: Nur Formular anzeigen // spätere Durchgänge: Formular nochmal anzeigen
?>
<!--<form action="" method="POST">
    <label for="fld_vorname">Vorname:</label>
    <input type="text" name="vorname" id="fld_vorname" value=""><br>

    <label for="fld_nachname">Nachname:</label>
    <input type="text" name="nachname" id="fld_nachname" value=""><br>

    <label for="fld_email">E-Mail:</label>
    <input type="text" name="email" id="fld_email" value=""><br>

    <label for="fld_message">Nachricht:</label>
    <textarea name="message" id="fld_message"></textarea>

    <br>
    <input type="submit">
</form>
-->