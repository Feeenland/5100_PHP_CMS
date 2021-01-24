<?php
/**
 * contact.php = the contact form for the website.
 * */
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
            <form class="font_wind" action="<?php //print $pageElement['action'] ?>'index.php?p=contact'" method="POST">
                <div class="form-group row">
                    <label for="first_name">Vorname*</label>
                    <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Vorname">
                </div>
                <div class="form-group row">
                    <label for="last_name">Nachname*</label>
                    <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Nachname">
                </div>
                <div class="form-group row">
                    <label for="email">Email address*</label>
                    <input type="email" name="email" class="form-control <?php if(array_key_exists('last_name', $pageElement['errors'])){ ?> has_error <?php } ?>" id="email" placeholder="name@example.com" value="">
                    <?php if(array_key_exists('email', $pageElement['errors'])){ ?>
                        <span class="error_message font_wind">!!! </span>
                    <?php }
                    if(array_key_exists('email', $pageElement['errors'])){
                        foreach($pageElement['errors']['email'] as $err){
                            ?>
                            <p class="error_message"><?php print $err; ?></p>
                            <?php
                        }
                    }
                    ?>
                </div>
                <div class="form-group row">
                    <label for="image">Bild / Zeichnung</label>
                    <input type="file" name="image" class="form-control-file" id="image">
                </div>
                <div class="form-group row">
                    <label for="message">Nachricht*</label>
                    <textarea class="form-control" name="message" id="message" rows="2"></textarea>
                </div>
                <p>* Pflichtfelder</p>
                <div class="row justify-content-center">
                    <button type="submit" class="btn_1 btn btn_send">Senden</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End contact form-->
