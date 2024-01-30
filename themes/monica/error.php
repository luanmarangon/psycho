<?php $v->layout("_theme"); ?>


<!-- # site main content
        ================================================== -->
<section id="content" class="s-content">

    <section class="s-pageheader pageheader">
        <!-- <div class="row">
                        <div class="column xl-12">
                            <h1 class="page-title">
                            &bull;<?= $error->code; ?>&bull;
                            </h1>
                            
                        </div>
                    </div> -->
    </section> <!-- end pageheader -->

    <section class="s-pagecontent pagecontent">
        <div class="row pageintro">
            <p class="error">&bull;<?= $error->code; ?>&bull;</p>
            <h1><?= $error->title; ?></h1>
            <p><?= $error->message; ?></p>
            <?php if ($error->link) : ?>
                <a class="not_found_btn gradient gradient-green gradient-hover transition radius" title="<?= $error->linkTitle; ?>" href="<?= $error->link; ?>"><?= $error->linkTitle; ?></a>
            <?php endif; ?>
        </div> <!-- end pageintro -->
    </section> <!-- pagecontent -->
</section> <!-- s-content-->