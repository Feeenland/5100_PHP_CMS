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
            <form class="font_wind">
                <div class="form-group row">
                    <label for="first_name">Vorname*</label>
                    <input type="text" class="form-control" id="first_name" placeholder="Vorname">
                </div>
                <div class="form-group row">
                    <label for="last_name">Nachname*</label>
                    <input type="text" class="form-control" id="last_name" placeholder="Nachname">
                </div>
                <div class="form-group row">
                    <label for="email">Email address*</label>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="form-group row">
                    <label for="image">Bild / Zeichnung</label>
                    <input type="file" class="form-control-file" id="image">
                </div>
                <div class="form-group row">
                    <label for="message">Nachricht*</label>
                    <textarea class="form-control" id="message" rows="2"></textarea>
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
