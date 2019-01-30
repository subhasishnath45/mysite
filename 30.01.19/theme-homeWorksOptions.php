<?php 

function homeWork_integratewithvc(){

	vc_map(array(


		'name' => __("Home Works Section", "subhasishlivetheme"),
		'description' => 'This is the Work section of Home page',
		'base' => 'homework_base',
		'category' => 'HomeWorks',
		'icon' => get_template_directory_uri() . '/img/hire-me-pic.png',
		'params' => array(
				array(
				  "type" => "textfield", // type of the field
				  "holder" => "div",
				  "class" => "",
				  "heading" => __( "Heading of Home Works Section", "subhasishlivetheme" ),
				  "param_name" => "works_heading_home", // it will be used as id
				  "value" => __( "Give heading of Home Works Section", "subhasishlivetheme" ),
				  "description" => __( "Description for heading of Home Works Section.", "subhasishlivetheme" )
				 ),
		)


	));

}
add_action('vc_before_init','homeWork_integratewithvc');


?>