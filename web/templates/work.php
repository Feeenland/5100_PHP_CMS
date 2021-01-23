<?php
/**
 * work.php = this file generates the content for the work page.
 */

?>


<div class="container">
    <div class="row">
        <div class="col">
            <h1>Arbeitsschritte <br> zur Lederrüstung</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-9">
            <p class="lead">
                Auf dieser Seite findest du die beschriebenen Arbeitsschritte, um eine Lederrüstung anzufertigen mit Hinweisen, auf was man achten sollte. Um diese Hinweise wäre ich sehr froh gewesen, bevor ich angefangen hatte.
                Ebenfalls findest du Hinweise dazu, wann es sinnvoll ist welches Werkzeug zu verwenden.
            </p>
        </div>
    </div>
</div>



<!--Start work-->
<?php
include 'models/works.php'; //include the function to get all the tools items
$items = getAllWorks(); // save all tools items in $items
?>

<?php ?>
<!-- for each registered object make a ned entry in the table-->
<?php foreach($items as $item){ ?>
    <article class="container work_collapse_element">
        <div class="row work_visual  justify-content-center">
            <figure class="col-sm-12 col-md-6 col-lg-5">
                <img src="img/<?php print $item['folder1']; ?>/<?php print $item['filename1']; ?>" alt="<?php print $item['alt1']; ?>">
                <img src="img/<?php print $item['folder2']; ?>/<?php print $item['filename2']; ?>" alt="<?php print $item['alt2']; ?>">
            </figure>
            <div class="col-12 col-sm-12 col-md-6 col-lg-5">
                <h2><?php print $item['title']; ?></h2>
                <p>
                    <?php print $item['text']; ?>
                </p>
                <button class=" btn_1 btn " type="button" data-toggle="collapse" data-target="#collapse<?php print $item['id']; ?>" aria-expanded="false" aria-controls="collapse<?php print $item['id']; ?>">
                    <span>mehr...</span>
                </button>
            </div>
        </div>
        <div class="row work_collapsed justify-content-center">
            <div class="col col-md-10">
                <div class="collapse" id="collapse<?php print $item['id']; ?>">
                    <div class="card card-body">
                        <h3><?php print $item['subtitle']; ?></h3>
                        <p>
                            <?php print $item['sub_text']; ?></p>
                        <figure>
                            <img src="img/<?php print $item['folder3']; ?>/<?php print $item['filename3']; ?>" alt="<?php print $item['alt3']; ?>">
                            <img src="img/<?php print $item['folder4']; ?>/<?php print $item['filename4']; ?>" alt="<?php print $item['alt4']; ?>">
                            <img src="img/<?php print $item['folder5']; ?>/<?php print $item['filename5']; ?>" alt="<?php print $item['alt5']; ?>">
                            <img src="img/<?php print $item['folder6']; ?>/<?php print $item['filename6']; ?>" alt="<?php print $item['alt6']; ?>">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </article>
<?php } ?>

<!-- ### only HTML
<article class="container work_collapse_element">
    <div class="row work_visual  justify-content-center">
        <figure class="col-sm-12 col-md-6 col-lg-5">
            <img src="img/new/armschiene.jpg" alt="">
            <img src="img/new/armschiene.jpg" alt="">
        </figure>
        <div class="col-12 col-sm-12 col-md-6 col-lg-5">
            <h2> Farben, Schnallen, Nieten</h2>
            <p  class="standard"> Zur Definition der Farben und Schnallen: Wenn man diese Dinge Anfangs entscheidet, muss man, wenn das Produkt beinahe fertig ist,
                nicht warten, bis die richtigen Schnallen, Nieten etc. eintreffen</p>
            <button class=" btn_1 btn " type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                <span>mehr...</span>
            </button>
        </div>
    </div>
    <div class="row work_collapsed justify-content-center">
        <div class="col col-md-10">
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <h3>Definition der Farben, Schnallen, Nieten und verschlüssen</h3>
                    <p>
                        Meine Lösung dazu war, von allen Schnallen, welche in Frage kamen, eine zu bestellen und zu schauen,
                        welche davon wirklich passt. Gleich ging ich auch bei den Nieten und der Farbe vor.
                        Ich bestellte meine Schnallen und Nieten von <a href="http://lederhaus.de/schnallen/" target="_blank" aria-label="Link zu Lederhaus.de schnallen" title="Shop Lederhaus.ch">Lederhaus.de</a>.
                        Die Farbe sowie Leder holte ich bei <a href="https://www.ryffel-felle.ch/de/146-lederfarben" target="_blank" aria-label="Link zu Ryffel Felle + Leder, Farben" title="Shop ryffel-felle.ch">ryffel-felle.ch</a>.
                    </p>
                    <figure>
                        <img src="img/new/armschiene.jpg" alt="">
                        <img src="img/new/armschiene.jpg" alt="">
                        <img src="img/armschiene.jpg" alt="">
                        <img src="img/armschiene.jpg" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</article>-->

<!--End work->
