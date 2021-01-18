<?php


// which actions are available
$available_actions = [
    'list',     // list all entries of the type
    'new',      // show mask to create new navigation point
    'create',   // store a new navigation point in db (only possible if 'new' is filled)
    'edit',     // show mask to edit an existent navigation point
    'update',   // update a navigation point in db
    'delete'    // delete a navigation point in db
];

// is the action set & available = then oky to run
if (isset($_REQUEST['action']) && in_array($_REQUEST['action'], $available_actions)) {
    $action = $_REQUEST['action'];
} else {
    //print 'diese aktion ist nicht möglich 4';
    //die('invalid action');
}


// VALIDATIONS
$rules = [
    'title' => ['required', 'max20chars'],
    'subtitle' => ['required'],
    'text' => ['required'],
    'image' => ['required', 'isImage']
];

if (isset($action)){
    switch ($action) {
        case 'list':
            $pageElement = listToolItems();
            break;
        case 'new':
            // show empty mask
            $pageElement = showCreateForm();
            break;
        case 'create':
            // save
            $pageElement = createToolItem($rules);
            break;
        case 'edit':
            // show filled mask
            $pageElement = showUpdateForm($_REQUEST['id']);
            break;
        case 'update':
            // update
            $pageElement = updateToolItem($rules);
            break;
        case 'delete':
            // delete
            $pageElement = deleteTools($_REQUEST['id']);
            break;
    }
}


//var_dump($pageElement);
//die();

$location = 'tools';// to re locate after the action
$happened = ''; // to change the message after the action

// PAGE FUNCTIONS

function listToolItems()
{
    include('models/tools.php');
    $items = getAllToolItems();
    //$i = $items;
    //print_r($i);
    return [
        'page' => 'templates/admin/lists/tools.php',
        'items' => $items, //saved all items from the models/tools.php
        'edit_link' => 'index.php?p=admin&module=tools&action=edit&id=',
        'delete_link' => 'index.php?p=admin&module=tools&action=delete&id=',
    ];
}

function showCreateForm($errors = [], $values = [])
{
    //print 'new';
    return [
        'page' => 'templates/admin/forms/tools.php',
        'action' => 'index.php?p=admin&module=tools&action=create',
        'errors' => $errors,
        'values' => $values
    ];
}

function createToolItem($rules)
{
    $errors = validateFields($rules);
    if (count($errors) != 0) {
        // errors in fields! Show Field
        return showCreateForm(
            $errors,
            [
                'title' => $_REQUEST['title'],
                'subtitle' => $_REQUEST['subtitle'],
                'text' => $_REQUEST['text'],
                'image' => $_REQUEST['image']
            ]);
    } else {
        include('models/tools.php');
        $res = saveToolEntry($_REQUEST);
        if ($res == false) {
            die('Speichern fehlgeschlagen');
        } else {
            // redirect to overview to prevent double-save
            //header('Location: index.php?p=admin&module=tools&action=list', true, 301);
            //exit();
            $location = 'tools';
            $happened = 'Neu Erstellt';
            include 'templates/admin/forms/edit-worked.php';
        }
    }
}

function showUpdateForm($id, $errors = [], $values = [])
{
    include('models/tools.php');
    $item = getToolItemById($id);
    return [
        'page' => 'templates/admin/forms/tools.php',
        'action' => 'index.php?p=admin&module=tools&action=update',
        'values' => $values != [] ? $values : $item,
        'errors' => $errors
    ];
}

function updateToolItem($rules)
{
    $errors = validateFields($rules);
    if (count($errors) != 0) {
        // errors in fields! show field
        return showUpdateForm(
            $_REQUEST['id'],
            $errors,
            [
                'id' => $_REQUEST['id'],
                'title' => $_REQUEST['title'],
                'subtitle' => $_REQUEST['subtitle'],
                'text' => $_REQUEST['text'],
                'image' => $_REQUEST['image']
            ]);
    } else {
        include('models/tools.php');
        $res = saveToolEntry($_REQUEST);
        //print $_REQUEST['text'];
        if ($res == false) {
            print 'Speichern fehlgeschlagen';
            //die('Speichern fehlgeschlagen');
        } else {
            // redirect to overview tools list
            //header('Location: index.php?p=admin&module=tools&action=list', true, 301);
            //print 'location should be: index.php?p=admin&module=tools&action=list';
            //print $location;
            $location = 'tools';
            $happened = 'Aktualisiert';
            include 'templates/admin/forms/edit-worked.php';
            //exit();
        }
    }
}

function deleteTools($id){
    //print 'delete that';
    include('models/tools.php');
    $item = deleteToolItemById($id);
    $location = 'tools';
    $happened = 'Gelöscht';
    include 'templates/admin/forms/edit-worked.php';
}

