<?php
/**
 * this page has the task of issuing a confirmation after something has been changed on the website
 * and a button that leads you back to the edited list
 * */
?>

<h1>Erfolgreich <?php print $happened; ?></h1>
<button class="btn btn_1"><a href="index.php?p=admin&module=<?php print $location; ?>&action=list">zurück zur übersicht</a></button>
