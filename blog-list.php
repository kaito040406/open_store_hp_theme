<?php
/*
Template Name: blog-list.php
*/
?>


<?php 

// 健在のパスを取得
$uri = $_SERVER['REQUEST_URI'];

if(preg_match('/blog/',$uri)){
    $content_args = [
        'title' => 'オープンストアブログ',
        'post_type' => 'post',
    ];
}elseif(preg_match('/news/',$uri)){
    $content_args = [
        'title' => 'お知らせ',
        'post_type' => 'news',
    ];
}elseif(preg_match('/works/',$uri)){
    $content_args = [
        'title' => '実績',
        'post_type' => 'works',
    ];
}

$args = array(
    'post_type' => $content_args['post_type'], //urlに基づき判別
    'posts_per_page' => 10000, // 表示する記事数(10000件)
);
// クエリ発行
$posts = get_posts($args);

$args_neary = array(
    'post_type' => $content_args['post_type'], //urlに基づき判別
    'posts_per_page' => 5, // 表示する記事数(5件)
    'order'=>'DESC',
    'orderby'=>'post_date',
);
//クエリ発行
$posts_neary = get_posts($args_neary);
?>


<?php get_header(); ?>

		<!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Section Start -->
            <div class="rs-breadcrumbs bg-8">
                <div class="container">
                    <div class="content-part text-center pt-160 pb-160">
                        <h1 class="breadcrumbs-title white-color mb-0"><?php echo $content_args['title']; ?></h1>
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
                                    <?php foreach ($posts as $post) : setup_postdata($post); ?>
                                    <?php get_template_part("templates/roop/archive_nearyroop"); ?>
                                    <?php endforeach; ?>
                                    <!-- ここまでループ -->
                                </div>

                                <div class="sidebar-categories sidebar-grid shadow">
                                    <div class="sidebar-title">
                                       <h3 class="title semi-bold mb-20">コンテンツ</h3>
                                    </div>
                                    <ul>                                    
                                        <li><a href="/about">会社概要</a></li> 
                                        <li><a href="/service">サービス</a></li> 
                                        <li><a href="/news">NEWS</a></li> 
                                        <li><a href="/works">制作実績</a></li>
                                        <li><a href="/contact">お問い合わせ</a></li>
                                    </ul>
                                </div>
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