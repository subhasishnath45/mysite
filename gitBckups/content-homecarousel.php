        <!-- Banner Area Start -->
        <div id="banner">
            <!-- Banner Slider Start -->
            <div class="banner--slider BannerSlider">
                <?php 
                $query_homecarousel = array(
                    'post_type' => 'AllHomeSlides',
                    'cat' => 4,
                    'order' => 'ASC',
                    'showposts' => -1
                );
                $wp_query_homecarousel = new WP_Query($query_homecarousel);
                if($wp_query_homecarousel->have_posts()) : while($wp_query_homecarousel->have_posts()) : $wp_query_homecarousel -> the_post();
                ?>
                <!-- Banner Item Start -->
                <?php 
                    if(has_post_thumbnail( get_the_ID() )):
                        $carousel_img = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
                    endif;
                ?>
                <div class="banner--item" data-bg-img="<?php echo $carousel_img[0]; ?>">
                    <div class="container">
                        <div class="vc--parent">
                            <div class="vc--child">
                                <!-- Banner Content Start -->
                                <div class="banner--content banner--content-left">
                                    <h2><?php the_field('slide_heading'); ?></h2>
                                    
                                    <div>
                                        <?php the_field('slide_text'); ?>
                                    </div>
                                    
                                    <a href="<?php echo get_field('slide_button_link'); ?>" class="btn--default AnimateScrollLink"><?php the_field('slide_button_writeup'); ?></a>
                                </div>
                                <!-- Banner Content End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner Item End -->
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>
            <!-- Banner Slider End -->
        </div>
        <!-- Banner Area End -->