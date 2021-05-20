<?php 

$args = [
  'post_type' => get_post_type( $post ),
];

get_header();


get_template_part("templates/blog-single",null,$args);

get_footer(); 
?>