<?php 
    //実績のデータを取得 長谷川 start
    global $post;
    $args_works = array(
        'post_type' => 'works', // 実績を指定
        'posts_per_page' => 6, // 表示する記事数(6件)
    );
    // クエリ発行
    $works_posts = get_posts($args_works);

    //ブログ情報を取得
    $args_blogs = array(
        'post_type' => 'post', // ブログを指定
        'posts_per_page' => 6, // 表示する記事数(6件)
        'category_name' => 'blog', //カテゴリースラッグがblogのみ取得
    );
    // クエリ発行
    $blog_posts = get_posts($args_blogs);

    $args_news = array(
        'post_type' => 'news', // ブログを指定
        'posts_per_page' => 6, // 表示する記事数(6件)
    );
    //　クエリ発行
    $news_posts = get_posts($args_news);

    // headerとfooterに言語パラメータを渡す
    $args = [
        'blog' => $blog_posts,
        'works' => $works_posts,
        'news' => $news_posts,
    ];

    get_header(); 

    get_template_part("templates/index_body",null,$args);

    get_footer(); 
?>
