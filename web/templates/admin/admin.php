<?php
/**
 * This file defines the layout and opportunities in the backend to change things on this website.
 */


// mach das obe ade site und benutz es für d H1 und d active azeig ide navigation!
$titleBackend = 'Website';
if (isset($_REQUEST['module'])) {
    $module = $_REQUEST['module'];
    //print $module;
    if ($_REQUEST['module'] == 'users') {
        $titleBackend = 'Users';
    }else if ($_REQUEST['module'] == 'tools') {
        $titleBackend = 'Werkzeug';
    }
} else {
    //print 'no title?';
}

?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1><?php print $titleBackend;?> Verwalten</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-3">
            <div class="row">
                <div class="col">
                    <button class="btn btn_1 btn_admin disabled" disabled>
                        Home
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button class="btn btn_1 btn_admin <?php if($module=='news'){print 'active';} ?>">
                        <a href="">Neues</a>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button class="btn btn_1 btn_admin <?php if($module=='works'){print 'active';} ?>">
                        <a href="">Arbeit</a>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button class="btn btn_1 btn_admin <?php if($module=='tools'){print 'active';} ?> ">
                        <a class="" href="index.php?p=admin&module=tools&action=list">Werkzeug</a>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button class="btn btn_1 btn_admin disabled" disabled>
                        Gallery
                    </button>
                </div>
            </div>
            <!-- only the admin can do this ! -->
            <div class="row">
                <div class="col">
                    <button class="btn btn_1 btn_admin <?php if($module=='users'){print 'active';} ?>">
                        <a href="index.php?p=admin&module=users&action=list">User Verwalten</a>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-9">


            <?php
            include 'controllers/admin.php';
            ?>



        </div>
    </div>
</div>
