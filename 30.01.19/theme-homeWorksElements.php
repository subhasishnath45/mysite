<?php 

function homeWorks_section($attributes){

	

	extract(shortcode_atts(array(
		'works_heading_home' => 'Default value',
		'blog_no_home' => 'Default value',
	),$attributes));

	ob_start();


?>

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

<?php 

	// Here I'm ending output buffering
	return ob_get_clean();

}
add_shortcode('homework_base','homeWorks_section');
?>