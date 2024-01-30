<?php $v->layout("_theme"); ?>



<!-- # site main content
        ================================================== -->
<section id="content" class="s-content">

    <!-- intro
            ----------------------------------------------- -->
    <section id="intro" class="s-intro">

        <div class="row s-intro__content width-sixteen-col">

            <div class="column lg-12 s-intro__content-inner grid-block">

                <div class="s-intro__content-text">
                    <div class="s-intro__content-pretitle text-pretitle">Hello, I'm Monica</div>
                    <h1 class="s-intro__content-title">
                        I create marketing <br>
                        strategies for your <br>
                        business that get <br>
                        results.
                    </h1>
                </div> <!-- s-intro__content-text -->

                <div class="s-intro__content-media">
                    <div class="s-intro__content-media-inner">
                        <!-- <img src="<?= theme("/assets/images/intro-bg.jpg"); ?>" srcset="assets/images/intro-bg.jpg 1x, assets/images/intro-bg@2x.jpg 2x" alt=""> -->
                        <img src="<?= theme("/assets/images/intro-bg.jpg"); ?>" srcset="<?= theme("/assets/images/intro-bg.jpg"); ?> 1x, <?= theme("/assets/images/intro-bg@2x.jpg"); ?> 2x" alt="">

                        <div class="lines">
                            <span></span>
                        </div>
                    </div>
                </div> <!-- s-intro__content-media -->

                <div class="s-intro__scroll-down">
                    <a href="#about" class="smoothscroll">
                        <div class="scroll-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="none" stroke="#97b34a" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">&lt;!--! Atomicons Free 1.00 by @atisalab License - https://atomicons.com/license/ (Icons: CC BY 4.0) Copyright 2021 Atomicons --&gt;<polyline points="7 13 12 18 17 13"></polyline>
                                <line x1="12" y1="18" x2="12" y2="6"></line>
                            </svg>
                        </div>
                        <span>Role para mais</span>
                    </a>
                </div> <!-- s-intro__scroll-down -->

            </div> <!-- s-intro__content-inner -->

        </div> <!-- s-intro__content -->

    </section> <!-- end s-intro -->

    <!-- about
            ----------------------------------------------- -->
    <section id="about" class="s-about target-section">

        <div class="row s-about__content width-sixteen-col">
            <div class="column grid-block grid-section-split">

                <img src="<?= theme("/assets/images/geometric_shape.svg"); ?> " alt="" class="s-about__content-imgbg">

                <div class="section-header grid-section-split__header">
                    <div class="text-pretitle">Sobre</div>
                    <h2 class="text-display-title">
                        Um título inspirador sobre você.
                    </h2>
                </div> <!-- end section-header -->

                <div class="s-about__content-main grid-section-split__primary">
                    <p class="attention-getter">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Repellendus iste ipsam quod repellat. Hic tempora ullam aperiam
                        ipsum optio magni vel inventore voluptatibus nisi maiores laboriosam
                        fuga iure, velit eligendi ab vero minima? Quae ducimus ab dignissimos
                        iure, eos consequatur est deleniti cum id aliquid neque.
                    </p>

                    <p class="attention-getter">
                        Autem tenetur commodi maiores. Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Est eligendi fugit, facilis velit reiciendis iure laudantium. Praesentium repellat
                        corrupti dolor sit sint obcaecati. Modi aut quo molestiae a explicabo maiores necessitatibus
                        nemo repellendus architecto? Corrupti numquam ullam nostrum, eveniet at doloribus blanditiis
                        aliquid a est porro aspernatur pariatur culpa soluta nesciunt odio quasi maxime debitis illum.
                    </p>

                    <p class="attention-getter">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Repellendus iste ipsam quod repellat. Hic tempora ullam aperiam
                        ipsum optio magni vel inventore voluptatibus nisi maiores laboriosam
                        fuga iure, velit eligendi ab vero minima? Quae ducimus ab dignissimos
                        iure, eos consequatur est deleniti cum id aliquid neque.
                    </p>
                </div> <!-- end s-about__content-main -->

                <div class="s-about__content-btn grid-section-split__bottom">
                    <a href="<?= url("/sobre"); ?>" class="btn btn--stroke u-fullwidth">Mais sobre mim</a>

                    <ul class="s-about__social social-list">
                    <?php if (CONF_SOCIAL_FACEBOOK) : ?>
                            <li>
                                <a href="<?= CONF_SOCIAL_FACEBOOK; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                                        <path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"></path>
                                    </svg>
                                    <span class="u-screen-reader-text">Facebook</span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if (CONF_SOCIAL_TWITTER) : ?>
                            <li>
                                <a href="#0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                                        <path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"></path>
                                    </svg>
                                    <span class="u-screen-reader-text">Twitter</span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if (CONF_SOCIAL_INSTAGRAM) : ?>
                            <li>
                                <a href="<?= CONF_SOCIAL_INSTAGRAM; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                                        <path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path>
                                        <circle cx="16.806" cy="7.207" r="1.078"></circle>
                                        <path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path>
                                    </svg>
                                    <span class="u-screen-reader-text">Instagram</span>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul> <!-- end s-footer__social -->
                </div> <!-- end s-about__content-btn -->

            </div> <!-- content-inner -->
        </div>

    </section> <!-- end s-about -->

    <!-- expertise
            ----------------------------------------------- -->
    <section id="expertise" class="s-expertise">

        <div class="row s-expertise__content width-sixteen-col">
            <div class="column xl-12 grid-block grid-section-split">

                <div class="section-header grid-section-split__header">
                    <div class="text-pretitle">Expertise</div>
                    <h2 class="text-display-title">
                        Minhas principais áreas de especialização.
                    </h2>

                    <p class="lead">
                    Ofereço serviços online especializados em aconselhamento para pais, orientação profissional, e avaliação psicológica. As sessões são conduzidas de forma sigilosa, proporcionando apoio emocional, estratégias práticas e compreensão individual. Encontre suporte para sua jornada emocional e desenvolvimento pessoal, tudo de maneira conveniente e segura.
                    </p>
                </div> <!-- end section-header -->

                <div class="s-expertise__content-main grid-section-split__primary">

                    <div class="grid-list-items list-items show-ctr">
                        <?php foreach ($services as $key) : ?>
                            <div class="grid-list-items__item list-items__item">
                                <div class="grid-list-items__title list-items__item-header">
                                    <h3 class="list-items__item-title"><?= $key->name; ?></h3>
                                </div>
                                <div class="grid-list-items__text list-items__item-text">
                                    <p>
                                        <?= $key->description; ?>
                                    </p>
                                </div>
                            </div> <!-- list-expertise__item -->
                        <?php endforeach; ?>
                    </div> <!-- grid-list-items -->
                </div> <!-- end s-expertise__content-main -->

                <div class="s-expertise__content-btn grid-section-split__bottom">
                    <a href="services.html" class="btn btn--stroke u-fullwidth">Ver todos os serviços</a>
                </div> <!-- end s-about__content-btn -->

            </div> <!-- end grid-block-->
        </div> <!-- end s-expertise__content -->

    </section> <!-- end s-expertise -->

    <!-- clients
            ----------------------------------------------- -->

</section> <!-- s-content-->


<!-- # journal
        ================================================== -->
<section id="journal" class="s-journal">

    <div class="row s-journal__content width-sixteen-col">
        <div class="column xl-12 grid-block">

            <div class="grid-full section-header text-center">
                <div class="text-pretitle">Artigos recentes</div>
                <h2 class="text-display-title">
                    Últimos artigos do meu blog.
                </h2>
            </div> <!-- end section-header -->



            <div class="grid-full s-journal__content-main grid-list-items">
                <?php foreach ($blogs as $key) :  ?>
                    <div class="grid-list-items__item blog-card">
                        <div class="blog-card__header">
                            <div class="blog-card__cat-links">
                                <a href="blog.html"><?= $key->category; ?></a>
                            </div>
                            <h3 class="blog-card__title"><a href="single.html"><?= $key->title; ?></a></h3>
                        </div>
                        <div class="blog-card__text">
                            <p><?= $key->body; ?></p>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div> <!-- end grid-list-items -->

        </div> <!-- end grid-block-->
    </div> <!-- end s-journal__content -->

</section> <!-- end s-journal -->