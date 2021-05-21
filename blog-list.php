<?php
/*
Template Name: blog-list.php
*/
?>


<?php 

// 健在のパスを取得
$uri = $_SERVER['REQUEST_URI'];

// 投稿タイプの判定変数
// 0ならカテゴリーを絞りたい、1なら絞らない
$flg = 0;

if(preg_match('/blog/',$uri)){
    $content_args = [
        'title' => 'オープンストアブログ',
        'post_type' => 'post',
        'category_type' => 'blog',
    ];
}elseif(preg_match('/news/',$uri)){
    $content_args = [
        'title' => 'お知らせ',
        'post_type' => 'news',
    ];
    $flg = 1;
}elseif(preg_match('/works/',$uri)){
    $content_args = [
        'title' => '実績',
        'post_type' => 'works',
    ];
    $flg = 1;
}

if($flg = 0){
    $args = array(
        'post_type' => $content_args['post_type'], //urlに基づき判別
        'posts_per_page' => 10000, // 表示する記事数(10000件)
        'category_name' => $content_args['category_type'],
    );
}else{
    $args = array(
        'post_type' => $content_args['post_type'], //urlに基づき判別
        'posts_per_page' => 10000, // 表示する記事数(10000件)
    );
}
// クエリ発行
$posts = get_posts($args);

$args = [
    'post_type' => $content_args['post_type'],
];
  

?>


<?php get_header(); ?>

		<!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Section Start -->
            <div class="rs-breadcrumbs bg-8">
                <div class="container">
                    <div class="content-part text-center pt-160 pb-160">
                        <h1 class="breadcrumbs-title title-color2 mb-0"><?php echo $content_args['title']; ?></h1>
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs Section End -->

            <!-- Blog Section  Start -->
            <div class="rs-blog inner pt-100 pb-100 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                        <!-- ここからループ -->
                        <?php foreach ($posts as $post) : setup_postdata($post); ?>
                        <?php get_template_part("templates/roop/archive_mainroop"); ?>
                        <?php endforeach; ?>
                        <!-- ここまでループ -->
                        </div>

                        <div class="col-lg-4 md-mb-50 pl-35 lg-pl-15 md-order-first">
                            <div id="sticky-sidebar" class="blog-sidebar">
                                <?php //検索機能は後ほど実装 ?>
                                <!-- <div class="sidebar-search sidebar-grid shadow mb-50">
                                    <form class="search-bar">
                                        <input type="text" placeholder="Search...">
                                        <span>
                                          <button type="submit"><i class="flaticon-search"></i></button> 
                                        </span>
                                    </form>
                                </div> -->

                                <div class="sidebar-popular-post sidebar-grid shadow mb-50">
                                    <div class="sidebar-title">
                                       <h3 class="title semi-bold mb-20">最近の投稿</h3>
                                    </div>
                                    <!-- ここからループ -->
                                    <?php get_template_part("templates/parts/archive_nearyroop", null, $args); ?>
                                    <!-- ここまでループ -->
                                </div>

                                <?php get_template_part("templates/parts/side_link"); ?>
                            </div>
                        </div>
                    </div>
                    <div id="sticky-end"></div>
                </div>
            </div>
            <!-- Blog Section  End -->
        </div> 
        <!-- Main content End -->

        <!-- Footer Start -->
        <?php get_footer(); ?>