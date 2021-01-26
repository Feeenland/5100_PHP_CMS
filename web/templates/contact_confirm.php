<?php
/**
 * contact_confirm.php = tht confirmation for a send email.
 * */
?>
<?php


?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Kontakt</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-9">
            <p class="lead">
                Vielen Dank für Deine Nachricht.
            </p>
        </div>
    </div>
</div>

<!-- Start contact form-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-11 col-md-9 col-lg-8">
            <h2>Deine Nachricht wurde versant =)</h2>
            <?php print '<p class="lead">'.($_POST['first_name']).' '.($_POST['last_name']).'<br>'.($_POST['email']).'<br>'.($_POST['message']).'</p>';?>
        </div>
    </div>
</div>
<!-- End contact form-->
