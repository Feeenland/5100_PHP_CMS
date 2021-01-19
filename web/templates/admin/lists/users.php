<?php
/**
 * This file lists all the users from the list users of the DB, so that it is possible to edit/delete them or add new ones.
 */
?>
<h1>User Verwalten</h1>
<div class="row justify-content-end">
        <button class="btn btn_1 btn_send btn_table"><a href="<?php print 'index.php?p=admin&module=users&action=new'; ?>">Neuer user</a></button>
</div>
<div class="row">
    <div class="col table-responsive" id="no-more-tables">
        <table class="table table-bordered table-striped table-condensed">
            <thead>
            <tr class="font_wind">
                <th scope="col">ID</th>
                <th scope="col">Vorname</th>
                <th scope="col">Nachname</th>
                <th scope="col">Email</th>
               <!-- <th>Password</th>--> <!-- it makes no sense to list the pw-->
                <th scope="col">Rolle</th>
                <th scope="col">Gebannt um</th>
                <th scope="col">Editieren</th>
                <th scope="col">X</th>
            </tr>
            </thead>
            <tbody>
                <!-- for each registered object make a new entry in the table-->
                <?php foreach($pageElement['items'] as $item){ ?>
                    <tr>
                        <td data-title="ID"><?php print $item['id']; ?></td>
                        <td data-title="Vorname"><?php print $item['first_name']; ?></td>
                        <td data-title="Nachname"><?php print $item['last_name']; ?></td>
                        <td data-title="Email"><?php print $item['email']; ?></td>
                       <!-- <td><?php /*print $item['password']; */?></td>-->
                        <td data-title="Rolle"><?php print $item['role']; ?></td>
                        <td data-title="Gebannt um"><?php print $item['banned_at']; ?></td>
                        <td data-title="Editieren"><button class="btn"><a href="<?php print $pageElement['edit_link'] . $item['id']; ?>">Editieren</a></button></td>
                        <td data-title="X"><button class="btn"><a href="<?php print $pageElement['delete_link'] . $item['id']; ?>">X</a></button></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

