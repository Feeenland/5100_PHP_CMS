<?php
/**
 * This file includes list object for the admin to edit and the controller to make it possible to edit.
 */

$admin_path = 'controllers/admin/'; // to avoid redundancies and simply to have the possibility to change the path

// which modules are available
$modules = [
    // which page i need if this module is active
    'tools' => $admin_path . 'tools.php',
    'users' => $admin_path . 'users.php'
];

$default_module = 'tools';

// if the requested module are exist/ available than is oky to run
if( isset($_REQUEST['module']) && array_key_exists($_REQUEST['module'], $modules)){
    $active_module = $modules[$_REQUEST['module']];
    //print 'module exist';
}else{
    $active_module = $modules[$default_module];
    //print 'default module';
}

include($active_module); // includes for example = templates/controllers/admin/tools.php


if (isset($pageElement) && $pageElement != null){
    //print ($pageElement['page']);
    include ($pageElement['page']); // includes for example = templates/admin/lists/tools.php
}else{
    //print 'pageElement is not set';
}