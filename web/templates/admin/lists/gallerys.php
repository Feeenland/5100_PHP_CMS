<?php
/**
 * This file lists all the image from the list gallery's of the DB, so that it is possible to edit them.
 */
?>
<div class="row justify-content-end">
       <!-- <button class="btn btn_1 btn_send btn_table"><a href="<?php /*print 'index.php?p=admin&module=images&action=new'; */?>">Neues Item</a></button>-->
</div>
<div class="row">
    <div class="col table-responsive" id="no-more-tables">
        <table class="table table-bordered table-striped table-condensed">
            <thead>
            <tr class="font_wind">
                <th scope="col">ID</th>
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
                        <td data-title="Bild"><img src="img/<?php print $item['folder']; ?>/<?php print $item['filename']; ?>" alt="<?php print $item['alt']; ?>" class="table_img"></td>
                        <td data-title="Editieren"><button class="btn"><a href="<?php print $pageElement['edit_link'] . $item['id']; ?>">Editieren</a></button></td>
                       <!-- <td data-title="X"><button class="btn"><a href="<?php /*print $pageElement['delete_link'] . $item['id']; */?>">X</a></button></td>-->
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

