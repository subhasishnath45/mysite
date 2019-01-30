<?php 
/*
Template Name: Site Home Page
*/
?>
<?php get_header(); ?>


		<?php get_template_part('content','homecarousel'); ?>
            
        <!-- About Area Start -->
        <div id="about">
            <div class="container">
                <!-- Section Title Start -->
                <?php 
                    $query_about_from_home = array(
                        'p' => 253, // ID of a page, post, or custom type
                        'post_type' => 'page'
                    );
                    $wp_query_about_from_home = new WP_Query($query_about_from_home);
                    if($wp_query_about_from_home->have_posts()) : while($wp_query_about_from_home->have_posts()) : $wp_query_about_from_home -> the_post();
                ?>
                <div class="section--title">
                    <h2><strong><?php the_title(); ?></strong></h2>
                </div>
                <!-- Section Title End -->
                
                <div class="row">

                    <div class="col-md-12 text-center">
                        <h3><?php the_field('who_am_i'); ?></h3>

                        <div class="home-about-brief">
                            <?php the_content(); ?>
                        </div>
                        
                        <a href="<?php echo get_field('download_cv_link'); ?>" class="btn btn--primary">DOWNLOAD MY CV</a>
                    </div>

                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
        <!-- About Area End -->
            
        <!-- Services Area Start -->
        <div id="services" class="bg--overlay" data-parallax-bg-img="<?php echo get_template_directory_uri(); ?>/img/my-service-BG.png">
            <div class="container">
                <?php 
                    $query_whatIdo_from_home = array(
                        'p' => 264, // ID of a page, post, or custom type
                        'post_type' => 'page'
                    );
                    $wp_query_whatIdo_from_home = new WP_Query($query_whatIdo_from_home);
                    if($wp_query_whatIdo_from_home->have_posts()) : while($wp_query_whatIdo_from_home->have_posts()) : $wp_query_whatIdo_from_home -> the_post();
                ?>
                <!-- Section Title Start -->
                <div class="section--title">
                    <h2><strong><?php the_title(); ?></strong></h2>
                </div>
                <!-- Section Title End -->
                
                <div class="row row-eq-height">
                    <!-- Service Item Start -->
                    <div class="col-md-4 col-sm-6 service--item">
                        <div class="service--icon">
                            <i class="fa fa-laptop"></i>
                        </div>
                        
                        <div class="service--content">
                            <h2><?php the_field('web_design_&_ui'); ?></h2>
                            
                            <p>
                                <?php
                             // $web_design_full = get_field('web_design_&_ui_text'); 
                             // $web_design_brief = substr($web_design_full,0,70);
                             // echo $web_design_brief . "...";
                                the_field('web_design_&_ui_text'); 
                             ?></p>
                        </div>
                    </div>
                    <!-- Service Item End -->
                    
                    <!-- Service Item Start -->
                    <div class="col-md-4 col-sm-6 service--item">
                        <div class="service--icon">
                            <i class="fa fa-object-group"></i>
                        </div>
                        
                        <div class="service--content">
                            <h2><?php the_field('user_flow_&_wireframes'); ?></h2>
                            
                            <p><?php the_field('user_flow_&_wireframes_text'); ?></p>
                        </div>
                    </div>
                    <!-- Service Item End -->
                    
                    <!-- Service Item Start -->
                    <div class="col-md-4 col-sm-6 service--item">
                        <div class="service--icon">
                        	<i class="fa fa-mobile"></i>
                            
                        </div>
                        
                        <div class="service--content">
                            <h2><?php the_field('mobile_app_design_&_development'); ?></h2>
                            
                            <p><?php the_field('mobile_app_design_&_development_text'); ?></p>
                        </div>
                    </div>
                    <!-- Service Item End -->
                
                    <!-- Service Item Start -->
                    <div class="col-md-4 col-sm-6 service--item">
                        <div class="service--icon">
                            <i class="fa fa-paint-brush"></i>
                        </div>
                        
                        <div class="service--content">
                            <h2><?php the_field('logo_design'); ?></h2>
                            
                            <p><?php the_field('logo_design_text'); ?></p>
                        </div>
                    </div>
                    <!-- Service Item End -->
                    
                    
                    <!-- Service Item Start -->
                    <div class="col-md-4 col-sm-6 service--item">
                        <div class="service--icon">
                            <i class="fa fa-clone"></i>
                        </div>
                        
                        <div class="service--content">
                            <h2><?php the_field('print_design'); ?></h2>
                            
                            <p><?php the_field('print_design_text'); ?></p>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>
        </div>
        <!-- Services Area End -->
            
        <!-- Gallery Area Start -->
        <div id="gallery">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title">
                    <h2><strong>AWESOME WORKS</strong></h2>
                </div>
                <!-- Section Title End -->
                
                <!-- Gallery Filter Menu Start -->
                <div class="gallery-filter-menu">
                    <ul>
                        <li class="active"><a href="*" class="btn--default">ALL PROJECTS</a></li>
                        <li><a href="website-item" class="btn--default">WEBSITE</a></li>
                        <li><a href="logo-item" class="btn--default">LOGO</a></li>
                        <li><a href="application-item" class="btn--default">APPLICATION</a></li>
                        <li><a href="illustation-item" class="btn--default">ILLUSTATION</a></li>
                        <li><a href="print-design-item" class="btn--default">PRINT DESIGN</a></li>
                    </ul>
                </div>
                <!-- Gallery Filter Menu End -->
                
                <!-- Gallery Items Start -->
                <div class="row gallery-items">
                    <!-- Gallery Item Start -->
                    <div class="col-xs-12 col-sm-4 col-md-3 thumbnail gallery-item" data-cat="website-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img/gallery-photo-1.png" alt="" />
                        
                        <div class="gallery-overlay">
                            <div class="vc--parent">
                            	<div class="vc--child">
                                    <h2>PROJECT TITLE</h2>
                                    
                                    <p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do.</p>
                                    
                                    <a href="#galleryDetails" class="btn gallery--window" data-toggle="modal">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Gallery Item End -->
                    
                    <!-- Gallery Item Start -->
                    <div class="col-xs-12 col-sm-4 col-md-3 thumbnail gallery-item" data-cat="website-item logo-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img/gallery-photo-2.png" alt="" />
                        <span class="gallery--case-study">CASE STUDY</span>
                        
                        <div class="gallery-overlay">
                            <div class="vc--parent">
                            	<div class="vc--child">
                                    <a href="#postDetails" class="icon-link" data-toggle="modal"><i class="icon fa fa-file-text-o"></i></a>
                                    
                                    <h2>PROJECT TITLE</h2>
                                    
                                    <p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do.</p>
                                    
                                    <a href="#galleryDetails" class="btn gallery--window" data-toggle="modal">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Gallery Item End -->
                    
                    <!-- Gallery Item Start -->
                    <div class="col-xs-12 col-sm-4 col-md-3 thumbnail gallery-item" data-cat="logo-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img/gallery-photo-3.png" alt="" />
                        
                        <div class="gallery-overlay">
                            <div class="vc--parent">
                            	<div class="vc--child">
                                    <h2>PROJECT TITLE</h2>
                                    
                                    <p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do.</p>
                                    
                                    <a href="#galleryDetails" class="btn gallery--window" data-toggle="modal">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Gallery Item End -->
                    
                    <!-- Gallery Item Start -->
                    <div class="col-xs-12 col-sm-4 col-md-3 thumbnail gallery-item" data-cat="logo-item application-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img/gallery-photo-4.png" alt="" />
                        
                        <div class="gallery-overlay">
                            <div class="vc--parent">
                            	<div class="vc--child">
                                    <h2>PROJECT TITLE</h2>
                                    
                                    <p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do.</p>
                                    
                                    <a href="#galleryDetails" class="btn gallery--window" data-toggle="modal">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Gallery Item End -->
                    
                    <!-- Gallery Item Start -->
                    <div class="col-xs-12 col-sm-4 col-md-3 thumbnail gallery-item" data-cat="application-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img/gallery-photo-5.png" alt="" />
                        
                        <div class="gallery-overlay">
                            <div class="vc--parent">
                            	<div class="vc--child">
                                    <h2>PROJECT TITLE</h2>
                                    
                                    <p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do.</p>
                                    
                                    <a href="#galleryDetails" class="btn gallery--window" data-toggle="modal">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Gallery Item End -->
                    
                    <!-- Gallery Item Start -->
                    <div class="col-xs-12 col-sm-4 col-md-3 thumbnail gallery-item" data-cat="application-item illustation">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img/gallery-photo-6.png" alt="" />
                        
                        <div class="gallery-overlay">
                            <div class="vc--parent">
                            	<div class="vc--child">
                                    <h2>PROJECT TITLE</h2>
                                    
                                    <p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do.</p>
                                    
                                    <a href="#galleryDetails" class="btn gallery--window" data-toggle="modal">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Gallery Item End -->
                    
                    <!-- Gallery Item Start -->
                    <div class="col-xs-12 col-sm-4 col-md-3 thumbnail gallery-item" data-cat="illustation-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img/gallery-photo-7.png" alt="" />
                        <span class="gallery--case-study">CASE STUDY</span>
                        
                        <div class="gallery-overlay">
                            <div class="vc--parent">
                            	<div class="vc--child">
                                    <a href="#postDetails" class="icon-link" data-toggle="modal"><i class="icon fa fa-file-text-o"></i></a>
                                    
                                    <h2>PROJECT TITLE</h2>
                                    
                                    <p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do.</p>
                                    
                                    <a href="#galleryDetails" class="btn gallery--window" data-toggle="modal">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Gallery Item End -->
                    
                    <!-- Gallery Item Start -->
                    <div class="col-xs-12 col-sm-4 col-md-3 thumbnail gallery-item" data-cat="illustation-item print-design-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img/gallery-photo-8.png" alt="" />
                        
                        <div class="gallery-overlay">
                            <div class="vc--parent">
                            	<div class="vc--child">
                                    <h2>PROJECT TITLE</h2>
                                    
                                    <p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do.</p>
                                    
                                    <a href="#galleryDetails" class="btn gallery--window" data-toggle="modal">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Gallery Item End -->
                </div>
                <!-- Gallery Items End -->
            </div>
        
            <!-- Gallery Details Modal Start -->
            <div class="modal fade gallery--details" id="galleryDetails" role="dialog">
                <div class="modal-dialog modal-lg">
                    <!-- Modal Content Start -->
                    <div class="modal-content">
                        <!-- Modal Header Start -->
                        <div class="modal-header">
                            <span class="close" data-dismiss="modal">&times;</span>
                            
                            <h4 class="modal-title">PROJECT NAME</h4>
                            <p>#UX Design #UI Design #Prototype #Design #Identity</p>
                        </div>
                        <!-- Modal Header End -->
                        
                        <!-- Modal Body Start -->
                        <div class="modal-body">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img/project-01.jpg" alt="" />
                        </div>
                        <!-- Modal Body End -->
                        
                        <!-- Modal Footer Start -->
                        <div class="modal-footer gallery--description">
                            <p>Last time I created a full e-commerce web template for website owner who planning right now. In that design, I followed all the rules of UX latest design techniques. After finished, I started a dashboard design with the best experience for the adminstrator.</p>
                            <p>And finally, I finished the design.</p>
                        </div>
                        <!-- Modal Footer End -->
                    </div>
                    <!-- Modal Content End -->
                </div>
            </div>
            <!-- Gallery Details Modal End -->
        </div>
        <!-- Gallery Area End -->
            
        <!-- Feedback Area Start -->
        <div id="feedback" data-parallax-bg-img="<?php echo get_template_directory_uri(); ?>/img/my-service-BG.png">
            <div class="container">
                <div class="row">
                    <!-- Feedback FAQ Start -->
                    <div class="col-md-4 feedback--faq">
                        <!-- Feedback Title Start -->
                        <h3 class="feedback--title">WHY ME?</h3>
                        <!-- Feedback Title End -->
                        
                        <!-- Feedback Accordion Start -->
                        <div class="panel-group" id="feedbackA" role="tablist">
                            <!-- Feedback Accordion Item Start -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <a href="#feedbackA01" data-toggle="collapse" data-parent="#feedbackA">
                                        <h4 class="panel-title">Collapsible Group Item #1 <i class="fa fa-minus"></i></h4>
                                    </a>
                                </div>
                                
                                <div id="feedbackA01" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod tempor sunt aliqua put.
                                    </div>
                                </div>
                            </div>
                            <!-- Feedback Accordion Item End -->
                            
                            <!-- Feedback Accordion Item Start -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <a href="#feedbackA02" class="collapsed" data-toggle="collapse" data-parent="#feedbackA">
                                        <h4 class="panel-title">Collapsible Group Item #2 <i class="fa fa-minus"></i></h4>
                                    </a>
                                </div>
                                
                                <div id="feedbackA02" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod tempor sunt aliqua put.
                                    </div>
                                </div>
                            </div>
                            <!-- Feedback Accordion Item End -->
                            
                            <!-- Feedback Accordion Item Start -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <a href="#feedbackA03" class="collapsed" data-toggle="collapse" data-parent="#feedbackA">
                                        <h4 class="panel-title">Collapsible Group Item #3 <i class="fa fa-minus"></i></h4>
                                    </a>
                                </div>
                                
                                <div id="feedbackA03" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod tempor sunt aliqua put.
                                    </div>
                                </div>
                            </div>
                            <!-- Feedback Accordion Item End -->
                        </div>
                        <!-- Feedback Accordion End -->
                    </div>
                    <!-- Feedback FAQ End -->
                    
                    <!-- Feedback Items Start -->
                    <div class="col-md-8 feedback--items">
                        <!-- Feedback Title Start -->
                        <h3 class="feedback--title">CLIENT'S FEEDBACK</h3>
                        <!-- Feedback Title End -->
                        
                        <div class="feedback--slider FeedbackSlider">
                            <!-- Feedback Item Start -->
                            <div class="feedback--item" data-client-img="<?php echo get_template_directory_uri(); ?>/img/feedback-<?php echo get_template_directory_uri(); ?>/img/client-01.jpg">
                                <i class="fa fa-quote-left"></i>
                                
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.</p>
                                
                                <span class="cite">James, Web Developer</span>
                            </div>
                            <!-- Feedback Item End -->
                            
                            <!-- Feedback Item Start -->
                            <div class="feedback--item" data-client-img="<?php echo get_template_directory_uri(); ?>/img/feedback-<?php echo get_template_directory_uri(); ?>/img/client-02.jpg">
                                <i class="fa fa-quote-left"></i>
                                
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.</p>
                                
                                <span class="cite">James, Web Developer</span>
                            </div>
                            <!-- Feedback Item End -->
                            
                            <!-- Feedback Item Start -->
                            <div class="feedback--item" data-client-img="<?php echo get_template_directory_uri(); ?>/img/feedback-<?php echo get_template_directory_uri(); ?>/img/client-03.jpg">
                                <i class="fa fa-quote-left"></i>
                                
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.</p>
                                
                                <span class="cite">James, Web Developer</span>
                            </div>
                            <!-- Feedback Item End -->
                            
                            <!-- Feedback Item Start -->
                            <div class="feedback--item" data-client-img="<?php echo get_template_directory_uri(); ?>/img/feedback-<?php echo get_template_directory_uri(); ?>/img/client-04.jpg">
                                <i class="fa fa-quote-left"></i>
                                
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.</p>
                                
                                <span class="cite">James, Web Developer</span>
                            </div>
                            <!-- Feedback Item End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feedback Area End -->
        <?php 
            // following is the only way to include one page into another page in WP
            $include = get_pages('include=349');
            $content = apply_filters('the_content',$include[0]->post_content);
            $title = apply_filters('the_title',$include[0]->post_title);
            ?>
            <div id="blog">
                <div class="container">
                    <?php 
                    echo $content;
                    ?>
                </div>
            </div>
        <!-- Counter Area Start -->
        <div id="counter" class="bg--overlay" data-parallax-bg-img="<?php echo get_template_directory_uri(); ?>/img/my-service-BG.png">
            <div class="container">
                <div class="row">
                    <!-- Counter Item Start -->
                	<div class="col-md-3 col-sm-6 counter--item">
                        <div class="counter--num">
                            <i class="fa fa-flag"></i>
                            <span class="CounterUp">2,500</span>
                        </div>
                        
                        <div class="counter--text"><strong>PROJECT</strong> COMPLETED</div>
                    </div>
                    <!-- Counter Item End -->
                    
                    <!-- Counter Item Start -->
                	<div class="col-md-3 col-sm-6 counter--item">
                        <div class="counter--num">
                            <i class="fa fa-smile-o"></i>
                            <span class="CounterUp">400</span>
                        </div>
                        
                        <div class="counter--text"><strong>HAPPY</strong> CLIENTS</div>
                    </div>
                    <!-- Counter Item End -->
                    
                    <!-- Counter Item Start -->
                	<div class="col-md-3 col-sm-6 counter--item">
                        <div class="counter--num">
                            <i class="fa fa-code"></i>
                            <span class="CounterUp">98</span>K
                        </div>
                        
                        <div class="counter--text"><strong>LINE</strong> OF <strong>CODE</strong></div>
                    </div>
                    <!-- Counter Item End -->
                    
                    <!-- Counter Item Start -->
                	<div class="col-md-3 col-sm-6 counter--item">
                        <div class="counter--num">
                            <i class="fa fa-coffee"></i>
                            <span class="CounterUp">78</span>K
                        </div>
                        
                        <div class="counter--text"><strong>CUP</strong> OF <strong>COFFEE</strong></div>
                    </div>
                    <!-- Counter Item End -->
                </div>
            </div>
        </div>
        <!-- Counter Area End -->
    
        <!-- Contact Area Start -->
        <div id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- Contact Address Start -->
                        <div class="contact--address">
                            <h2>CONTACT ADDRESS</h2>
                            
                            <address>
                                <p><i class="fa fa-home"></i>House #14, Road #09, Sector #12, Dhaka-1203, Bangladesh.</p>
                                <p><i class="fa fa-envelope"></i>support@example.com</p>
                                <p><i class="fa fa-phone"></i>+000 000 000 000</p>
                                <p><i class="fa fa-fax"></i>+1-212-9876543</p>
                            </address>
                        </div>
                        <!-- Contact Address End -->
                            
                        <!-- Contact Social Start -->
                        <div class="contact--social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-feed"></i></a></li>
                            </ul>
                        </div>
                        <!-- Contact Social End -->
                    </div>
                    
                    <div class="col-sm-6">
                        <!-- Contact Form Start -->
                        <div class="contact--form">
                            <div class="contact-form-status"></div>
                            
                            <form action="contact.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="contactName" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="contactEmail" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" name="contactSubject" class="form-control" placeholder="Subject">
                                </div>
                                
                                <div class="form-group">
                                    <textarea name="contactMessage" class="form-control" rows="9" placeholder="Message"></textarea>
                                </div>
                                
                                <input type="submit" value="SEND" class="submit-btn btn--primary">
                            </form>
                        </div>
                        <!-- Contact Form End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Area End -->
        
        <!-- Map Area Start -->
        <div id="map" data-latitude="23.790546" data-longitude="90.375583" data-zoom="16"></div>
        <!-- Map Area End -->
    
        <!-- Brands Area Start -->
        <div id="brands" class="bg--overlay" data-parallax-bg-img="<?php echo get_template_directory_uri(); ?>/img/brands-img/bg.jpg">
            <div class="container">
                <!-- Brands Slider Start -->
                <div class="brands--slider BrandsSlider">
                    <!-- Brand Item Start -->
                    <div class="brand--item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/brands-img/01.png" alt="" class="img-responsive center-block" />
                    </div>
                    <!-- Brand Item End -->
                    
                    <!-- Brand Item Start -->
                    <div class="brand--item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/brands-img/02.png" alt="" class="img-responsive center-block" />
                    </div>
                    <!-- Brand Item End -->
                    
                    <!-- Brand Item Start -->
                    <div class="brand--item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/brands-img/03.png" alt="" class="img-responsive center-block" />
                    </div>
                    <!-- Brand Item End -->
                    
                    <!-- Brand Item Start -->
                    <div class="brand--item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/brands-img/04.png" alt="" class="img-responsive center-block" />
                    </div>
                    <!-- Brand Item End -->
                    
                    <!-- Brand Item Start -->
                    <div class="brand--item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/brands-img/05.png" alt="" class="img-responsive center-block" />
                    </div>
                    <!-- Brand Item End -->
                    
                    <!-- Brand Item Start -->
                    <div class="brand--item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/brands-img/06.png" alt="" class="img-responsive center-block" />
                    </div>
                    <!-- Brand Item End -->
                </div>
                <!-- Brands Slider End -->
            </div>
        </div>
        <!-- Brands Area End -->


<?php get_footer(); ?>