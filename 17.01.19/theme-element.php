<?php

// 
function consult_section1($attributes){

	

	extract(shortcode_atts(array(
		'web_design_heading' => 'Default value',
		'content_webdesign' => 'Default value',
		'colorpicker_section' => 'Default Value',
		'bg_section1' => 'Default Value',
        'icon_webdesign' => 'Default Value',
	),$attributes));

	// return "<p style='color:".$color."; font-size:".$fontsize."'>".$content."</p>";
	// ob - Output Buffering
	// Here I'm starting output buffering
	ob_start();

	?>

        <!-- Services Area Start -->
        <?php 
        $bgimgtest = wp_get_attachment_image_src($bg_section1,'full');
        if($bgimgtest){
    	?>
    	<div id="services" class="bg--overlay" data-parallax-bg-img="<?php echo esc_html($bgimgtest[0]); ?>">
    	<?php
        }
        ?>
        
            <div class="">
                <!-- Section Title Start -->
                <div class="section--title">
                    <h2><strong>WHAT I DO</strong></h2>
                </div>
                <!-- Section Title End -->
                
                <div class="row row-eq-height">
                    <!-- Service Item Start -->
                    <div class="col-md-4 col-sm-6 service--item">
                        <div class="service--icon">
                            <i class="<?php echo esc_attr($icon_webdesign); ?>"></i>
                        </div>
                        
                        <div class="service--content">
<!--                             <h2>WEB <strong>DESIGN</strong> &amp; <strong>UI</strong></h2> -->
                            <h2>
                            	<?php echo $web_design_heading; ?>	
                        	</h2>
                            <p style="color:<?php echo esc_html($colorpicker_section); ?>"><?php
                             echo $content_webdesign;
                              
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
                            <h2>USER <strong>FLOW</strong> &amp; <strong>WIREFRAMES</strong></h2>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non vel, sint nisi possimus sunt veritatis totam velit.</p>
                        </div>
                    </div>
                    <!-- Service Item End -->
                    
                    <!-- Service Item Start -->
                    <div class="col-md-4 col-sm-6 service--item">
                        <div class="service--icon">
                            <i class="fa fa-paint-brush"></i>
                        </div>
                        
                        <div class="service--content">
                            <h2>VISUAL <strong>DESIGN</strong></h2>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non vel, sint nisi possimus sunt veritatis totam velit.</p>
                        </div>
                    </div>
                    <!-- Service Item End -->
                
                    <!-- Service Item Start -->
                    <div class="col-md-4 col-sm-6 service--item">
                        <div class="service--icon">
                            <i class="fa fa-mobile"></i>
                        </div>
                        
                        <div class="service--content">
                            <h2>MOBILE <strong>APP</strong> DESIGN</h2>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non vel, sint nisi possimus sunt veritatis totam velit.</p>
                        </div>
                    </div>
                    <!-- Service Item End -->
                    
                    <!-- Service Item Start -->
                    <div class="col-md-4 col-sm-6 service--item">
                        <div class="service--icon">
                            <i class="fa fa-first-order"></i>
                        </div>
                        
                        <div class="service--content">
                            <h2>LOGO <strong>DESIGN</strong></h2>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non vel, sint nisi possimus sunt veritatis totam velit.</p>
                        </div>
                    </div>
                    <!-- Service Item End -->
                    
                    <!-- Service Item Start -->
                    <div class="col-md-4 col-sm-6 service--item">
                        <div class="service--icon">
                            <i class="fa fa-clone"></i>
                        </div>
                        
                        <div class="service--content">
                            <h2>PRINT <strong>DESIGN</strong></h2>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non vel, sint nisi possimus sunt veritatis totam velit.</p>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
            </div>
        </div>
        <!-- Services Area End -->


	<?php

	// Here I'm ending output buffering
	return ob_get_clean();

}
// the first parameter is the base - 'section1_base'
// I created this base in theme-options.php
add_shortcode('section1_base','consult_section1');
?>