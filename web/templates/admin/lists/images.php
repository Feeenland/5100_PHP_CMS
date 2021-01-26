<?php
/**
 * This file lists all the image from the list images of the DB, so that it is possible to edit/delete or add them.
 * and it lists all the image folders, but it's not possible to edit them.
 */
?>
<div class="row justify-content-end">
        <button class="btn btn_1 btn_send btn_table"><a href="<?php print 'index.php?p=admin&module=images&action=new'; ?>">Neues Item</a></button>
</div>
<div class="row">
    <div class="col table-responsive" id="no-more-tables">
        <table class="table table-bordered table-striped table-condensed">
            <thead>
            <tr class="font_wind">
                <th scope="col">ID</th>
                <th scope="col">Alt Tag</th>
                <th scope="col">Name</th>
                <th scope="col">ID Folder</th>
                <th scope="col">Bild</th>
                <th scope="col">Editieren</th>
            <!--    <th scope="col">X</th>-->
            </tr>
            </thead>
            <tbody>
            <?php //print_r ($pageElement['items']) ?>
                <!-- for each registered object make a new entry in the table-->
                <?php foreach($pageElement['items'] as $item){ ?>
                    <tr>
                        <td data-title="ID"><?php print $item['id']; ?></td>
                        <td data-title="Alt Tag"><?php print $item['alt']; ?></td>
                        <td data-title="Name"><?php print $item['filename']; ?></td>
                        <td data-title="ID Folder"><?php print $item['id_folder'].' = '.$item['folder']; ?></td>
                        <td data-title="Bild"><img src="img/<?php print $item['folder']; ?>/<?php print $item['filename']; ?>" alt="" class="table_img"></td>
                        <td data-title="Editieren"><button class="btn"><a href="<?php print $pageElement['edit_link'] . $item['id']; ?>">Editieren</a></button></td>
                       <!-- <td data-title="X"><button class="btn"><a href="<?php /*print $pageElement['delete_link'] . $item['id']; */?>">X</a></button></td>-->
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <table class="table table-bordered table-striped table-condensed">
            <thead>
            <tr class="font_wind">
                <th scope="col">ID</th>
                <th scope="col">Folder</th>
               <!-- <th scope="col">Editieren</th>
                <th scope="col">X</th>-->
            </tr>
            </thead>
            <tbody>
                <!-- for each registered object make a new entry in the table-->
                <?php foreach($pageElement['item_folders'] as $item_folder){ ?>
                    <tr>
                        <td data-title="ID"><?php print $item_folder['id']; ?></td>
                        <td data-title="Folder"><?php print $item_folder['folder']; ?></td>
                    <!--    <td data-title="Editieren"><button class="btn"><a href="<?php /*print $pageElement['edit_link'] . $item['id']; */?>">Editieren</a></button></td>
                        <td data-title="X"><button class="btn"><a href="<?php /*print $pageElement['delete_link'] . $item['id']; */?>">X</a></button></td>-->
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

