<?php $v->layout("_theme"); ?>

<!-- # site main content
        ================================================== -->
<section id="content" class="s-content">

    <section class="s-pageheader pageheader">
        <div class="row">
            <div class="column xl-12">
                <h5 class="page-title"><?= $blog->title; ?></h5>
            </div>
        </div>
    </section> <!-- end pageheader -->

    <section class="s-pagecontent pagecontent">
        <div class="row width-narrower pagemain">
            <div class="column xl-12">
                <?= $blog->body; ?>
            </div> <!-- end grid-block-->
        </div> <!-- end pagemain -->
    </section> <!-- pagecontent -->
</section> <!-- s-content-->