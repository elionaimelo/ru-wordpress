   <!-- Modal -->
   <div class="modal fade modal-historia" id="modal-funcionamento" tabindex="-1" role="dialog" aria-labelledby="myModalHistoria">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                </div>
                <!-- Modal Body -->
                <div class="modal-body">

                    <?php
                    $args = array(
                        'post_type' => 'saibatudoru',
                        'posts_per_page'  => -1,
                        'order' => 'ASC',
                    );
                    $the_query = new WP_Query($args);
                    ?>

<?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                    <h3><?php the_title() ?></h3>

                    <hr>

                    <?php the_content(); ?>

                    <hr>

                    <h4>FONTE:</h4>

                    <p><?php echo the_field('fonte_saiba_tudo'); ?></p>
                    <?php wp_reset_postdata(); ?>
            <?php endwhile; ?>
        <?php else :  ?>
            <p><?php _e('Houve um erro! Desculpe!'); ?></p>
        <?php endif; ?>
                </div>
            </div>
        </div>
    </div>