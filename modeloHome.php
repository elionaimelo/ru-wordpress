<?php

/*
Template Name: Home
*/

get_header();
?>
<main>
    <div role="slider" class="container-fluid" id="section1" aria-valuenow="4" aria-valuemin="1" aria-valuemax="10">
        <div class="row">
            <div class="no-padding col-lg-12  col-md-12 col-sm-12 col-xs-12">
                <div id="carousel-example-generic" class="carousel slide">

                    <?php
                    $args = array(
                        'post_type' => 'sliderprincipal',
                        'posts_per_page'  => -1,
                        'order' => 'ASC',
                    );
                    $the_query = new WP_Query($args);
                    ?>
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <li data-target="#carousel-example-generic" data-slide-to="<?php echo $the_query->current_post; ?>" class="<?php if ($the_query->current_post == 0) : ?>active<?php endif; ?>"></li>
                        <?php endwhile;
                        endif; ?>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">

                        <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <div class="item <?php if ($the_query->current_post == 0) : ?>active<?php endif; ?>" style="background-image:url(<?php echo the_field('background_item'); ?>)">
                                    <div class="container">
                                        <div class="personagem">
                                            <img src="<?php echo the_field('personagem_item'); ?>" width="196" alt="">
                                        </div>
                                    </div>
                                    <div class="carousel-caption">
                                        <h3 data-animation="animated bounceInLeft">
                                            JÁ BAIXOU O NOSSO APLICATIVO?
                                        </h3>
                                        <h3 data-animation="animated bounceInRight">
                                            <?php the_content(); ?>
                                        </h3>
                                        
                                    </div>
                                </div>

                        <?php endwhile;
                        endif; ?>


                    </div><!-- /.carousel-inner -->

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div><!-- /.carousel -->
            </div>
        </div>
    </div>
    <section class="container-fluid confira" id="cardapio">
        <div class="container">
            <div class="row espacamento">
                <div class="col-md-8">
                    <h1>
                        Confira o<br /> cardápio de hoje
                    </h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <?php include("inc/box-prato-principal.php"); ?>
                </div>
                <div class="col-md-4">
                    <?php include("inc/box-acompanhamentos.php"); ?>
                </div>
                <div class="col-md-4">
                    <?php include("inc/box-vegetariano.php"); ?>
                </div>
            </div>
        </div>
        <!--/container-->
    </section>
    <section id="destaques">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="confira-h1">
                        Destaques
                    </h1>
                </div>
            </div>
        </div>

        <section class="container-fluid noticias">
            <div class="container">
                <?php include('inc/destaques.php'); ?>
            </div>
        </section>
    </section>
    <section class="container-fluid historia" id="funcionamento">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="wow bounceInLeft">
                        <a href="<?php echo esc_url('/sobre'); ?>" >
                            Saiba tudo sobre o <br />
                            funcionamento do RU!
                        </a>
                    </h1>
                    <a href="#" data-toggle="modal" data-target="#modal-funcionamento">
                        <p class="wow bounceInLeft">
                            Olá, se você está navegando no site do RU é por quê tem interesse em conhecer melhor os nossos serviços. Clique aqui para saber mais.
                        </p>
                    </a>
                </div>
                <div class="col-md-6 remove-padding">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-func.jpg" class="pull-right img-sobre" alt="">
                </div>
            </div>
        </div>

    </section>
    <section class="container-fluid dica-nutricionista" id="equipe">

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="wow bounceInLeft">
                        <a href="#" data-toggle="modal" data-target="#modal-nutri">
                            A sua comida é escolhida<br />
                            e elaborada por quem<br />
                            entende.
                            Saiba mais!
                        </a>
                    </h1>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nutricionista.png" class="pull-right nutricionista" alt="">
                </div>
            </div>
        </div>

    </section>
    <section class="container-fluid historia" id="sobre">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="wow bounceInLeft">
                        <a href="#" data-toggle="modal" data-target="#modal-historia">
                            Já conhece<br />
                            a história<br />
                            do RU da UFRN?
                        </a>
                    </h1>
                </div>
                <div class="col-md-6 remove-padding">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-sobre.jpg" class="pull-right img-sobre" alt="">
                </div>
            </div>
        </div>

    </section>
    <section class="container-fluid aplicativo" id="sobre">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="wow bounceInLeft">
                        
                            Já baixou<br />
                            nosso<br />
                            aplicativo?
                      
                    </h1>
                </div>
                <div class="col-md-6 remove-padding">
                    <div class="row">
                        <div class="col-md-6">
                        <?php if( get_field('link_google_play')  ) { ?>
                    <a href="<?php echo the_field('link_google_play') ?>" target="_blank">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/img/googleplay.png" class="img-responsive img-googleplay" alt="">
                    </a>
                <?php } ?>
            
                        </div>
                        <div class="col-md-6">
                <?php if( get_field('link_apple_store')  ) { ?>
                    <a href="<?php echo the_field('link_apple_store') ?>" target="_blank">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/img/applestore.png" class="img-responsive img-applestore" alt="">
                    </a>
                <?php }else { ?>
                <?php echo '<p class="pull-right embreve">em breve na apple store</p>'; } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="container-fluid digai" id="digai">
        <div class="container">

            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-contato.png" class="bg-contato" alt="">

            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/personagens.png" class="personagens" alt="">


            <div class="row">
                <div class="col-md-6">
                    <h1 class="wow bounceInLeft">
                        Diga aí!
                    </h1>
                    <p class="wow bounceInLeft">
                        A sua opinião é fundamental<br />
                        para que possamos melhorar<br />
                        cada vez mais o RU!
                    </p>
                </div>
                <div class="col-md-6">
                    <?php echo do_shortcode("[contact-form-7 id='115' html_class='form-digai']"); ?>
                </div>

            </div>
        </div>

    </section>

<?php get_footer(); ?>

