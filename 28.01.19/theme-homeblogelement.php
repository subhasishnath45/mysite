<?php

// 
function homeBlog_section($attributes){

	

	extract(shortcode_atts(array(
		'blog_heading_home' => 'Default value',
		'blog_no_home' => 'Default value',
	),$attributes));

	// return "<p style='color:".$color."; font-size:".$fontsize."'>".$content."</p>";
	// ob - Output Buffering
	// Here I'm starting output buffering
	ob_start();

	?>

    
                <!-- Section Title Start -->
                <div class="section--title">
                    <h2><strong><?php echo $blog_heading_home; ?></strong></h2>
                </div>
                <!-- Section Title End -->
                
                <div class="blog--quick-nav clearfix">
                    <button class="toggle--btn btn--default"><i class="fa fa-indent"></i></button>
                    
                    <!-- Posts Filter Menu Start -->
                    <div class="posts-filter-menu">
                        <ul>
                            <li><a href="*">All</a></li>

                            <?php 

                            $home_blog_terms = get_terms( array(
                                'taxonomy' => 'BlogTypes',
                                'hide_empty' => false,
                            ) );
                            foreach ($home_blog_terms as $home_blog_term) {
                            ?>
                            <li><a href="<?php echo $home_blog_term->slug ?>"><?php echo $home_blog_term->name ?></a></li>
                            <?php
                            }
                            ?>

                            <!-- <li><a href="ux-design">UX Design</a></li>
                            <li><a href="ui-design">UI Design</a></li>
                            <li><a href="usability">Usability</a></li>
                            <li><a href="interaction-design">Intarection Design</a></li>
                            <li><a href="logo-design">Logo Design</a></li>
                            <li><a href="illustration">Illustration</a></li>
                            <li><a href="typography">Typography</a></li>
                            <li><a href="freelancing">Freelancing</a></li>
                            <li><a href="research">Research</a></li>
                            <li><a href="usability">Publishing</a></li> -->
                        </ul>
                    </div>
                    <!-- Posts Filter Menu End -->
                </div>
                
                <!-- Post Items Start -->
                <div class="row post-items">
                    <?php 

                $query_homeblog = array(
                    'post_type' => 'AllBlogs',
                    'taxonomy' => 'BlogTypes',
                    'order' => 'DESC',
                    'showposts' => $blog_no_home,
                );
                $wp_query_homeBlog = new WP_Query($query_homeblog);
                if($wp_query_homeBlog->have_posts()) : while($wp_query_homeBlog->have_posts()) : $wp_query_homeBlog -> the_post();


            	// getting the terms for using in  data-cat="ux-design illustration" of each post item
               	// Second parameter is the taxonomy name
				$terms = get_the_terms( get_the_ID(), 'BlogTypes' );
				                         
				if ( $terms && ! is_wp_error( $terms ) ) : 
				 	
				    $draught_links = array();
				 
				    foreach ( $terms as $term ) {
				    	// we're inserting each slug into the array
				        $draught_links[] = $term->slug;
				    }
                  	   
				    $on_draught = join( " ", $draught_links );


                    ?>
                <?php 
                    if(has_post_thumbnail( get_the_ID() )):
                        $homeBlog_img = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
                    endif;
                ?>
                    <!-- Post Item Start -->
                    <div class="col-sm-4 col-md-3 post-item" data-cat="<?php echo $on_draught; ?>">
                        <!-- Post Image Start -->
                        <div class="post--img">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo $homeBlog_img[0]; ?>" alt="" />
                            </a>
                        </div>
                        <!-- Post Image End -->
                        <!-- Post Description Start -->
                        <div class="post-description">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            
                            <p class="post-date"><i class="fa fa-calendar"></i> <a href="#"><?php echo meks_time_ago(); ?></a></p>
                            
                            <div class="post-description-content">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                        <!-- Post Description End -->
                        
                        <!-- Post Meta Start -->
                        <!-- <div class="post-meta clearfix">
                            <div class="post-meta-img">
                                <a href="#">
                                    <img src="<?php //echo get_template_directory_uri(); ?>/img/logo.png" alt="" class="img-responsive img-circle" />
                                </a>
                            </div>
                            
                            <div class="post-meta-desc">
                                <h3><a href="#">JOHN <strong>DOE</strong></a></h3>
                                <p>On <a href="#"><strong>UX</strong> Design</a></p>
                            </div>
                        </div> -->
                        <!-- Post Meta End -->
                    </div>
                    <!-- Post Item End -->

                <?php endif; ?>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>

                </div>
                <!-- Post Items End -->


	<?php

	// Here I'm ending output buffering
	return ob_get_clean();

}
// the first parameter is the base - 'section1_base'
// I created this base in theme-options.php
add_shortcode('homeblog_base','homeBlog_section');
?>