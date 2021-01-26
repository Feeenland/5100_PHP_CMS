<?php
/**
 * This file lists all the actions who are available to edit the tools.
 * checks whether a action is set and existing.
 * defines the rules for errors.
 * defines what to to by each action.
 */

// which actions are available
$available_actions = [
    'list',     // list all entries of the type
    'new',      // show mask to create new item
    'create',   // store a new item in the DB (only possible if 'new' is filled)
    'edit',     // show mask to edit an existent item
    'update',   // update a item in DB
    'delete'    // delete a item in DB
];

// is the action set & available = then oky to run
if (isset($_REQUEST['action']) && in_array($_REQUEST['action'], $available_actions)) {
    $action = $_REQUEST['action'];
} else {
    //print 'diese aktion ist nicht möglich';
    //die('invalid action');
}

// rules defined for the Validations(.php)
$rules = [
    'title' => ['required', 'max20chars'],
    'subtitle' => ['required'],
    'text' => ['required'],
    'image_id' => ['required', 'number','existImgId']
];

if (isset($action)){
    switch ($action) {
        case 'list':
            // lists all items
            $pageElement = listToolItems();
            break;
        case 'new':
            // show empty mask
            $pageElement = showCreateForm();
            break;
        case 'create':
            // save new item
            $pageElement = createToolItem($rules);
            break;
        case 'edit':
            // show filled mask
            $pageElement = showUpdateForm($_REQUEST['id']);
            break;
        case 'update':
            // update existing item
            $pageElement = updateToolItem($rules);
            break;
        case 'delete':
            // delete item
            $pageElement = deleteTools($_REQUEST['id']);
            break;
    }
}

$location = 'tools';// to re locate after the action (to go back to the list that was edited)
$happened = ''; // to change the message after the action (like = successfully deleted)


/**
 * this function = includes the models file, gets all the items and saves them in $items.
 * returns also the action to edit and delete a item such as the page in which they should be listed.
 */
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

/**
 * this function = generates a blank mask.
 * if there are errors sent in the function it send existing errors along so they can be printed in the form.
 */
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

/**
 * this function = saves a new item if there are no errors.
 * if there are errors it goes back to the showCreateForm(error) functions and send existing errors along.
 */
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
                'image_id' => $_REQUEST['image_id']
            ]);
    } else {
        include('models/tools.php');
        $res = saveToolEntry($_REQUEST);
        if ($res == false) {
            die('Speichern fehlgeschlagen');
        } else {
            // redirect to overview to prevent double-save
            //exit();
            $location = 'tools';
            $happened = 'Neu Erstellt';
            include 'templates/admin/forms/edit-worked.php';
        }
    }
}

/**
 * this function = shows a mask filled with the entries of the DB.
 */
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

/**
 * this function = updates a existing item if there are no errors.
 * if there are errors it's sends existing errors along, else update the item in the DB.
 */
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
                'image_id' => $_REQUEST['image_id']
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
            //print $location;
            $location = 'tools';
            $happened = 'Aktualisiert';
            include 'templates/admin/forms/edit-worked.php';
            //exit();
        }
    }
}

/**
 * this function = Deletes a Item in the DB.
 */
function deleteTools($id){
    //print 'delete that';
    include('models/tools.php');
    $item = deleteToolItemById($id);
    $location = 'tools';
    $happened = 'Gelöscht';
    include 'templates/admin/forms/edit-worked.php';
}

