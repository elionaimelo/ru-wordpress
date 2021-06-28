<?php

/*
Template Name: Contato
*/

get_header();
?>
<main>
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


    <?php
    get_footer();
