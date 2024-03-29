<?php
/**
 * navigation.php = this file generates the content for the navigation.
 */
?>
<!--Start Navigation-->
<div class="container">
    <div class="row justify-content-center">

        <div class="col-12 col-md-10">
            <nav class="navbar navbar-expand-lg navbar-dark font_wind nav_top show_on_lg">
                <div class="row justify-content-end">
                    <div class="col-12">
                        <ul class="navbar-nav mr-auto float_right">
                            <li class="nav-item">
                                <a class="nav-link <?php if($p=='contact'){print 'active';} ?>" href="index?p=contact">Kontakt</a>
                            </li>
                            <li class="nav-item">
                                <?php if (isset($_SESSION['logged_in'])) { ?>
                                    <?php if($_SESSION['logged_in'] != 1) { ?>
                                        <a class="nav-link <?php if($p=='login'){print 'active';} ?>" href="index?p=login">Login</a>
                                    <?php }else{ ?>
                                        <a class="nav-link <?php if($p=='login&action=logout'){print 'active';} ?>" href="index?p=login&action=logout">Logout</a>
                                        <button class="btn btn_1"><a class="nav-link <?php ?>" href="index?p=admin">Seite Bearbeiten</a></button>
                                    <?php } ?>
                                <?php } else{?>
                                    <a class="nav-link" href="index?p=login">Login</a>
                                <?php }?>

                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <nav class="navbar navbar-expand-lg navbar-dark justify-content-between nav_styles font_wind ">
                <a class="navbar-brand" href="index?p=home"><img src="img/logo_patterns/cat_logo.png" class="logo" alt="cat logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-grow-1 text-lg-right  " id="navbarText">
                    <ul class="navbar-nav mr-auto nav_top hide_on_lg">
                        <li class="nav-item">
                            <?php if (isset($_SESSION['logged_in'])) { ?>
                                <?php if($_SESSION['logged_in'] != 1) { ?>
                                    <a class="nav-link <?php if($p=='login'){print 'active';} ?>" href="index?p=login">Login</a>
                                <?php }else{ ?>
                                    <a class="nav-link <?php if($p=='login&action=logout'){print 'active';} ?>" href="index?p=login&action=logout">Logout</a>
                                    <button class="btn btn_1"><a class="nav-link <?php ?>" href="index?p=admin">Seite Bearbeiten</a></button>
                                <?php } ?>
                            <?php } else{?>
                                <a class="nav-link" href="index?p=login">Login</a>
                            <?php }?>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($p=='contact'){print 'active';} ?>" href="index?p=contact">Kontakt</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto flex-nowrap">
                        <li class="nav-item">
                            <a class="nav-link <?php if($p=='home'){print 'active';} ?> " href="index?p=home"">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($p=='news'){print 'active';} ?>" href="index?p=news"">Neues</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($p=='work'){print 'active';} ?>" href="index?p=work">Arbeit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($p=='tools'){print 'active';} ?>" href="index?p=tools"">Werkzeug</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($p=='gallery'){print 'active';} ?>" href="index?p=gallery">Galerie</a>
                        </li>
                    </ul>

                </div>
            </nav>


        </div>
    </div>
    </nav>
</div>

<!--End Navigation-->
