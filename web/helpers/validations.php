<?php
/**
 * This file validates and defined all errors for the fields.
 * for the fields for creating and editing content as well as the login / contact form.
 * the output text in the event of an error is also defined here.
 */

$errorFeedback = [
    'required' => 'Dieses Feld muss ausgefüllt sein.',
    'number' => 'Dieses Feld muss eine Ganzzahl sein.',
    'isImage' => 'Dieses Feld muss ein Bildername mit .jpg, .jpeg oder .png enthalten.',
    'isEmail' => 'Bitte eine Korrekt Email adresse angeben.',
    'max20chars' => 'Dieses Feld darf max. 20 Zeichen haben',
    'password' => 'Das Passwort muss mindestens 8 zeichen, 2 Grossbuchstaben, 1 spezielles zeichen, 2 zahlen und 3 Kleinbuchstaben haben' //not now in use
];

function validateFields($fieldRules){
    global $errorFeedback;
    $errors = [];
    foreach($fieldRules as $field => $rules){
        $fieldErrors = [];
        $value = $_REQUEST[$field];
        foreach($rules as $rule){


            if($rule == 'required'){
                if(! isset($value) || trim($value) == '' ){
                    $fieldErrors[] = $errorFeedback[$rule]; // 'its required'
                }
            }

            if($rule == 'number'){
                if($value != '' && ! preg_match('/^(\d+)$/', $value)){
                    $fieldErrors[] = $errorFeedback[$rule]; // 'its a number'
                }
            }

            if($rule == 'isImage'){
                if($value != '' && ! preg_match('/.*\.(jpeg|jpg|png)/', $value)){
                    $fieldErrors[] = $errorFeedback[$rule]; // 'its a image'
                }
            }

            if($rule == 'isEmail'){
                if($value != '' && ! preg_match('/^[\w\-\.]+@([\w\-]+\.)+[\w\-]{1,5}/', $value)){
                    $fieldErrors[] = $errorFeedback[$rule]; // 'its a email'
                }
            }

            if($rule == 'max20chars'){
                if($value != '' && strlen($value) > 20){
                    $fieldErrors[] = $errorFeedback[$rule]; // 'max chars 20'
                }
            }

            if($rule == 'password'){
                if($value != '' && ! preg_match('/^(?=.*[A-Z].*[A-Z])(?=.*[!@#$&*])(?=.*[0-9].*[0-9])(?=.*[a-z].*[a-z].*[a-z]).{8,}$/', $value)){
                    $fieldErrors[] = $errorFeedback[$rule];
                    //'its a password with = 8 characters length oe more, 2 letters in Upper Case, 1 Special Character, 2 numerals, 3 letters in Lower Case'
                }
            }
        }
        // Are there some errors?
        if(count($fieldErrors) != 0){
            $errors[$field] = $fieldErrors;
        }
    }
    return $errors;
}