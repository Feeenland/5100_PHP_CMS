<?php

?>
<h1><!--include title h1--></h1>
<p><!-- include lead text--></p>
<div class="row">
    <div class="col-12 col-sm-4">
        <button class="btn btn_1"><a href="<?php print 'index.php?p=admin&module=tools&action=new'; ?>">Neues Item Hinzufügen</a></button>
    </div> <!--index.php?p=admin&module=tools&action=edit&id= (edit)$pageElement['edit_link'] . $item['id']-->
</div>
<div class="row">
    <div class="col">
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Vorname</th>
                <th>Nachname</th>
                <th>Email</th>
                <th>Password</th>
                <th>Editieren</th>
                <th>Löschen</th>
            </tr>
            </thead>
            <tbody>
                <!-- for each registered object make a ned entry in the table-->
                <?php foreach($pageElement['items'] as $item){ ?>
                    <tr>
                        <td><?php print $item['id']; ?></td>
                        <td><?php print $item['title']; ?></td>
                        <td><?php print $item['subtitle']; ?></td>
                        <td><?php print $item['text']; ?></td>
                        <td><?php print $item['image']; ?></td>
                        <td><button class="btn"><a href="<?php print $pageElement['edit_link'] . $item['id']; ?>">Editieren</a></button></td>
                        <td><button class="btn"><a href="<?php print $pageElement['delete_link'] . $item['id']; ?>">Löschen</a></button></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

