<?php

/*
Template Name: Achados e perdidos
*/

get_header();
?>
<main>
    <section class="conteudo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-3">Achados e perdidos</h1>
                    <hr/>
                </div>
            </div>
                    <div class="row">
                    
                        <?php
                            $args = array(
                            'post_type' => 'perdidos',
                            'posts_per_page'  => -1,
                            'order' => 'ASC',
                            );
                            $the_query = new WP_Query($args);
                        ?>
                        <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="col-md-4">
                            <figure>
                                <?php $img_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'kev-feature'); ?>
                                <img src="<?php echo $img_url[0];?>" class="img-responsive" alt="" />
                            </figure>
                            <h4><?php the_title(); ?></h4>
                            <p><?php the_content(); ?></p>
                            <a class="btn btn-primary" href="<?php echo esc_url('/contato'); ?>" role="button">Entrar em contato</a>
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
