<?php $v->layout("_theme"); ?>

<!-- # site main content
        ================================================== -->
<section id="content" class="s-content">

    <section class="s-pageheader pageheader">
        <div class="row">
            <div class="column xl-12">
                <h1 class="page-title">
                    <span class="page-title__small-type text-pretitle">Serviços</span>
                    Serviços de alto impacto
                </h1>

            </div>
        </div>
    </section> <!-- pageheader -->

    <section class="s-pagecontent pagecontent">

        <div class="row pageintro">
            <div class="column xl-6 lg-12">
                <h2 class="text-display-title">Apoio Psicológico Profissional ao Seu Alcance!</h2>
            </div>
            <div class="column xl-6 lg-12 u-flexitem-x-right">
                <p class="lead">
                    Às vezes, a jornada da vida pode parecer desafiadora, e é nesses momentos que oferecemos suporte especializado
                    para impulsionar seu crescimento pessoal e bem-estar. Nossos serviços são desenhados para causar um impacto positivo
                    duradouro, proporcionando as ferramentas necessárias para você alcançar seus objetivos e viver uma vida mais plena.
                </p>
            </div>
        </div> <!-- pageintro -->

        <div class="row">
            <div class="column xl-12 grid-block">

                <div class="grid-full grid-list-items list-items show-ctr">
                    <?php foreach ($services as $service) : ?>
                        <div class="grid-list-items__item list-items__item">
                            <div class="list-items__item-header">
                                <h3 class="list-items__item-title"><?= $service->name; ?></h3>
                            </div>
                            <div class="list-items__item-text">
                                <p><?= $service->description; ?></p>
                                <ul>
                                    <p><strong>Quantidade de Sessões?</strong></p>
                                    <li>
                                        <p><?= $service->sessions; ?></p>
                                    </li>
                                </ul>
                                <ul>
                                    <p><strong>Duração de cada sessão?</strong></p>
                                    <li>
                                        <p><?= $service->duration; ?></p>
                                    </li>
                                </ul>
                                <ul>
                                    <p><strong>Forma de Atendimento?</strong></p>
                                    <li>
                                        <p><?= $service->atendence; ?></p>
                                    </li>
                                </ul>

                            </div>
                        </div> <!-- end list-items__item -->
                    <?php endforeach; ?>

                </div> <!-- grid-list-items -->


            </div> <!-- end grid-block-->
        </div> <!-- end row -->

    </section> <!-- pagecontent -->

    <section class="s-testimonials">

        <div class="s-testimonials__header row row-x-center text-center">
            <div class="column xl-8 lg-12">

                <p class="text-pretitle">
                    Testimonials
                </p>
                <h3>
                    Reviews From Real Clients
                </h3>

            </div>
        </div> <!--end s-testimonials__header -->

        <div class="row s-testimonials__content">
            <div class="column xl-12 testimonials">

                <div class="swiper-container testimonials__slider page-slider">

                    <div class="swiper-wrapper">
                        <div class="testimonials__slide swiper-slide">
                            <p>
                                Molestiae incidunt consequatur quis ipsa autem nam sit enim magni. Voluptas tempore rem.
                                Explicabo a quaerat sint autem dolore ducimus ut consequatur neque. Nisi dolores quaerat fuga rem nihil nostrum.
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
                                Voluptas tempore rem. Molestiae incidunt consequatur quis ipsa autem nam sit enim magni.
                                Explicabo a quaerat sint autem dolore ducimus ut consequatur neque. Nisi dolores quaerat fuga rem nihil nostrum.
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
                                Nisi dolores quaerat fuga rem nihil nostrum. Molestiae incidunt consequatur quis ipsa autem nam sit enim magni.
                                Voluptas tempore rem. Explicabo a quaerat sint autem dolore ducimus ut consequatur neque.
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
                                Molestiae incidunt consequatur quis ipsa autem nam sit enim magni. Voluptas tempore rem.
                                Explicabo a quaerat sint autem dolore ducimus ut consequatur neque. Nisi dolores quaerat fuga rem nihil nostrum.
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

<!-- # cta
        ================================================== -->
<section id="cta" class="s-cta">

    <div class="row row-x-center text-center">
        <div class="column xl-8 lg-12">

            <div class="s-cta__content">
                <h2 class="text-display-title">
                    Get started with a consultation today.
                </h2>
                <p class="lead">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis rem, esse doloribus sint eaque at debitis enim vitae minus expedita ratione dignissimos sit nostrum optio sequi. Ipsa at beatae quam.
                </p>
                <a href="contact.html" class="btn btn--primary">Vamos trabalhar juntos</a>
            </div>

        </div>
    </div>

</section> <!-- end s-cta -->