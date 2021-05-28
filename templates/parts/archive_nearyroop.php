<?php 
// 健在のパスを取得
$uri = $_SERVER['REQUEST_URI'];

if(preg_match('/blog/',$uri)){
    $args_neary = array(
        'post_type' => $args['post_type'], //urlに基づき判別
        'posts_per_page' => 5, // 表示する記事数(5件)
        'order'=>'DESC',
        'orderby'=>'post_date',
        'category_name' => 'blog', //カテゴリースラッグがblogのみ取得
    );
}else{
    $args_neary = array(
        'post_type' => $args['post_type'], //urlに基づき判別
        'posts_per_page' => 5, // 表示する記事数(5件)
        'order'=>'DESC',
        'orderby'=>'post_date',
        'category_name' => 'blog', //カテゴリースラッグがblogのみ取得
    );
}
//クエリ発行
$posts_neary = get_posts($args_neary);
?>
<?php foreach ($posts_neary as $post) : setup_postdata($post); ?>
    <div class="single-post mb-20">
        <div class="post-image">
            <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        </div>
        <div class="post-desc">
            <div class="post-title">
                <h5 class="margin-0"><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h5>
            </div>
            <ul>
                <li><i class="fa fa-calendar"></i><?php the_time('Y年m月d日'); ?></li>
            </ul>
        </div>
    </div>
<?php endforeach; ?>