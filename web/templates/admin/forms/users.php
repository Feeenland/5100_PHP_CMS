<?php
/**
 * This is the form for the users in the backend.
 * to add new users and edit existing ones.
 *
 * who an user is processed it will fill the value with the existing entry.
 * if there is a error the input field will change to danger (red outline).
 * and a hint/error text will be printed under the field.
 */
?>

<form action="<?php print $pageElement['action'] ?>" method="POST">
    <?php if(array_key_exists('id', $pageElement['values'])) { ?>
        <input type="hidden" name="id" value="<?php print $pageElement['values']['id'] ?>">
    <?php } ?>

    <div class="row">
        <div class="col col-form-label">
            <label class="font_wind">Vorname</label>
            <input
                name="first_name"
                class="font_not_wind form-control <?php if(array_key_exists('first_name', $pageElement['errors'])){ ?> has_error <?php } ?>"
                type="text"
                maxlength="30"
                placeholder="Vorname"
                value="<?php print $pageElement['values']['first_name'] ?? '' ?>">

            <?php if(array_key_exists('first_name', $pageElement['errors'])){ ?>
                <span class="error_message font_wind">!!!</span>
            <?php }
            if(array_key_exists('first_name', $pageElement['errors'])){
            foreach($pageElement['errors']['first_name'] as $err){
            ?>
            <p class="error_message"><?php print $err; ?></p>
            <?php
                }
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col col-form-label">
            <label class="font_wind">Nachame</label>
            <input
                name="last_name"
                class="font_not_wind form-control <?php if(array_key_exists('last_name', $pageElement['errors'])){ ?> has_error <?php } ?>"
                type="text"
                maxlength="30"
                placeholder="Nachname"
                value="<?php print $pageElement['values']['last_name'] ?? '' ?>">

            <?php if(array_key_exists('last_name', $pageElement['errors'])){ ?>
                <span class="error_message font_wind">!!!</span>
            <?php }
            if(array_key_exists('last_name', $pageElement['errors'])){
            foreach($pageElement['errors']['last_name'] as $err){
            ?>
            <p class="error_message"><?php print $err; ?></p>
            <?php
                }
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col col-form-label">
            <label class="font_wind">Email</label>
            <input
                name="email"
                class="font_not_wind form-control <?php if(array_key_exists('email', $pageElement['errors'])){ ?> has_error <?php } ?>"
                type="text"
                maxlength="30"
                placeholder="Email"
                value="<?php print $pageElement['values']['email'] ?? '' ?>">

            <?php if(array_key_exists('email', $pageElement['errors'])){ ?>
                <span class="error_message font_wind">!!!</span>
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
    </div>
    <div class="row">
        <div class="col col-form-label">
            <label class="font_wind">Passwort</label>
            <input
                name="password"
                class="font_not_wind form-control
                <?php if(array_key_exists('password', $pageElement['errors'])){ ?> has_error <?php } ?>"
                type="password"
                maxlength="30"
                placeholder="Passwort"
                value="<?php print $pageElement['values']['password'] ?? '' ?>">

            <?php if(array_key_exists('password', $pageElement['errors'])){ ?>
                <span class="error_message font_wind">!!!</span>
            <?php }
            if(array_key_exists('password', $pageElement['errors'])){
            foreach($pageElement['errors']['password'] as $err){
            ?>
            <p class="error_message"><?php print $err; ?></p>
            <?php
                }
            }
            ?>
        </div>
    </div>

    <?php if(array_key_exists('id', $pageElement['values'])) { ?>

        <div class="row">
            <div class="col col-form-label">
                <label class="font_wind">Gebannt um</label>
                <input
                    name="banned_at"
                    class="font_not_wind form-control <?php if(array_key_exists('banned_at', $pageElement['errors'])){ ?> has_error <?php } ?>"
                    type="text"
                    maxlength="100"
                    placeholder="Zeit"
                    value="<?php print $pageElement['values']['banned_at'] ?? '' ?>">

                <?php if(array_key_exists('banned_at', $pageElement['errors'])){ ?>
                    <span class="error_message font_wind">!!!</span>
                <?php }
                if(array_key_exists('banned_at', $pageElement['errors'])){
                    foreach($pageElement['errors']['banned_at'] as $err){
                        ?>
                        <p class="error_message"><?php print $err; ?></p>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    <?php } ?>


    <div class="row justify-content-center">
        <button class="btn_1 btn btn_send">Speichern</button>
    </div>


</form>
