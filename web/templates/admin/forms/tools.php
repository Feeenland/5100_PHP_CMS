<form action="<?php print $pageElement['action'] ?>" method="POST">
    <?php if(array_key_exists('id', $pageElement['values'])) { ?>
        <input type="hidden" name="id" value="<?php print $pageElement['values']['id'] ?>">
    <?php } ?>

    <div class="row">
        <div class="col">
            <label class="label">Werkzeug Titel</label>
            <input
                name="nav_title"
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
                name="nav_title"
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
            <input
                name="nav_title"
                class="input <?php if(array_key_exists('text', $pageElement['errors'])){ ?> is-danger <?php } ?>"
                type="text"
                maxlength="20"
                placeholder="Text"
                value="<?php print $pageElement['values']['text'] ?? '' ?>">

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

            <button class="button is-link">Speichern</button>

        </div>
    </div>


</form>
