<?php
/**
 * This file lists all the actions who are available to edit the Nwess.
 * checks whether a action is set and existing.
 * defines the rules for errors.
 * defines what to to by each action.
 */

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
    //print 'diese aktion ist nicht möglich';
    //die('invalid action');
}


// rules defined for the Validations(.php)
$rules = [
    'title' => ['required', 'max20chars'],
    'text' => ['required'],
    'bg_image' => ['required','number','existImgId'],
    'top_image' => ['required','number','existImgId'],
    'mid_image' => ['required','number','existImgId'],
    'bot_image' => ['required','number','existImgId']
];


if (isset($action)){
    switch ($action) {
        case 'list':
            // lists all items
            $pageElement = listItems();
            break;
        case 'new':
            // show empty mask
            $pageElement = showCreateForm();
            break;
        case 'create':
            // save new item
            $pageElement = createNewItem($rules);
            break;
        case 'edit':
            // show filled mask
            $pageElement = showUpdateForm($_REQUEST['id']);
            break;
        case 'update':
            // update existing item
            $pageElement = updateItem($rules);
            break;
        case 'delete':
            // delete item
            $pageElement = deleteItem($_REQUEST['id']);
            break;
    }
}


$location = 'news';// to re locate after the action (to go back to the list that was edited)
$happened = ''; // to change the message after the action (like = successfully deleted)


/**
 * this function = includes the models file, gets all the items and saves them in $items.
 * returns also the action to edit and delete a item such as the page in which they should be listed.
 */
function listItems()
{
    include('models/news.php');
    $items = getAllNews();
    return [
        'page' => 'templates/admin/lists/news.php',
        'items' => $items, //saved all items from the models/news.php
        'edit_link' => 'index.php?p=admin&module=news&action=edit&id=',
        'delete_link' => 'index.php?p=admin&module=news&action=delete&id=',
    ];
}

/**
 * this function = generates a blank mask.
 * if there are errors sent in the function it send existing errors along so they can be printed in the form.
 */
function showCreateForm($errors = [], $values = [])
{
    return [
        'page' => 'templates/admin/forms/news.php',
        'action' => 'index.php?p=admin&module=news&action=create',
        'errors' => $errors,
        'values' => $values
    ];
}

/**
 * this function = saves a new item if there are no errors.
 * if there are errors it goes back to the showCreateForm(error) functions and send existing errors along.
 */
function createNewItem($rules)
{
    $errors = validateFields($rules);
    if (count($errors) != 0) {
        // errors in fields! Show Field
        return showCreateForm(
            $errors,
            [
                'title' => $_REQUEST['title'],
                'text' => $_REQUEST['text'],
                'bg_image' => $_REQUEST['bg_image'],
                'top_image' => $_REQUEST['top_image'],
                'mid_image' => $_REQUEST['mid_image'],
                'bot_image' => $_REQUEST['bot_image']
            ]);
    } else {
        include('models/news.php');
        $res = saveEntry($_REQUEST);
        if ($res == false) {
            die('Speichern fehlgeschlagen');
        } else {
            // redirect to overview to prevent double-save
            //header('Location: index.php?p=admin&module=tools&action=list', true, 301);
            //exit();
            $location = 'news';
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
    include('models/news.php');
    $item = getItemById($id);
    return [
        'page' => 'templates/admin/forms/news.php',
        'action' => 'index.php?p=admin&module=news&action=update',
        'values' => $values != [] ? $values : $item,
        'errors' => $errors
    ];
}

/**
 * this function = updates a existing item if there are no errors.
 * if there are errors it's sends existing errors along, else update the item in the DB.
 */
function updateItem($rules)
{
    $errors = validateFields($rules);
    if (count($errors) != 0) {
        // errors in fields! show field
        return showUpdateForm(
            $_REQUEST['id'],
            $errors,
            [
                'title' => $_REQUEST['title'],
                'text' => $_REQUEST['text'],
                'bg_image' => $_REQUEST['bg_image'],
                'top_image' => $_REQUEST['top_image'],
                'mid_image' => $_REQUEST['mid_image'],
                'bot_image' => $_REQUEST['bot_image']
            ]);
    } else {
        include('models/news.php');
        $res = saveEntry($_REQUEST);
        if ($res == false) {
            print 'Speichern fehlgeschlagen';
            //die('Speichern fehlgeschlagen');
        } else {
            // redirect to overview tools list
            //header('Location: index.php?p=admin&module=tools&action=list', true, 301);
            //print 'location should be: index.php?p=admin&module=tools&action=list';
            //print $location;
            $location = 'news';
            $happened = 'Aktualisiert';
            include 'templates/admin/forms/edit-worked.php';
            //exit();
        }
    }
}

/**
 * this function = Deletes a Item in the DB.
 */
function deleteItem($id){
    //print 'delete that';
    include('models/news.php');
    $item = deleteItemById($id);
    $location = 'news';
    $happened = 'Gelöscht';
    include 'templates/admin/forms/edit-worked.php';
}

