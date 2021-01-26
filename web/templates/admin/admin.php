<?php
/**
 * This file defines the layout and opportunities in the backend to change things on this website.
 */


// to set the title in the backend
$titleBackend = 'Website';
if (isset($_REQUEST['module'])) {
    $module = $_REQUEST['module'];
    //print $module;
    if ($_REQUEST['module'] == 'news') {
        $titleBackend = 'Neues';
    }else if ($_REQUEST['module'] == 'works') {
        $titleBackend = 'Arbeitsschritte';
    }else if ($_REQUEST['module'] == 'tools') {
        $titleBackend = 'Werkzeug';
    }else if ($_REQUEST['module'] == 'gallerys') {
        $titleBackend = 'Galerie';
    }else if ($_REQUEST['module'] == 'images') {
        $titleBackend = 'Bilder';
    }else if ($_REQUEST['module'] == 'users') {
        $titleBackend = 'User';
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
                    <a href="index?p=admin&module=news&action=list">
                        <button class="btn btn_1 btn_admin <?php if($module=='news'){print 'active';} ?>">
                            Neues
                        </button>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="index?p=admin&module=works&action=list">
                        <button class="btn btn_1 btn_admin <?php if($module=='works'){print 'active';} ?>">
                            Arbeit
                        </button>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a class="" href="index?p=admin&module=tools&action=list">
                        <button class="btn btn_1 btn_admin <?php if($module=='tools'){print 'active';} ?> ">
                            Werkzeug
                        </button>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a class="" href="index?p=admin&module=gallerys&action=list">
                        <button class="btn btn_1 btn_admin <?php if($module=='gallerys'){print 'active';} ?> ">
                            Galerie
                        </button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="index?p=admin&module=images&action=list">
                        <button class="btn btn_1 btn_admin <?php if($module=='images'){print 'active';} ?>">
                            Bilder
                        </button>
                    </a>
                </div>
            </div>
            <!-- only the admin can do this ! -->
            <?php if(isset($_SESSION['role']) == 1){ ?>
                <div class="row">
                    <div class="col">
                        <a href="index?p=admin&module=users&action=list">
                            <button class="btn btn_1 btn_admin <?php if($module=='users'){print 'active';} ?>">
                                User
                            </button>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="col-12 col-md-9">


            <?php
            if(isset($_SESSION['logged_in'])){
                include 'controllers/admin.php';
            } else{
                print '<p class="lead error_message">Um diese Seite Bearbeiten zu können musst dich einloggen! <br> </p>
                            <a href="index?p=login"><button class="btn btn_1 btn_send">Login</button></a>';
            }

            ?>



        </div>
    </div>
</div>
