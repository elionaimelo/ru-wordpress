<?php

/*
Template Name: Resoluções
*/

get_header();
?>
<main>
    <section class="conteudo">
        <div class="bg-secao-resolucoes">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="mt-3 text-white">Resoluções e portaria</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">


            <div class="row">
                <div class="col-md-12">

                    <hr />

                    <?php
                    $args = array(
                        'post_type' => 'resolucoes',
                        'posts_per_page'  => -1,
                        'order' => 'ASC',
                    );
                    $the_query = new WP_Query($args);
                    ?>
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header bg-green" id="heading<?php the_ID(); ?>">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left font-weight-bold" type="button" data-toggle="collapse" data-target="#collapse<?php the_ID(); ?>" aria-expanded="true" aria-controls="collapse<?php the_ID(); ?>">
                                                <?php the_title(); ?>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapse<?php the_ID(); ?>" class="collapse" aria-labelledby="heading<?php the_ID(); ?>" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php wp_reset_postdata(); ?>
                        <?php endwhile; ?>
                    <?php else :  ?>
                        <p><?php _e('Houve um erro! Desculpe!'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>