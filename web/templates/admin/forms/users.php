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
        <div class="col">
            <label class="label">Vorname</label>
            <input
                name="first_name"
                class="input <?php if(array_key_exists('fist_name', $pageElement['errors'])){ ?> is-danger <?php } ?>"
                type="text"
                maxlength="30"
                placeholder="Vorname"
                value="<?php print $pageElement['values']['first_name'] ?? '' ?>">

            <?php if(array_key_exists('fist_name', $pageElement['errors'])){ ?>
                <span class="icon is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                </span>
            <?php }
            if(array_key_exists('fist_name', $pageElement['errors'])){
            foreach($pageElement['errors']['fist_name'] as $err){
            ?>
            <p class="help is-danger"><?php print $err; ?></p>
            <?php
                }
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label class="label">Nachame</label>
            <input
                name="last_name"
                class="input <?php if(array_key_exists('last_name', $pageElement['errors'])){ ?> is-danger <?php } ?>"
                type="text"
                maxlength="30"
                placeholder="Nachname"
                value="<?php print $pageElement['values']['last_name'] ?? '' ?>">

            <?php if(array_key_exists('last_name', $pageElement['errors'])){ ?>
                <span class="icon is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                </span>
            <?php }
            if(array_key_exists('last_name', $pageElement['errors'])){
            foreach($pageElement['errors']['last_name'] as $err){
            ?>
            <p class="help is-danger"><?php print $err; ?></p>
            <?php
                }
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label class="label">Email</label>
            <input
                name="email"
                class="input <?php if(array_key_exists('email', $pageElement['errors'])){ ?> is-danger <?php } ?>"
                type="text"
                maxlength="30"
                placeholder="Email"
                value="<?php print $pageElement['values']['email'] ?? '' ?>">

            <?php if(array_key_exists('email', $pageElement['errors'])){ ?>
                <span class="icon is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                </span>
            <?php }
            if(array_key_exists('email', $pageElement['errors'])){
            foreach($pageElement['errors']['email'] as $err){
            ?>
            <p class="help is-danger"><?php print $err; ?></p>
            <?php
                }
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label class="label">Passwort</label>
            <input
                name="password"
                class="input
                <?php if(array_key_exists('password', $pageElement['errors'])){ ?> is-danger <?php } ?>"
                type="password"
                maxlength="150"
                placeholder="Passwort"
                value="<?php print $pageElement['values']['password'] ?? '' ?>">

            <?php if(array_key_exists('password', $pageElement['errors'])){ ?>
                <span class="icon is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                </span>
            <?php }
            if(array_key_exists('password', $pageElement['errors'])){
            foreach($pageElement['errors']['password'] as $err){
            ?>
            <p class="help is-danger"><?php print $err; ?></p>
            <?php
                }
            }
            ?>
        </div>
    </div>

    <?php if(array_key_exists('id', $pageElement['values'])) { ?>

        <div class="row">
            <div class="col">
                <label class="label">Gebannt um</label>
                <input
                    name="banned_at"
                    class="input <?php if(array_key_exists('banned_at', $pageElement['errors'])){ ?> is-danger <?php } ?>"
                    type="text"
                    maxlength="30"
                    placeholder="Zeit"
                    value="<?php print $pageElement['values']['banned_at'] ?? '' ?>">

                <?php if(array_key_exists('banned_at', $pageElement['errors'])){ ?>
                    <span class="icon is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                </span>
                <?php }
                if(array_key_exists('banned_at', $pageElement['errors'])){
                    foreach($pageElement['errors']['banned_at'] as $err){
                        ?>
                        <p class="help is-danger"><?php print $err; ?></p>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    <?php } ?>


    <div class="row">
        <div class="col">

            <button class="btn_1 btn">Speichern</button>

        </div>
    </div>


</form>
