<?php $v->layout("_theme"); ?>


<!-- # site main content
        ================================================== -->
<section id="content" class="s-content">

    <section class="s-pageheader pageheader">
        <div class="row">
            <div class="column xl-12">
                <h1 class="page-title">Artigos relacionados a categoria:</h1>
                <h1 class="page-title"><?= $category->category; ?></h1>

            </div>
        </div>
    </section> <!-- end pageheader -->

    <section class="s-pagecontent pagecontent">


        <div class="row">
            <div class="column xl-12 grid-block">

                <!-- <div class="grid-full">         -->
                <div class="grid-full grid-list-items">
                    <?php foreach ($blogs as $blog) : ?>

                        <div class="grid-list-items__item blog-card">
                            <div class="blog-card__header">
                                <div class="blog-card__cat-links">
                                    <a href="<?= url("/blog/categoria/{$blog->category($blog->category_id)->category}"); ?>"><?= $blog->category($blog->category_id)->category; ?></a>
                                </div>
                                <h3 class="blog-card__title"><a href="<?= url("/blog/$blog->id"); ?>"><?= $blog->title; ?></a></h3>
                            </div>
                            <div class="blog-card__text">
                                <p><?= $blog->body; ?></p>
                            </div>
                        </div> <!-- end blog-card -->

                    <?php endforeach; ?>
                </div> <!-- grid-list-items -->
                <!-- </div>     -->

            </div> <!-- end grid-block-->
        </div> <!-- end row -->

    </section> <!-- pagecontent -->



</section> <!-- s-content-->