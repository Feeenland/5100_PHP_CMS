<?php
/**
 * This is the form for the gallery's in the backend.
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
            <label class="font_wind" for="image">Name</label>
            <input
                name="image"
                id="image"
                class="font_not_wind form-control <?php if(array_key_exists('image', $pageElement['errors'])){ ?> has_error <?php } ?>"
                type="number"
                maxlength="250"
                placeholder="Zahl"
                value="<?php print $pageElement['values']['image'] ?? '' ?>">

            <?php if(array_key_exists('image', $pageElement['errors'])){ ?>
                <span class="error_message font_wind">!!!</span>
            <?php }
            if(array_key_exists('image', $pageElement['errors'])){
            foreach($pageElement['errors']['image'] as $err){
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
