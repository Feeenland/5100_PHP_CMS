<?php
/**
 * This is the form for the news in the backend.
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
            <label class="font_wind" for="title">Titel</label>
            <input
                name="title"
                id="title"
                class="font_not_wind form-control <?php if(array_key_exists('title', $pageElement['errors'])){ ?> has_error <?php } ?>"
                type="text"
                maxlength="30"
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
            <label class="font_wind" for="text">Text</label>
            <textarea
                    class="font_not_wind form-control  <?php if(array_key_exists('text', $pageElement['errors'])){ ?> has_error <?php } ?>"
                    id="text"
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
            <label class="font_wind" for="idbg">ID Bild Bg</label>
            <input
                name="bg_image"
                id="idbg"
                class="font_not_wind form-control <?php if(array_key_exists('bg_image', $pageElement['errors'])){ ?> has_error <?php } ?>"
                type="number"
                maxlength="150"
                placeholder="Zahl"
                value="<?php print $pageElement['values']['bg_image'] ?? '' ?>">

            <?php if(array_key_exists('bg_image', $pageElement['errors'])){ ?>
                <span class="error_message font_wind">!!!</span>
            <?php }
            if(array_key_exists('bg_image', $pageElement['errors'])){
            foreach($pageElement['errors']['bg_image'] as $err){
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
            <label class="font_wind" for="idtop">ID Bild Top</label>
            <input
                name="top_image"
                id="idtop"
                class="font_not_wind form-control <?php if(array_key_exists('top_image', $pageElement['errors'])){ ?> has_error <?php } ?>"
                type="number"
                maxlength="150"
                placeholder="Zahl"
                value="<?php print $pageElement['values']['top_image'] ?? '' ?>">

            <?php if(array_key_exists('top_image', $pageElement['errors'])){ ?>
                <span class="error_message font_wind">!!!</span>
            <?php }
            if(array_key_exists('top_image', $pageElement['errors'])){
            foreach($pageElement['errors']['top_image'] as $err){
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
            <label class="font_wind" for="idmid">ID Bild Mid</label>
            <input
                name="mid_image"
                id="idmid"
                class="font_not_wind form-control <?php if(array_key_exists('mid_image', $pageElement['errors'])){ ?> has_error <?php } ?>"
                type="number"
                maxlength="150"
                placeholder="Zahl"
                value="<?php print $pageElement['values']['mid_image'] ?? '' ?>">

            <?php if(array_key_exists('mid_image', $pageElement['errors'])){ ?>
                <span class="error_message font_wind">!!!</span>
            <?php }
            if(array_key_exists('mid_image', $pageElement['errors'])){
            foreach($pageElement['errors']['mid_image'] as $err){
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
            <label class="font_wind" for="idbot">ID Bild Bot</label>
            <input
                name="bot_image"
                id="idbot"
                class="font_not_wind form-control <?php if(array_key_exists('bot_image', $pageElement['errors'])){ ?> has_error <?php } ?>"
                type="number"
                maxlength="150"
                placeholder="Zahl"
                value="<?php print $pageElement['values']['bot_image'] ?? '' ?>">

            <?php if(array_key_exists('bot_image', $pageElement['errors'])){ ?>
                <span class="error_message font_wind">!!!</span>
            <?php }
            if(array_key_exists('bot_image', $pageElement['errors'])){
            foreach($pageElement['errors']['bot_image'] as $err){
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
