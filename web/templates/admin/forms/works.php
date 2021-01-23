<?php
/**
 * This is the form for the works in the backend.
 *
 * who an image is processed it will fill the value with the existing entry.
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
            <label class="font_wind">Titel</label>
            <input
                name="title"
                class="font_not_wind form-control <?php if(array_key_exists('title', $pageElement['errors'])){ ?> has_error <?php } ?>"
                type="text"
                maxlength="80"
                placeholder="Titel"
                value="<?php print $pageElement['values']['title'] ?? '' ?>">

            <?php if(array_key_exists('title', $pageElement['errors'])){ ?>
                <span class="error_message font_wind">!!!</span>
            <?php }
            if(array_key_exists('title', $pageElement['errors'])){
            foreach($pageElement['errors']['title'] as $err){
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
            <label class="font_wind">Text</label>
            <textarea
                    class="font_not_wind form-control  <?php if(array_key_exists('text', $pageElement['errors'])){ ?> has_error <?php } ?>"
                    rows="4"
                    cols="50"
                    type="text"
                    maxlength="500"
                    name="text"
                    placeholder="Text"><?php print $pageElement['values']['text'] ?? '' ?></textarea>

            <?php if(array_key_exists('text', $pageElement['errors'])){ ?>
                <span class="error_message font_wind">!!!</span>
            <?php }
            if(array_key_exists('text', $pageElement['errors'])){
            foreach($pageElement['errors']['text'] as $err){
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
            <label class="font_wind">Untertitel</label>
            <input
                name="subtitle"
                class="font_not_wind form-control <?php if(array_key_exists('subtitle', $pageElement['errors'])){ ?> has_error <?php } ?>"
                type="text"
                maxlength="80"
                placeholder="Titel"
                value="<?php print $pageElement['values']['subtitle'] ?? '' ?>">

            <?php if(array_key_exists('subtitle', $pageElement['errors'])){ ?>
                <span class="error_message font_wind">!!!</span>
            <?php }
            if(array_key_exists('subtitle', $pageElement['errors'])){
            foreach($pageElement['errors']['subtitle'] as $err){
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
            <label class="font_wind">Text unten</label>
            <textarea
                    class="font_not_wind form-control  <?php if(array_key_exists('sub_text', $pageElement['errors'])){ ?> has_error <?php } ?>"
                    rows="4"
                    cols="50"
                    type="text"
                    maxlength="500"
                    name="sub_text"
                    placeholder="Text"><?php print $pageElement['values']['sub_text'] ?? '' ?></textarea>

            <?php if(array_key_exists('sub_text', $pageElement['errors'])){ ?>
                <span class="error_message font_wind">!!!</span>
            <?php }
            if(array_key_exists('sub_text', $pageElement['errors'])){
            foreach($pageElement['errors']['sub_text'] as $err){
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
            <label class="font_wind">ID Bild 1</label>
            <input
                name="image_1"
                class="font_not_wind form-control <?php if(array_key_exists('image_1', $pageElement['errors'])){ ?> has_error <?php } ?>"
                type="number"
                maxlength="150"
                placeholder="Zahl"
                value="<?php print $pageElement['values']['image_1'] ?? '' ?>">

            <?php if(array_key_exists('image_1', $pageElement['errors'])){ ?>
                <span class="error_message font_wind">!!!</span>
            <?php }
            if(array_key_exists('image_1', $pageElement['errors'])){
            foreach($pageElement['errors']['image_1'] as $err){
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
            <label class="font_wind">ID Bild 2</label>
            <input
                name="image_2"
                class="font_not_wind form-control <?php if(array_key_exists('image_2', $pageElement['errors'])){ ?> has_error <?php } ?>"
                type="number"
                maxlength="150"
                placeholder="Zahl"
                value="<?php print $pageElement['values']['image_2'] ?? '' ?>">

            <?php if(array_key_exists('image_2', $pageElement['errors'])){ ?>
                <span class="error_message font_wind">!!!</span>
            <?php }
            if(array_key_exists('image_2', $pageElement['errors'])){
            foreach($pageElement['errors']['image_2'] as $err){
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
            <label class="font_wind">ID Bild 3</label>
            <input
                name="image_3"
                class="font_not_wind form-control <?php if(array_key_exists('image_3', $pageElement['errors'])){ ?> has_error <?php } ?>"
                type="number"
                maxlength="150"
                placeholder="Zahl"
                value="<?php print $pageElement['values']['image_3'] ?? '' ?>">

            <?php if(array_key_exists('image_3', $pageElement['errors'])){ ?>
                <span class="error_message font_wind">!!!</span>
            <?php }
            if(array_key_exists('image_3', $pageElement['errors'])){
            foreach($pageElement['errors']['image_3'] as $err){
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
            <label class="font_wind">ID Bild 4</label>
            <input
                name="image_4"
                class="font_not_wind form-control <?php if(array_key_exists('image_4', $pageElement['errors'])){ ?> has_error <?php } ?>"
                type="number"
                maxlength="150"
                placeholder="Zahl"
                value="<?php print $pageElement['values']['image_4'] ?? '' ?>">

            <?php if(array_key_exists('image_4', $pageElement['errors'])){ ?>
                <span class="error_message font_wind">!!!</span>
            <?php }
            if(array_key_exists('image_4', $pageElement['errors'])){
            foreach($pageElement['errors']['image_4'] as $err){
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
            <label class="font_wind">ID Bild 5</label>
            <input
                name="image_5"
                class="font_not_wind form-control <?php if(array_key_exists('image_5', $pageElement['errors'])){ ?> has_error <?php } ?>"
                type="number"
                maxlength="150"
                placeholder="Zahl"
                value="<?php print $pageElement['values']['image_5'] ?? '' ?>">

            <?php if(array_key_exists('image_5', $pageElement['errors'])){ ?>
                <span class="error_message font_wind">!!!</span>
            <?php }
            if(array_key_exists('image_5', $pageElement['errors'])){
            foreach($pageElement['errors']['image_5'] as $err){
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
            <label class="font_wind">ID Bild 6</label>
            <input
                name="image_6"
                class="font_not_wind form-control <?php if(array_key_exists('image_6', $pageElement['errors'])){ ?> has_error <?php } ?>"
                type="number"
                maxlength="150"
                placeholder="Zahl"
                value="<?php print $pageElement['values']['image_6'] ?? '' ?>">

            <?php if(array_key_exists('image_6', $pageElement['errors'])){ ?>
                <span class="error_message font_wind">!!!</span>
            <?php }
            if(array_key_exists('image_6', $pageElement['errors'])){
            foreach($pageElement['errors']['image_6'] as $err){
            ?>
            <p class="error_message"><?php print $err; ?></p>
            <?php
                }
            }
            ?>
        </div>
    </div>

    <div class="row justify-content-center">
        <button class="btn_1 btn btn_send">Speichern</button>
    </div>


</form>
