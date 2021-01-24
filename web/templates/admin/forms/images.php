<?php
/**
 * This is the form for the images in the backend.
 * to add new Images and edit existing ones.
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
            <label class="font_wind" for="imgname">Name</label>
            <input
                name="filename"
                id="imgname"
                class="font_not_wind form-control <?php if(array_key_exists('filename', $pageElement['errors'])){ ?> has_error <?php } ?>"
                type="text"
                maxlength="30"
                placeholder="Name.jpg"
                value="<?php print $pageElement['values']['filename'] ?? '' ?>">

            <?php if(array_key_exists('filename', $pageElement['errors'])){ ?>
                <span class="error_message font_wind">!!!</span>
            <?php }
            if(array_key_exists('filename', $pageElement['errors'])){
            foreach($pageElement['errors']['filename'] as $err){
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
            <label class="font_wind" for="imgalt">Alt Tag</label>
            <input
                name="alt"
                id="imgalt"
                class="font_not_wind form-control <?php if(array_key_exists('alt', $pageElement['errors'])){ ?> has_error <?php } ?>"
                type="text"
                maxlength="50"
                placeholder="Alt text"
                value="<?php print $pageElement['values']['alt'] ?? '' ?>">

            <?php if(array_key_exists('alt', $pageElement['errors'])){ ?>
                <span class="error_message font_wind">!!!</span>
            <?php }
            if(array_key_exists('alt', $pageElement['errors'])){
            foreach($pageElement['errors']['alt'] as $err){
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
            <label class="font_wind" for="idfolder">ID Ortner</label>
            <input
                name="id_folder"
                id="idfolder"
                class="font_not_wind form-control <?php if(array_key_exists('id_folder', $pageElement['errors'])){ ?> has_error <?php } ?>"
                type="text"
                maxlength="30"
                placeholder="Id Ortner"
                value="<?php print $pageElement['values']['id_folder'] ?? '' ?>">

            <?php if(array_key_exists('id_folder', $pageElement['errors'])){ ?>
                <span class="error_message font_wind">!!!</span>
            <?php }
            if(array_key_exists('id_folder', $pageElement['errors'])){
            foreach($pageElement['errors']['id_folder'] as $err){
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
