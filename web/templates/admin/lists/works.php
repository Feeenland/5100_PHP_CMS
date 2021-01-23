<?php
/**
 * This file lists all the users from the list works of the DB, so that it is possible to edit/delete them or add new ones.
 */
?>
<div class="row justify-content-end">
        <button class="btn btn_1 btn_send btn_table"><a href="<?php print 'index.php?p=admin&module=works&action=new'; ?>">Neues Item</a></button>
</div>
<div class="row">
    <div class="col table-responsive" id="no-more-tables">
        <table class="table table-bordered table-striped table-condensed">
            <thead>
            <tr class="font_wind">
                <th scope="col">ID</th>
                <th scope="col">Titel</th>
                <th scope="col">Text</th>
                <th scope="col">Untertitel</th>
                <th scope="col">Text unten</th>
                <th scope="col">Bild 1</th>
                <th scope="col">Bild 2</th>
                <th scope="col">Bild 3</th>
                <th scope="col">Bild 4</th>
                <th scope="col">Bild 5</th>
                <th scope="col">Bild 6</th>
                <th scope="col">Editieren</th>
                <th scope="col">X</th>
            </tr>
            </thead>
            <tbody>
                <!-- for each registered object make a new entry in the table-->
                <?php //print_r ($pageElement['items']); ?>
                <?php foreach($pageElement['items'] as $item){ ?>
                    <tr>
                        <td data-title="ID"><?php print $item['id']; ?></td>
                        <td data-title="Titel"><?php print $item['title']; ?></td>
                        <td data-title="Text"><?php print $item['text']; ?></td>
                        <td data-title="Untertitel"><?php print $item['subtitle']; ?></td>
                        <td data-title="Text unten"><?php print $item['sub_text']; ?></td>
                        <td data-title="Bild 1"><img src="img/<?php print $item['folder1']; ?>/<?php print $item['filename1']; ?>" alt="<?php print $item['alt1']; ?>" class="table_img"></td>
                        <td data-title="Bild 2"><img src="img/<?php print $item['folder2']; ?>/<?php print $item['filename2']; ?>" alt="<?php print $item['alt2']; ?>" class="table_img"></td>
                        <td data-title="Bild 3"><img src="img/<?php print $item['folder3']; ?>/<?php print $item['filename3']; ?>" alt="<?php print $item['alt3']; ?>" class="table_img"></td>
                        <td data-title="Bild 4"><img src="img/<?php print $item['folder4']; ?>/<?php print $item['filename4']; ?>" alt="<?php print $item['alt4']; ?>" class="table_img"></td>
                        <td data-title="Bild 5"><img src="img/<?php print $item['folder5']; ?>/<?php print $item['filename5']; ?>" alt="<?php print $item['alt5']; ?>" class="table_img"></td>
                        <td data-title="Bild 6"><img src="img/<?php print $item['folder6']; ?>/<?php print $item['filename6']; ?>" alt="<?php print $item['alt6']; ?>" class="table_img"></td>
                        <td data-title="Editieren"><button class="btn"><a href="<?php print $pageElement['edit_link'] . $item['id']; ?>">Editieren</a></button></td>
                        <td data-title="X"><button class="btn"><a href="<?php print $pageElement['delete_link'] . $item['id']; ?>">X</a></button></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

