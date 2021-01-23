<?php
/**
 * news.php = this file generates the content for the news page.
 */
?>
<!-- start news -->
<?php
include 'models/news.php'; //include the function to get all the news items
$items = getAllNews(); // save all news items in $items
?>

<div class="container news_section">
    <div class="row justify-content-around">

        <?php foreach($items as $item){ ?>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 offset-lg-1">
            <article class="news_card" style="background-image: url(img/<?php print $item['folderBg']; ?>/<?php print $item['filenameBg']; ?>)">
                <div class="row">
                    <div class="col-4 offset-7">
                        <img src="img/<?php print $item['folderTop']; ?>/<?php print $item['filenameTop']; ?>" alt="<?php print $item['altTop']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 offset-7">
                        <img src="img/<?php print $item['folderMid']; ?>/<?php print $item['filenameMid']; ?>" alt="<?php print $item['altMid']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 offset-7">
                        <img src="img/<?php print $item['folderBot']; ?>/<?php print $item['filenameBot']; ?>" alt="<?php print $item['altBot']; ?>">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-11">
                        <h2><?php print $item['title']; ?></h2>
                        <p>
                            <?php print $item['text']; ?>
                        </p>
                    </div>
                </div>
            </article>
        </div>

        <?php } ?>


<!--    ### only HTML
  <div class="col-12 col-sm-6 col-md-4 col-lg-3 offset-lg-1">
            <article class="news_card" style="background-image: url(img/new/armor_front.jpg)"> // i know inline style is ugly but there was no other way to change a bg-img via PHP
                <div class="row">
                    <div class="col-4 offset-7">
                        <img src="img/new/armschiene.jpg" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 offset-7">
                        <img src="img/new/armschiene.jpg" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 offset-7">
                        <img src="img/new/armschiene.jpg" alt="">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-11">
                        <h2>Brustplatte</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusamus aut ducimus illo illum iusto odio omnis quas quos reiciendis sequi.
                            Accusamus aut ducimus illo illum iusto odio omnis quas quos reiciendis sequi.
                        </p>
                    </div>
                </div>
            </article>
        </div>-->

    </div>
</div>

<!-- End news -->
