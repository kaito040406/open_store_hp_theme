<div class="single-post mb-20">
    <div class="post-image">
        <a href="blog-single.html"><?php the_post_thumbnail(); ?></a>
    </div>
    <div class="post-desc">
        <div class="post-title">
            <h5 class="margin-0"><a href="blog-single.html"><?php echo the_title(); ?></a></h5>
        </div>
        <ul>
            <li><i class="fa fa-calendar"></i><?php the_time('Y年m月d日'); ?></li>
        </ul>
    </div>
</div>