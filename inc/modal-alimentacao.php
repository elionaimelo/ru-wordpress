<?php
    $args = array(
        'post_type' => 'pratoprincipal',
        'posts_per_page'  => -1,
        'order' => 'ASC',
    );
    $the_query = new WP_Query($args);
    ?>

    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

        <div class="modal fade modal-historia" id="alimentacao<?php echo $id = get_the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalNorm" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                        </div>
                        <!-- Modal Body -->
                        <div class="modal-body">
                            <h3><?php the_title() ?></h3>
                            <hr>
                            <?php the_content() ?>
                        </div>
                    </div>
                </div>
            </div><!-- ./Modal notícias -->

            <?php wp_reset_postdata(); ?>
        <?php endwhile; ?>
    <?php else :  ?>
        <p><?php _e('Houve um erro! Desculpe!'); ?></p>
    <?php endif; ?>

    <?php
    $args = array(
        'post_type' => 'acompanhamentos',
        'posts_per_page'  => -1,
        'order' => 'ASC',
    );
    $the_query = new WP_Query($args);
    ?>

    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

        <div class="modal fade modal-historia" id="alimentacao<?php echo $id = get_the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalNorm" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                        </div>
                        <!-- Modal Body -->
                        <div class="modal-body">
                            <h3><?php the_title() ?></h3>
                            <hr>
                            <?php the_content() ?>
                        </div>
                    </div>
                </div>
            </div><!-- ./Modal notícias -->

            <?php wp_reset_postdata(); ?>
        <?php endwhile; ?>
    <?php else :  ?>
        <p><?php _e('Houve um erro! Desculpe!'); ?></p>
    <?php endif; ?>


    <?php
    $args = array(
        'post_type' => 'vegetariano',
        'posts_per_page'  => -1,
        'order' => 'ASC',
    );
    $the_query = new WP_Query($args);
    ?>

    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

        <div class="modal fade modal-historia" id="alimentacao<?php echo $id = get_the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalNorm" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                        </div>
                        <!-- Modal Body -->
                        <div class="modal-body">
                            <h3><?php the_title() ?></h3>
                            <hr>
                            <?php the_content() ?>
                        </div>
                    </div>
                </div>
            </div><!-- ./Modal notícias -->

            <?php wp_reset_postdata(); ?>
        <?php endwhile; ?>
    <?php else :  ?>
        <p><?php _e('Houve um erro! Desculpe!'); ?></p>
    <?php endif; ?>