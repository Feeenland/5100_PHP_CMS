<?php
?>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-4">
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
        <div class="col-12 col-md-8">

            <?php
            include 'controllers/admin.php';
            ?>

        </div>
    </div>
</div>
