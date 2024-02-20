<?php $v->layout("_theme"); ?>

<!-- # site main content
        ================================================== -->
<section id="content" class="s-content">

    <section class="s-pageheader pageheader">
        <div class="row">
            <div class="column xl-12">
                <h1 class="page-title">
                    <span class="page-title__small-type text-pretitle">Sobre</span>
                    Olá, eu sou a Mônica
                </h1>

            </div>
        </div>
    </section> <!-- end pageheader -->

    <section class="s-pagecontent pagecontent">

        <div class="row pageintro">
            <div class="column xl-6 lg-12">
                <h2 class="text-display-title">Algumas palavras inspiradoras para se descrever</h2>
            </div>
            <div class="column xl-6 lg-12 u-flexitem-x-right">
                <p class="lead"><?= $about->inspiration; ?></p>
            </div>
        </div> <!-- end pageintro -->

        <div class="row pagemedia">
            <d class="column xl-12">
                <figure class="page-media">
                    <img src="images/thumbs/about/about-1200.jpg" srcset="images/thumbs/about/about-2400.jpg 2400w, 
                                             images/thumbs/about/about-1200.jpg 1200w, 
                                             images/thumbs/about/about-600.jpg 600w" sizes="(max-width: 2400px) 100vw, 2400px" alt="">
                </figure>
            </d>
        </div> <!-- end pagemedia -->

        <div class="row width-narrower pagemain">
            <div class="column xl-12">

                <h2>Como cheguei aqui</h2>
                <p><?= $about->currentSituation; ?></p>

                <h2 class="u-add-bottom">Meus valores e crenças</h2>

                <div class="grid-list-items list-items">
                    <?php foreach($values as $key):?>
                    <div class="grid-list-items__item list-items__item u-remove-bottom">
                        <div class="list-items__item-header">
                            <h6 class="list-items__item-small-title"><?= $key->value; ?></h6>
                        </div>
                        <p><?= $key->description; ?></p>
                    </div>
                        <?php endforeach;?>
                </div> <!--grid-list-items -->

                <h2>Por que trabalhar comigo</h2>
                <p><?= $about->experience; ?></p>

                <h2>Mais algumas palavras sobre mim</h2>
                <p><?= $about->someWords; ?></p>

            </div> <!-- end grid-block-->
        </div> <!-- end pagemain -->

    </section> <!-- pagecontent -->

    <section class="s-testimonials">

        <div class="s-testimonials__header row row-x-center text-center">
            <div class="column xl-8 lg-12">

                <p class="text-pretitle">
                    Depoimentos
                </p>
                <h3>
                    Avaliações de clientes reais
                </h3>

            </div>
        </div> <!--end s-testimonials__header -->

        <div class="row s-testimonials__content">
            <div class="column xl-12 testimonials">

                <div class="swiper-container testimonials__slider page-slider">

                    <div class="swiper-wrapper">
                        <div class="testimonials__slide swiper-slide">
                            <p>
                                Molestiae incidunt consequatur quis ipsa autem nam sit enim magni. Voluptas
                                tempore rem.
                                Explicabo a quaerat sint autem dolore ducimus ut consequatur neque. Nisi dolores
                                quaerat fuga rem nihil nostrum.
                                Laudantium quia consequatur molestias.
                            </p>
                            <div class="testimonials__author">
                                <img src="images/avatars/user-01.jpg" alt="Author image" class="testimonials__avatar">
                                <cite class="testimonials__cite">
                                    <strong>John Rockefeller</strong>
                                    <span>Standard Oil Co.</span>
                                </cite>
                            </div>
                        </div>
                        <div class="testimonials__slide swiper-slide">
                            <p>
                                Voluptas tempore rem. Molestiae incidunt consequatur quis ipsa autem nam sit
                                enim magni.
                                Explicabo a quaerat sint autem dolore ducimus ut consequatur neque. Nisi dolores
                                quaerat fuga rem nihil nostrum.
                                Laudantium quia consequatur molestias.
                            </p>
                            <div class="testimonials__author">
                                <img src="images/avatars/user-04.jpg" alt="Author image" class="testimonials__avatar">
                                <cite class="testimonials__cite">
                                    <strong>Andrew Carnegie</strong>
                                    <span>Carnegie Steel Co.</span>
                                </cite>
                            </div>
                        </div>
                        <div class="testimonials__slide swiper-slide">
                            <p>
                                Nisi dolores quaerat fuga rem nihil nostrum. Molestiae incidunt consequatur quis
                                ipsa autem nam sit enim magni.
                                Voluptas tempore rem. Explicabo a quaerat sint autem dolore ducimus ut
                                consequatur neque.
                                Laudantium quia consequatur molestias.
                            </p>
                            <div class="testimonials__author">
                                <img src="images/avatars/user-06.jpg" alt="Author image" class="testimonials__avatar">
                                <cite class="testimonials__cite">
                                    <strong>Henry Ford</strong>
                                    <span>Ford Motor Co.</span>
                                </cite>
                            </div>
                        </div>
                        <div class="testimonials__slide swiper-slide">
                            <p>
                                Molestiae incidunt consequatur quis ipsa autem nam sit enim magni. Voluptas
                                tempore rem.
                                Explicabo a quaerat sint autem dolore ducimus ut consequatur neque. Nisi dolores
                                quaerat fuga rem nihil nostrum.
                                Laudantium quia consequatur molestias.
                            </p>
                            <div class="testimonials__author">
                                <img src="images/avatars/user-02.jpg" alt="Author image" class="testimonials__avatar">
                                <cite class="testimonials__cite">
                                    <strong>John Morgan</strong>
                                    <span>JP Morgan & Co.</span>
                                </cite>
                            </div>
                        </div>
                    </div> <!-- end swiper-wrapper -->

                    <div class="swiper-pagination"></div>

                </div> <!--end testimonials__slider -->

            </div> <!-- testimonials -->
        </div> <!--end s-testimonials__content -->

    </section> <!-- end s-testimonials -->

</section> <!-- s-content-->