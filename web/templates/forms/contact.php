<?php
/**
 * contact.php = the contact form for the website.
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
                Falls du Fragen hast oder Hilfe braucht darfst du dich gerne bei mir melden =)
            </p>
        </div>
    </div>
</div>

<!-- Start contact form-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-11 col-md-9 col-lg-8">
            <h2>Kontaktiere mich:</h2>
            <form class="font_wind" action="" method="POST">
                <div class="form-group row">
                    <label for="first_name">Vorname*</label>
                    <input
                            type="text"
                            name="first_name"
                            class="form-control <?php if(isset($errorMessage['first_name'])&& (strlen($errorMessage['first_name'])>0)){ ?> has_error <?php } ?>"
                            id="first_name"
                            placeholder="Vorname"
                            value="<?php if (isset($first_name)){ print $first_name;}?>">
                    <?php if (isset($errorMessage['first_name']) && (strlen($errorMessage['first_name'])>0)) { ?>
                        <p class="error_message"><?php print $errorMessage['first_name']; ?></p>
                    <?php } ?>
                </div>
                <div class="form-group row">
                    <label for="last_name">Nachname*</label>
                    <input
                            type="text"
                            name="last_name"
                            class="form-control <?php if(isset($errorMessage['last_name'])&& (strlen($errorMessage['last_name'])>0)){ ?> has_error <?php } ?>"
                            placeholder="Nachname"
                            id="last_name"
                            value="<?php if (isset($last_name)){ print $last_name;}?>">
                    <?php if (isset($errorMessage['last_name']) && (strlen($errorMessage['last_name'])>0)) { ?>
                        <p class="error_message"><?php print $errorMessage['last_name']; ?></p>
                    <?php } ?>
                </div>
                <div class="form-group row">
                    <label for="email">Email address*</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control <?php if(isset($errorMessage['email'])&& (strlen($errorMessage['email'])>0)){ ?> has_error <?php } ?>"
                        id="email"
                        placeholder="name@example.com"
                        value="<?php if (isset($email)){ print $email;}?>">
                    <?php if (isset($errorMessage['email']) && (strlen($errorMessage['email'])>0)) { ?>
                        <p class="error_message"><?php print $errorMessage['email']; ?></p>
                    <?php } ?>
                </div>
               <!-- <div class="form-group row">
                    <label for="image">Bild / Zeichnung</label>
                    <input
                            type="file"
                            name="image"
                            class="form-control-file"
                            id="image">
                </div>-->
                <div class="form-group row">
                    <label for="message">Nachricht*</label>
                    <textarea
                            class="form-control <?php if(isset($errorMessage['message'])&& (strlen($errorMessage['message'])>0)){ ?> has_error <?php } ?>"
                            name="message"
                            id="message"
                            rows="2"><?php if (isset($message)){ print $message;}?></textarea>
                    <?php if (isset($errorMessage['message']) && (strlen($errorMessage['message'])>0)) { ?>
                        <p class="error_message"><?php print $errorMessage['message']; ?></p>
                    <?php } ?>
                </div>
                <p>* Pflichtfelder</p>
                <div class="row justify-content-center">
                    <button type="submit" name="submit" value="send" class="btn_1 btn btn_send">Senden</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End contact form-->
