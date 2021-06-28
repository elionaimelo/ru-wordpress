<div class="box-ingredientes proteinas">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-proteinas.jpg" class="top-ribbon" alt="">

    <div class="ingredientes">
        <?php

        $today = date('Ymd', strtotime("now"));

        $the_query = new WP_Query(array(
            'post_type'            => 'pratoprincipal',
            'posts_per_page'    => -1,
            'meta_key'            => 'refeicao',
            'meta_value'    => 'Café',
            'orderby'            => 'meta_value',
            'order'                => 'DESC',
            'meta_query' => array(
                array(
                    'key' => 'data_refeicao',
                    'value' => $today,
                )
            )
        ));
        if ($the_query->have_posts()) : ?>
            <h4>Café</h4>
            <hr>
            <ul class="wow bounceInLeft cafe">
                <?php while ($the_query->have_posts()) : $the_query->the_post();
                    $class = get_field('refeicao');
                ?>
                    <li class="<?php echo $class; ?>">
                        <a href="#" data-toggle="modal" data-target="#alimentacao<?php echo $id = get_the_ID(); ?>">
                            <?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?><?php the_title(); ?>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php else :
            echo '<p class="sem-alimentacao">sem alimentação cadastrada</p>';
        endif; ?>
        <?php wp_reset_query();     // Restore global post data stomped by the_post(). 
        ?>
        <?php
        $the_query = new WP_Query(array(
            'post_type'            => 'pratoprincipal',
            'posts_per_page'    => -1,
            'meta_key'            => 'refeicao',
            'meta_value'    => 'Almoço',
            'orderby'            => 'meta_value',
            'order'                => 'DESC',
            'meta_query' => array(
                array(
                    'key' => 'data_refeicao',
                    'value' => $today,
                )
            )
        ));
        if ($the_query->have_posts()) : ?>
            <h4>Almoço</h4>
            <hr>
            <ul class="wow bounceInLeft almoco">
                <?php while ($the_query->have_posts()) : $the_query->the_post();
                    $class = get_field('refeicao');
                ?>

                    <li class="<?php echo $class; ?>">
                        <a href="#" data-toggle="modal" data-target="#alimentacao<?php echo $id = get_the_ID(); ?>">
                            <?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?><?php the_title(); ?>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
        <?php wp_reset_query();     // Restore global post data stomped by the_post(). 
        ?>
        <?php
        $the_query = new WP_Query(array(
            'post_type'            => 'pratoprincipal',
            'posts_per_page'    => -1,
            'meta_key'            => 'refeicao',
            'meta_value'    => 'Janta',
            'orderby'            => 'meta_value',
            'order'                => 'DESC',
            'meta_query' => array(
                array(
                    'key' => 'data_refeicao',
                    'value' => $today,
                )
            )
        ));
        if ($the_query->have_posts()) : ?>
            <h4>Jantar</h4>
            <hr>
            <ul class="wow bounceInLeft jantar">
                <?php while ($the_query->have_posts()) : $the_query->the_post();
                    $class = get_field('refeicao');
                ?>

                    <li class="<?php echo $class; ?>">
                        <a href="#" data-toggle="modal" data-target="#alimentacao<?php echo $id = get_the_ID(); ?>">
                        <?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?><?php the_title(); ?>
                    </a>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
        <?php wp_reset_query();     // Restore global post data stomped by the_post(). 
        ?>
    </div>

    <a class="btn-sugira" data-toggle="modal" data-target="#myModalNorm">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bottom-proteinas.jpg" class="bottom-ribbon" alt="Link para sugerir uma nova proteina">
    </a>
</div>