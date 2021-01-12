<?php
?>
<!-- Start login form-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-11">
            <h2>Login</h2>
            <form action="index.php?p=login" method="POST">
                <input type="hidden" name="login_try" value="1">
                <div class="form-group row">
                    <label for="exampleFormControlInput12" class="col col-form-label font_wind">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput12" placeholder="name@example.com">
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col col-form-label font_wind">Password</label>
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
