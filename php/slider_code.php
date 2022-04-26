<div class="home-slider-main">
            <div class="silder-section">
                <?php if( have_rows('slider_images' ) ): ?>

                    <?php while( have_rows('slider_images') ): the_row();
                        $image = get_sub_field('image');
                        $image_url = get_sub_field('slide_1');
                        $title = get_sub_field( 'title');
                        ?>
                        <div class="item">
                            <img src="<?php echo $image_url; ?>" >
                        </div>
                        <?php echo $title; ?>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
