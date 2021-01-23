<?php
/**
 * tools.php = this file generates the content for the tools page.
 */
?>


<div class="container">
    <div class="row">
        <div class="col">
            <h1>Werkzeug <br> Lederbearbeitung</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-9">
            <p class="lead">
                Auf dieser Seite sind alle wichtigen und auch ein paar unwichtige Werkzeuge kurz beschrieben,
                die man benötigt oder mit denen es einfacher ist, Dinge, wie zum Beispiel eine Rüstung mit Leder herzustellen.
                Viele meiner Werkzeuge habe ich von <a href="http://lederhaus.de/lederwerkzeug/" target="_blank" aria-label="Link zu Lederhaus.de Werkzeug" title="Shop Lederhaus.ch">Lederhaus.de</a> oder von
                <a href="https://www.ryffel-felle.ch/de/13-werkzeug-zubehor" target="_blank" aria-label="Link zu Ryffel Felle + Leder, Werkzeugr und zubehör" title="Shop ryffel-felle.ch">ryffel-felle.ch</a>.
            </p>
        </div>
    </div>
</div>



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
                        <img src="img/<?php print $item['folder_1']; ?>/<?php print $item['filename_1']; ?>" alt="<?php print $item['alt_1']; ?>">
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

