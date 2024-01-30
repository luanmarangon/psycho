<?php $v->layout("_theme"); ?>
<!-- # site main content
        ================================================== -->
<section id="content" class="s-content">

    <section class="s-pageheader pageheader">
        <div class="row">
            <div class="column xl-12">
                <h1 class="page-title">
                    Perguntas Frequentes
                </h1>

            </div>
        </div>
    </section> <!-- end pageheader -->

    <section class="s-pagecontent pagecontent">
        <!-- <div class="row pagemedia">
            <d class="column xl-12">
                <figure class="page-media">
                    <img src="images/sample-1200.jpg" srcset="images/sample-2400.jpg 2400w, 
                                             images/sample-1200.jpg 1200w, 
                                             images/sample-600.jpg 600w" sizes="(max-width: 2400px) 100vw, 2400px" alt="">
                </figure>
            </d>
        </div> end pagemedia -->

        <div class="row width-narrower pagemain">
            <div class="column xl-12">
                <?php foreach ($faqs as $faq) : ?>
                    <h2><?= $faq->question; ?></h2>
                    <p> <?= $faq->response; ?></p>
                <?php endforeach; ?>
            </div> <!-- end grid-block-->
        </div> <!-- end pagemain -->

    </section> <!-- pagecontent -->
</section> <!-- s-content-->

