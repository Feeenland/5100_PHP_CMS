<?php
/**
 * This file lists all the items from the list tools from the DB, so that it is possible to edit/delete them or add new ones.
 */
?>
<div class="row justify-content-end">
        <button class="btn btn_1 btn_send btn_table"><a href="<?php print 'index.php?p=admin&module=tools&action=new'; ?>">Neues Item</a></button>
</div>
<div class="row">
    <div class="col table-responsive" id="no-more-tables">
        <table class="table table-bordered table-striped table-condensed">
            <thead>
            <tr class="font_wind">
                <th scope="col">ID</th>
                <th scope="col">Titel</th>
                <th scope="col">untertitel</th>
                <th scope="col">Text</th>
                <th scope="col">Bild</th>
                <th scope="col">Editieren</th>
                <th scope="col">X</th>
            </tr>
            </thead>
            <tbody>
                <!-- for each registered object make a new entry in the table-->
                <?php foreach($pageElement['items'] as $item){ ?>
                    <tr>
                        <td data-title="ID"><?php print $item['id']; ?></td>
                        <td data-title="Titel"><?php print $item['title']; ?></td>
                        <td data-title="untertitel"><?php print $item['subtitle']; ?></td>
                        <td data-title="Text"><?php print $item['text']; ?></td>
                        <td data-title="Bild"><?php print $item['image']; ?></td>
                        <td data-title="Editieren"><button class="btn"><a href="<?php print $pageElement['edit_link'] . $item['id']; ?>">Editieren</a></button></td>
                        <td data-title="X"><button class="btn"><a href="<?php print $pageElement['delete_link'] . $item['id']; ?>">X</a></button></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

