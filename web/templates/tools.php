<?php
/**
 * tools.php = this file generates the content for the tools page.
 */
?>
<!-- Start Tools-->
<?php
include 'models/tools.php'; //include the function to get all the tools items
$items = getAllToolItems(); // save all tools items in $items
?>

<?php ?>
<!-- for each registered object make a ned entry in the table-->
<?php foreach($items as $item){ ?>
    <div class="container tools">
        <div class="row justify-content-center">
            <div class="col">
                <article class="row justify-content-center">
                    <div class="col-10 col-sm-10  col-md-4 col-lg-3">
                        <img src="img/tools/<?php print $item['image']; ?>" alt="">
                    </div>
                    <div class="col col-sm-12  col-md-6">
                        <h2><?php print $item['title']; ?></h2>
                        <p><span class="font_wind"><?php print $item['subtitle']; ?></span></p>
                        <p>
                            <?php print $item['text']; ?>
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </div>
<?php } ?>


<!-- ### only html
<div class="container tools">
    <div class="row justify-content-center">
        <div class="col">
            <article class="row justify-content-center">
                <div class="col-10 col-sm-10 col-md-4 col-lg-3">
                    <img src="img/armschiene.jpg" alt="">
                </div>
                <div class="col col-sm-12 col-md-6">
                    <h2>Messer</h2>
                    <p><span class="font_wind">zum schneiden</span></p>
                    <p>Ein gutes Messer ist wichtig, um das Leder schön schneiden zu können.
                        Ich würde sowas wie ein Teppichmesser empfehlen.
                        Für gerade Linien kann es helfen, an einem Massstab entlang zu schneiden.
                    </p>
                </div>
            </article>
        </div>
    </div>
</div>
-->
<!-- End Tools-->

