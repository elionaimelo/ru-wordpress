<?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page'  => 3,
                    'order' => 'ASC',
                );
                $the_query = new WP_Query($args);
                ?>
                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="wow bounceInLeft">
                                    <a href="#" data-toggle="modal" data-target="#nutricionista-do-ru-da-dicas-de-higiene-de-alimentos-e-alimentacao-saudavel-durante-a-pandemia-da-covid-19">
                                        <?php the_title() ?>
                                    </a>
                                </h1>
                                <p>
                                    <p>
                                        <?php the_excerpt() ?>
                                    </p>
                            </div>
                            <div class="col-md-6 remove-padding mask">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('large', array('class' => 'img-responsive'));
                                } else {
                                    echo '<img src="' . get_bloginfo('stylesheet_directory')
                                        . '/assets/img/thumbnail-default.jpg" class="img-responsive" />';
                                }
                                ?>
                            </div>
                        </div>

                        <?php wp_reset_postdata(); ?>
                    <?php endwhile; ?>
                <?php else :  ?>
                    <p><?php _e('Houve um erro! Desculpe!'); ?></p>
                <?php endif; ?>