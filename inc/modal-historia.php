<div class="modal fade modal-historia" id="modal-historia" tabindex="-1" role="dialog" aria-labelledby="myModalHistoria">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <?php the_field("historia_do_ru"); ?>

                    <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            
                            <?php 
                            
                            
                            if( have_rows('carrosel_da_historia') ): $img_count=1;  ?>
                                
                                <?php while( have_rows('carrosel_da_historia') ): the_row(); ?>
                                <div class="item <?php if ($img_count == 1) : ?>active<?php endif; ?>">
                                    <img src="<?php echo the_sub_field('foto_historica'); ?>" class="img-responsive" alt="">
                                    <div class="carousel-caption">
                                        <?php echo the_sub_field('legenda_da_foto'); ?>
                                    </div>
                                    </div>
                                <?php $img_count++; endwhile; ?>
            
                            <?php endif; ?>
                        
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic1" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic1" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>