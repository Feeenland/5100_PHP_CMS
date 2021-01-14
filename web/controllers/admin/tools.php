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
    print 'dise aktion ist nicht möglich 4';
    //die('invalid action');
}


// VALIDATIONS
$rules = [
    'nav_title' => ['required', 'max20chars'],
    'title' => ['required'],
    'priority' => ['number', 'max20chars', 'required']
];


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
        break;
}

//var_dump($pageElement);
//die();


// PAGE FUNCTIONS

function listToolItems()
{
    include('models/tools.php');
    $items = getAllToolItems();
    $i = $items;
    print_r($i);
    return [
        'page' => 'templates/admin/lists/tools.php',
        'items' => $items, //saved all items from the models/tools.php
        'edit_link' => 'index.php?p=admin&module=tools&action=edit&id=',
        'delete_link' => 'index.php?p=admin&module=tools&action=delete&id=',
    ];
}

function showCreateForm($errors = [], $values = [])
{
    return [
        'page' => 'templates/admin/lists/tools.php',
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
                'nav_title' => $_REQUEST['nav_title'],
                'title' => $_REQUEST['title'],
                'priority' => $_REQUEST['priority'],
                'starred' => $_REQUEST['starred']
            ]);
    } else {
        include('models/tools.php');
        $res = saveToolEntry($_REQUEST);
        if ($res == false) {
            die('Speichern fehlgeschlagen');
        } else {
            // redirect to overview to prevent double-save
            header('Location: index.php?p=admin&module=tools&action=list', true, 301);
            exit();
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
                'nav_title' => $_REQUEST['nav_title'],
                'title' => $_REQUEST['title'],
                'priority' => $_REQUEST['priority'],
                'starred' => $_REQUEST['starred']
            ]);
    } else {
        include('models/tools.php');
        $res = saveToolEntry($_REQUEST);
        if ($res == false) {
            die('Speichern fehlgeschlagen');
        } else {
            // redirect to overview to prevent double-save
            header('Location: index.php?p=admin&module=tools&action=list', true, 301);
            exit();
        }
    }
}

function deleteNavigation($id)
{
}

