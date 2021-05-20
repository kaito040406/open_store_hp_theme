<?php 
    //実績のデータを取得 長谷川 start
    global $post;
    $args_works_ja = array(
        'post_type' => 'works', // 実績を指定
        'posts_per_page' => 6, // 表示する記事数(3件)
    );
    // クエリ発行
    $works_posts = get_posts($args_works_ja);

    // headerとfooterに言語パラメータを渡す
    $args = [
        'works' => $works_posts,
    ];

    get_header(); 

    get_template_part("templates/index_body",null,$args);

    get_footer(); 
?>