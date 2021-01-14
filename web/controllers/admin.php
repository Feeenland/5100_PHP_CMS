<?php
//include list object for the admin to edit


$admin_path = 'controllers/admin/';

// which modules are available
$modules = [
    // which page i need if this module is active
    'tools' => $admin_path . 'tools.php'
];

$default_module = 'tools';

// if the requested module are exist/ available than is oky to run
if( isset($_REQUEST['module']) && array_key_exists($_REQUEST['module'], $modules)){
    $active_module = $modules[$_REQUEST['module']];
    print 'module exist';
}else{
    $active_module = $modules[$default_module];
    print 'default module';
}

include($active_module); // now = 'controllers/admin/tools.php'


if (isset($pageElement) && $pageElement != null){
    print ($pageElement['page']); //now = templates/admin/lists/tools.php
    include ($pageElement['page']);
}else{
    print 'pageElement is not set';
}