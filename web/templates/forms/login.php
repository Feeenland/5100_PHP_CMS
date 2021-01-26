<?php
/**
 * login.php = the login form for the backend of the website.
 * */
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Login</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-9">
            <p class="lead">
                Falls du zugang hast um die Seite zu bearbeiten kannst du dich hier anmelden.
            </p>
        </div>
    </div>
</div>


<!-- Start login form-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-11">
            <form action="index.php?p=login" method="POST">
                <input type="hidden" name="login_try" value="1">
                <div class="form-group row">
                    <label for="email" class="col col-form-label font_wind">Email Addresse</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col col-form-label font_wind">Passwort</label>
                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
                </div>
                <div class="row justify-content-center">
                    <button type="submit" class="btn_1 btn btn_send">Senden</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- End login form-->
