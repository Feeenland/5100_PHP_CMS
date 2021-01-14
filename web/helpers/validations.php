<?php

$errorFeedback = [
    'required' => 'Dieses Feld muss ausgefüllt sein',
    'number' => 'Dieses Feld muss eine Ganzzahl sein',
    'max20chars' => 'Dieses Feld darf max. 20 Zeichen haben'
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
                    $fieldErrors[] = $errorFeedback[$rule]; // 'required'
                }
            }

            if($rule == 'number'){
                if($value != '' && ! preg_match('/^(\d+)$/', $value)){
                    $fieldErrors[] = $errorFeedback[$rule]; // 'number'
                }
            }

            if($rule == 'max20chars'){
                if($value != '' && strlen($value) > 20){
                    $fieldErrors[] = $errorFeedback[$rule]; // 'required'
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