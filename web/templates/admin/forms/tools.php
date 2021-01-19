<?php
/**
 * This is the form for the tools items in the backend.
 * to add new items and edit existing ones.
 *
 * who an item is processed it will fill the value with the existing entry.
 * if there is a error the input field will change to danger (red outline).
 * and a hint/error text will be printed under the field.
 */
?>

<form action="<?php print $pageElement['action'] ?>" method="POST">
    <!-- If i need to edit a Item the ID will be send by a hidden field (if i add a new i don't need this)-->
    <?php if(array_key_exists('id', $pageElement['values'])) { ?>
        <input type="hidden" name="id" value="<?php print $pageElement['values']['id'] ?>">
    <?php } ?>

    <div class="row">
        <div class="col">
            <label class="label">Werkzeug Titel</label>
            <input
                name="title"
                class="input <?php if(array_key_exists('title', $pageElement['errors'])){ ?> is-danger <?php } ?>"
                type="text"
                maxlength="20"
                placeholder="Titel"
                value="<?php print $pageElement['values']['title'] ?? '' ?>">

            <?php if(array_key_exists('title', $pageElement['errors'])){ ?>
                <span class="icon is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                </span>
            <?php }
            if(array_key_exists('title', $pageElement['errors'])){
            foreach($pageElement['errors']['title'] as $err){
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
            <label class="label">Werkzeug Untertitel</label>
            <input
                name="subtitle"
                class="input <?php if(array_key_exists('subtitle', $pageElement['errors'])){ ?> is-danger <?php } ?>"
                type="text"
                maxlength="20"
                placeholder="Untertitel"
                value="<?php print $pageElement['values']['subtitle'] ?? '' ?>">

            <?php if(array_key_exists('subtitle', $pageElement['errors'])){ ?>
                <span class="icon is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                </span>
            <?php }
            if(array_key_exists('subtitle', $pageElement['errors'])){
            foreach($pageElement['errors']['subtitle'] as $err){
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
            <label class="label">Werkzeug Text</label>
            <textarea
                class="input <?php if(array_key_exists('text', $pageElement['errors'])){ ?> is-danger <?php } ?>"
                rows="4"
                cols="50"
                type="text"
                maxlength="500"
                name="text"
                placeholder="Text"><?php print $pageElement['values']['text'] ?? '' ?></textarea>

            <?php if(array_key_exists('text', $pageElement['errors'])){ ?>
                <span class="icon is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                </span>
            <?php }
            if(array_key_exists('text', $pageElement['errors'])){
            foreach($pageElement['errors']['text'] as $err){
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
            <label class="label">Werkzeug Bild</label>
            <input
                name="image"
                class="input <?php if(array_key_exists('image', $pageElement['errors'])){ ?> is-danger <?php } ?>"
                type="text"
                maxlength="100"
                placeholder="image"
                value="<?php print $pageElement['values']['image'] ?? '' ?>">

            <?php if(array_key_exists('image', $pageElement['errors'])){ ?>
                <span class="icon is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                </span>
            <?php }
            if(array_key_exists('image', $pageElement['errors'])){
            foreach($pageElement['errors']['image'] as $err){
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

            <button class="btn_1 btn">Speichern</button>

        </div>
    </div>


</form>
