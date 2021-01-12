<?php
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
                                <a class="nav-link" href="index.php?p=contact">Kontakt</a>
                            </li>
                            <li class="nav-item">
                                <?php if (isset($_SESSION['logged_in'])) { ?>
                                    <?php if($_SESSION['logged_in'] != 1) { ?>
                                        <a class="nav-link" href="index.php?p=login">Login</a>
                                    <?php }else{ ?>
                                        <a class="nav-link" href="index.php?p=login&action=logout">Logout</a>
                                    <?php } ?>
                                <?php } else{?>
                                    <a class="nav-link" href="index.php?p=login">Login</a>
                                <?php }?>

                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <nav class="navbar navbar-expand-lg navbar-dark justify-content-between nav_styles font_wind ">
                <a class="navbar-brand" href="#">LOGO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-grow-1 text-lg-right  " id="navbarText">
                    <ul class="navbar-nav mr-auto nav_top hide_on_lg">
                        <li class="nav-item">
                            <?php if($_SESSION['logged_in'] != 1) { ?>
                                <a class="nav-link" href="../index.php?p=login">Login</a>
                            <?php }else{ ?>
                                <a class="nav-link" href="../index.php?p=login&action=logout">Logout</a>
                            <?php } ?>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=contact">Kontakt</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto flex-nowrap">
                        <li class="nav-item">
                            <a class="nav-link <?php if($p=='home'){print 'active';} ?> " href="index.php?p=home"">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=news"">Neues</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=work">Arbeit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=tools"">Werkzeug</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Gallerie</a>
                        </li>
                    </ul>

                </div>
            </nav>


        </div>
    </div>
    </nav>
</div>

<!--End Navigation-->
