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
                                        <h3 data-animation="animated bounceInRight">
                                            <a href="https://play.google.com/store/apps/details?id=br.ufrn.ru">
                                                <img id="googleplay" src="assets/img/googleplay.png" alt="" class="googleplay" />
                                            </a>
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
                        <a href="#" data-toggle="modal" data-target="#modal-funcionamento">
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
                <?php echo '<p class="pull-right embreve">em breve</p>'; } ?>
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
    <footer class="container-fluid">
        <div class="container text-center">

            <ul>
                <li>
                    <a href="http://www.sistemas.ufrn.br/portal/PT/" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ufrn.png" alt="UFRN">
                    </a>

                </li>
                <li>
                    <a href="http://www.sedis.ufrn.br/" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sedis.png" alt="SEDIS">
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/ufrnru" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.png" alt="FACEBOOK">
                    </a>
                </li>
            </ul>
        </div>
        <!--//container-->
    </footer>
    <footer id="creditos">
        <div class="container text-center wow bounceInLeft animated">
            <p>
                <a href="#" data-toggle="modal" data-target="#modal-creditos">
                    Confira quem participou na criação deste projeto!
                </a>
            </p>
        </div>
    </footer> <!-- Modais -->

    <!-- Modal sugestao de alimento -->
    <div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" aria-labelledby="myModalNorm" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Fechar</span>
                    </button>
                    <h2>Insira sua sugestão</h2>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">

                    <form role="form" id="form1" style="background:none;margin-top:-5px;" action="http://www.ru.ufrn.br/contato" method="POST">
                        <input type="hidden" name="_token" value="we1DIqlx0FPtHfYZo4SVKRzQYmqa1Hpq9jAz7qDt" />
                        <input type="hidden" name="assunto" value="Sugestão de refeição" />
                        <div class="form-group has-feedback">
                            <label class="sr-only" for="nome1">Nome</label>
                            <input type="text" class="form-control" id="nome1" placeholder="nome" name="nome" required>
                            <i class="fa fa-user form-control-feedback"></i>
                        </div>
                        <div class="form-group has-feedback">
                            <label class="sr-only" for="email1">Email</label>
                            <input type="email" class="form-control" id="email1" placeholder="Email" name="email" required>
                            <i class="fa fa-envelope form-control-feedback"></i>
                        </div>
                        <div class="form-group has-feedback">
                            <label class="sr-only" for="message1">Mensagem</label>
                            <textarea class="form-control" rows="9" id="message1" placeholder="Mensagem" name="mensagem" required></textarea>
                            <i class="fa fa-pencil form-control-feedback"></i>
                        </div>
                        <div class="form-group has-feedback" style="float:left">
                            <label class="sr-only" for="telefone1">Telefone</label>
                            <input type="text" class="form-control" id="telefone1" data-inputmask="'mask': ['(99) 9999-9999', '(99) 99999-9999']" placeholder="Telefone" name="telefone">
                            <i class="fa fa-user form-control-feedback"></i>
                        </div>
                        <input type="submit" value="" class="btn btn-primary botao-enviar">
                    </form>

                    <div class="clearfix"></div>

                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

    <!-- ./Modal notícias -->

    <?php include("inc/modal-alimentacao.php"); ?>
    <?php include("inc/modal-noticia.php"); ?>
    <?php include("inc/modal-nutri.php"); ?>
    <?php include("inc/modal-historia.php"); ?>


    <div id="video2" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                </div>
                <!-- Modal Body -->
                <div class="modal-body">

                    <video controls class="img img-responsive">
                        <source src="assets/video/animacao17.mp4" type='video/mp4'>
                        <source src="assets/video/animacao17.webm" type='video/webm'>
                        <source src="assets/video/animacao17.ogv" type='video/ogg'>
                        Seu navegador está desatualizado. Atualize-o para uma melhor experiência.
                    </video>

                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div><!-- ./ -->








    <div id="video4" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                </div>
                <!-- Modal Body -->
                <div class="modal-body">

                    <video controls class="img img-responsive">
                        <source src="assets/video/animacao19.mp4" type='video/mp4'>
                        <source src="assets/video/animacao19.webm" type='video/webm'>
                        <source src="assets/video/animacao19.ogv" type='video/ogg'>
                        Seu navegador está desatualizado. Atualize-o para uma melhor experiência.
                    </video>

                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div><!-- ./ -->

    <div id="video5" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                </div>
                <!-- Modal Body -->
                <div class="modal-body">

                    <video controls class="img img-responsive">
                        <source src="assets/video/animacao20.mp4" type='video/mp4'>
                        <source src="assets/video/animacao20.webm" type='video/webm'>
                        <source src="assets/video/animacao20.ogv" type='video/ogg'>
                        Seu navegador está desatualizado. Atualize-o para uma melhor experiência.
                    </video>

                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div><!-- ./ -->

    <div id="video6" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                </div>
                <!-- Modal Body -->
                <div class="modal-body">

                    <video controls class="img img-responsive">
                        <source src="assets/video/animacao21.mp4" type='video/mp4'>
                        <source src="assets/video/animacao21.webm" type='video/webm'>
                        <source src="assets/video/animacao21.ogv" type='video/ogg'>
                        Seu navegador está desatualizado. Atualize-o para uma melhor experiência.
                    </video>

                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div><!-- ./ -->

    <!-- Modal -->
    <div class="modal fade modal-historia" id="modal-creditos" tabindex="-1" role="dialog" aria-labelledby="myModalHistoria">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <h3>Créditos</h3>

                    <hr>

                    <dl>
                        <dt>Universidade Federal do Rio Grande do Norte</dt>
                        <dd>Reitora: Angela Maria Paiva Cruz</dd>
                        <dd>Vice-reitor: José Daniel Diniz Melo</dd>

                        <dt>Pró-Reitoria de Assuntos Estudantis - PROAE</dt>
                        <dd>Pró-Reitor: Edmilson Lopes Júnior</dd>
                        <dd>Pró-Reitor Adjunto: Paulo Roberto Paiva Campos</dd>

                        <dt>Secretaria de Educação a Distância - SEDIS</dt>
                        <dd>Secretária de Educação a Distância: Maria Carmem Freire Diógenes Rêgo</dd>
                        <dd>Secretária Adjunta de Educação a Distância: Ione Rodrigues Diniz Morais</dd>

                        <dt>Superintendência de Informática - SINFO</dt>
                        <dd>Superintendente: Apuena Vieira Gomes</dd>
                        <dd>Superintendente substituto: Marcos Cesar Madruga Alves Pinheiro</dd>

                        <dt>Restaurante Universitário - RU</dt>
                        <dd>Diretora: Kátia Maria Bezerra da Silva</dd>

                        <dt>Coordenação geral da campanha</dt>
                        <dd>Kaline Sampaio de Araújo (SEDIS)</dd>
                        <dd>Mauricio Oliveira Junior (SEDIS)</dd>

                        <dt>Concepção gráfica e visual</dt>
                        <dd>Amanda Duarte (SEDIS)</dd>
                        <dd>Mauricio Oliveira Junior (SEDIS)</dd>

                        <dt>Ilustrações</dt>
                        <dd>Amanda Duarte (SEDIS)</dd>
                        <dd>Carolina Costa (SEDIS)</dd>
                        <dd>Lyézio Lima (SEDIS)</dd>

                        <dt>Roteiros</dt>
                        <dd>Kaline Sampaio de Araújo (SEDIS)</dd>
                        <dd>Mauricio Oliveira Junior (SEDIS)</dd>
                        <dd>Priscilla Xavier de Macedo (SEDIS)</dd>

                        <dt>Revisão</dt>
                        <dd>Kaline Sampaio de Araújo (SEDIS)</dd>

                        <dt>Animações e Edição de vídeo</dt>
                        <dd>Alessandro de Oliveira Paula (SEDIS)</dd>
                        <dd>Lyézio Lima (SEDIS)</dd>

                        <dt>Desenvolvimento WEB e aplicativo móvel</dt>
                        <dd>Elionai Augusto Silva de Melo (SEDIS)</dd>
                        <dd>Mike Job Santos Pereira da Silva (SEDIS)</dd>

                        <dt>Mídias sociais</dt>
                        <dd>André Soares (SEDIS)</dd>
                        <dd>Natália Noronha (SEDIS)</dd>

                        <dt>Suporte Tecnológico</dt>
                        <dd>Gibeon Soares De Aquino Junior (SINFO)</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>


    <?php include("inc/modal-funcionamento.php"); ?>
</main>

<?php
get_footer();
