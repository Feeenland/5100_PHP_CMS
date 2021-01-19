<?php
/**
 * This file defines the layout and opportunities in the backend to change things on this website.
 */
?>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-3">
            <div class="row">
                <div class="col">
                    <button class="btn btn_1 btn_admin">Home</button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button class="btn btn_1 btn_admin">Neues</button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button class="btn btn_1 btn_admin"><a href="">Arbeit</a></button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button class="btn btn_1 btn_admin "><a href="index.php?p=admin&module=tools&action=list">Werkzeug</a></button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button class="btn btn_1 btn_admin"><a href="">Gallery</a></button>
                </div>
            </div>
            <!-- only the admin can do this ! -->
            <div class="row">
                <div class="col">
                    <button class="btn btn_1 btn_admin"><a href="index.php?p=admin&module=users&action=list">User Verwalten</a></button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-9">

            <?php
            include 'controllers/admin.php';
            ?>

            <?php
            // mach das obe ade site und benutz es für d H1 und d active azeig ide navigation!
            if(isset($_REQUEST['module'])){
                $module =$_REQUEST['module'] ;
                print $module;
                if($_REQUEST['module'] == 'users'){
                    print 'user ?';
                }
            }else{
                print 'no title?';
            }
            ?>

        </div>
    </div>
</div>
