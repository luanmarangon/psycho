<?php $v->layout("_theme"); ?>


<!-- # site main content
        ================================================== -->
<section id="content" class="s-content">

    <section class="s-pageheader pageheader">
        <div class="row">
            <div class="column xl-12">
                <h1 class="page-title">
                    <span class="page-title__small-type text-pretitle">Blog</span>
                    Descubra as Últimas Reflexões e Conteúdos Exclusivos no Nosso Blog!
                </h1>
            </div>
        </div>
    </section>

    <section class="s-pagecontent pagecontent">

        <div class="row">
            <div class="column xl-12 grid-block">

                <!-- <div class="grid-full">         -->
                <div class="grid-full grid-list-items">
                    <?php foreach ($blogs as $blog) : ?>

                        <div class="grid-list-items__item blog-card">
                            <div class="blog-card__header">
                                <div class="blog-card__cat-links">
                                    <a href="#"><?= $blog->blogCategory($blog->category_id)->category; ?></a>
                                </div>
                                <h3 class="blog-card__title"><a href="#"><?= $blog->title; ?></a></h3>
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

        <!-- pagination -->
        <div class="row navigation pagination">
            <div class="column xl-12">
                <nav class="pgn">
                    <ul>
                        <li>
                            <a class="pgn__prev" href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M12.707 17.293L8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z" />
                                </svg>
                            </a>
                        </li>
                        <li><a class="pgn__num" href="#0">1</a></li>
                        <li><span class="pgn__num current">2</span></li>
                        <li><a class="pgn__num" href="#0">3</a></li>
                        <li><a class="pgn__num" href="#0">4</a></li>
                        <li><a class="pgn__num" href="#0">5</a></li>
                        <li><span class="pgn__num dots">…</span></li>
                        <li><a class="pgn__num" href="#0">8</a></li>
                        <li>
                            <a class="pgn__next" href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M11.293 17.293l1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div> <!-- end column -->
        </div> <!-- end pagination -->

    </section>

</section> <!-- s-content-->
