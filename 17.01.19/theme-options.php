<?php

// function shortcode($attributes, $content){


// 	extract(shortcode_atts(array(

// 		'color' => 'black',
// 		'fontsize' => '18px'

// 	),$attributes));

// 	return "<p style='color:".$color."; font-size:".$fontsize."'>".$content."</p>";

// }

// add_shortcode('hello','shortcode');
function consult_integratewithvc(){

	vc_map(array(
		'name' => __("First Section", "subhasishlivetheme"),
		'description' => 'This is first Addon',
		'base' => 'section1_base', // this base is to be used in theme-element.php
		'category' => 'Consult', // Under Consult tab in VC Map
		'icon' => get_template_directory_uri() . '/img/hire-me-pic.png',
		'params' => array(
			 array(
				  "type" => "textfield", // type of the field
				  "holder" => "div",
				  "class" => "",
				  "heading" => __( "WEB DESIGN HEADING", "subhasishlivetheme" ),
				  "param_name" => "web_design_heading", // it will be used as id
				  "value" => __( "Give your Web Design Heading here", "subhasishlivetheme" ),
				  "description" => __( "Description for foo param.", "subhasishlivetheme" )
				 ),
			 array(
			  "type" => "textfield",
			  "holder" => "div",
			  "class" => "",
			  "heading" => __( "Content Web Design", "subhasishlivetheme" ),
			  "param_name" => "content_webdesign", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
			  "value" => __( "<p>I am test text block. Click edit button to change this text.</p>", "subhasishlivetheme" ),
			  "description" => __( "Enter your content.", "subhasishlivetheme" )
			 ),
			 array(
			  "type" => "colorpicker",
			  "holder" => "div",
			  "class" => "",
			  "heading" => __( "Web Design Content color picker", "subhasishlivetheme" ),
			  "param_name" => "colorpicker_section", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
			  // "value" => __( "<p>I am test text block. Click edit button to change this text.</p>", "subhasishlivetheme" ),
			  "description" => __( "Enter your color.", "subhasishlivetheme" )
			 ),
			 array(
			  "type" => "attach_image",
			  "holder" => "div",
			  "class" => "",
			  "heading" => __( "Select background image of Section 1", "subhasishlivetheme" ),
			  "param_name" => "bg_section1", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
			  // "value" => __( "<p>I am test text block. Click edit button to change this text.</p>", "subhasishlivetheme" ),
			  "description" => __( "Select your image", "subhasishlivetheme" )
			 ),
			 array(
			  "type" => "iconpicker",
			  "holder" => "div",
			  "class" => "",
			  "heading" => __( "Select icon for Web Design", "subhasishlivetheme" ),
			  "param_name" => "icon_webdesign", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
			  // "value" => __( "<p>I am test text block. Click edit button to change this text.</p>", "subhasishlivetheme" ),
			  "description" => __( "Select your image", "subhasishlivetheme" )
			 ),
		),
	));

}
add_action('vc_before_init','consult_integratewithvc');

?>