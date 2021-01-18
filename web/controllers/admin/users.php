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
    'first_name' => ['required'],
    'last_name' => ['required'],
    'email' => ['required', 'isEmail'],
    'password' => ['required']
];

if (isset($action)){
    switch ($action) {
        case 'list':
            $pageElement = listItems();
            break;
        case 'new':
            // show empty mask
            $pageElement = showCreateForm();
            break;
        case 'create':
            // save
            $pageElement = createNewItem($rules);
            break;
        case 'edit':
            // show filled mask
            $pageElement = showUpdateForm($_REQUEST['id']);
            break;
        case 'update':
            // update
            $pageElement = updateItem($rules);
            break;
        case 'delete':
            // delete
            $pageElement = deleteItem($_REQUEST['id']);
            break;
    }
}


//var_dump($pageElement);
//die();

$location = 'tools';// to re locate after the action
$happened = ''; // to change the message after the action

// PAGE FUNCTIONS

function listItems()
{
    include('models/users.php');
    $items = getAllUsers();
    return [
        'page' => 'templates/admin/lists/users.php',
        'items' => $items, //saved all items from the models/tools.php
        'edit_link' => 'index.php?p=admin&module=users&action=edit&id=',
        'delete_link' => 'index.php?p=admin&module=users&action=delete&id=',
    ];
}

function showCreateForm($errors = [], $values = [])
{
    print 'new';
    return [
        'page' => 'templates/admin/forms/users.php',
        'action' => 'index.php?p=admin&module=users&action=create',
        'errors' => $errors,
        'values' => $values
    ];
}

function createNewItem($rules)
{
    $errors = validateFields($rules);
    if (count($errors) != 0) {
        // errors in fields! Show Field
        return showCreateForm(
            $errors,
            [
                'first_name' => $_REQUEST['first_name'],
                'last_name' => $_REQUEST['last_name'],
                'email' => $_REQUEST['email'],
                'password' => $_REQUEST['password']
            ]);
    } else {
        include('models/users.php');
        $res = saveEntry($_REQUEST);
        if ($res == false) {
            die('Speichern fehlgeschlagen');
        } else {
            // redirect to overview to prevent double-save
            //header('Location: index.php?p=admin&module=tools&action=list', true, 301);
            //exit();
            $location = 'users';
            $happened = 'Neu Erstellt';
            include 'templates/admin/forms/edit-worked.php';
        }
    }
}

function showUpdateForm($id, $errors = [], $values = [])
{
    include('models/users.php');
    $item = getItemById($id);
    return [
        'page' => 'templates/admin/forms/users.php',
        'action' => 'index.php?p=admin&module=users&action=update',
        'values' => $values != [] ? $values : $item,
        'errors' => $errors
    ];
}

function updateItem($rules)
{
    $errors = validateFields($rules);
    if (count($errors) != 0) {
        // errors in fields! show field
        return showUpdateForm(
            $_REQUEST['id'],
            $errors,
            [
                'first_name' => $_REQUEST['first_name'],
                'last_name' => $_REQUEST['last_name'],
                'email' => $_REQUEST['email'],
                'password' => $_REQUEST['password'],
                'banned_at' => $_REQUEST['banned_at']
            ]);
    } else {
        include('models/users.php');
        $res = saveEntry($_REQUEST);
        if ($res == false) {
            print 'Speichern fehlgeschlagen';
            //die('Speichern fehlgeschlagen');
        } else {
            // redirect to overview tools list
            //header('Location: index.php?p=admin&module=tools&action=list', true, 301);
            //print 'location should be: index.php?p=admin&module=tools&action=list';
            //print $location;
            $location = 'users';
            $happened = 'Aktualisiert';
            include 'templates/admin/forms/edit-worked.php';
            //exit();
        }
    }
}

function deleteItem($id){
    //print 'delete that';
    include('models/users.php');
    $item = deleteItemById($id);
    $location = 'users';
    $happened = 'Gelöscht';
    include 'templates/admin/forms/edit-worked.php';
}

