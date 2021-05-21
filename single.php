<?php 

		//urlパラメータを取得
  $parameter = get_the_permalink();

  $args = [
    'post_type' => get_post_type( $post ),
  ];

  $cats = get_the_category();
  echo $cats;

  get_header();
  
  if(preg_match("/open_store_staffs/",str_replace("/","",$parameter))){
    get_template_part("templates/staff_page",null,$args);
  }else{
    get_template_part("templates/blog-single",null,$args);
  }

  get_footer(); 
?>