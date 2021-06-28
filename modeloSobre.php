<?php

/*
Template Name: Sobre
*/

get_header();
?>
<main>
    <section class="conteudo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-3">Saiba tudo sobre o funcionamento do RU!</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php if (have_posts()) : while (have_posts()) : the_post();

                            the_content();
                        endwhile;
                    else : ?>
                        <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                    <div class="col-md-12">
                    <h1 class="mt-3">Localização</h1>
                        <?php
                            $args = array(
                            'post_type' => 'unidades',
                            'posts_per_page'  => -1,
                            'order' => 'ASC',
                            );
                            $the_query = new WP_Query($args);
                        ?>
                        <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <br/>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading<?php the_ID(); ?>">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php the_ID(); ?>" aria-expanded="true" aria-controls="collapse<?php the_ID(); ?>">
                                    <?php the_title(); ?>
                                    </a>
                                </h4>
                                </div>
                                <div id="collapse<?php the_ID(); ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php current_post; ?>">
                                <div class="panel-body">
                                    <figure>
                                        <?php $img_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'kev-feature'); ?>
                                        <img src="<?php echo $img_url[0];?>" class="img-responsive" alt="" />
                                    </figure>

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


<?php
get_footer();
