<?php


function homeblog_integratewithvc(){


vc_map(array(


'name' => __("Home Blog Section", "subhasishlivetheme"),
'description' => 'This is first blog section',
'base' => 'homeblog_base',
'category' => 'Home Blog',
'icon' => get_template_directory_uri() . '/img/hire-me-pic.png',
'params' => array(
				array(
				  "type" => "textfield", // type of the field
				  "holder" => "div",
				  "class" => "",
				  "heading" => __( "Heading of Home Blog Section", "subhasishlivetheme" ),
				  "param_name" => "blog_heading_home", // it will be used as id
				  "value" => __( "Give heading of Home Blogs Section", "subhasishlivetheme" ),
				  "description" => __( "Description for heading of Home Blogs Section.", "subhasishlivetheme" )
				 ),
				array(
				  "type" => "textfield", // type of the field
				  "holder" => "div",
				  "class" => "",
				  "heading" => __( "Select number of blogs to be shown in Home page", "subhasishlivetheme" ),
				  "param_name" => "blog_no_home", // it will be used as id
				  "value" => __( "Give no of blogs for Home page", "subhasishlivetheme" ),
				  "description" => __( "Description for no of Blogs in Home page.", "subhasishlivetheme" )
				 ),
),

));

}
add_action('vc_before_init','homeblog_integratewithvc');

?>