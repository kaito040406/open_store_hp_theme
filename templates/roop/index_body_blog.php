<div class="blog-wrap">
  <div class="img-part">
    <?php the_post_thumbnail(); ?>
  </div>
  <div class="content-part">
    <!-- ここにはカテゴリーを入れます start -->
      <a class="categories" href="blog-single.html"></a>
    <!-- ここはカテゴリーを入れます end -->
      <h3 class="title"><a href="blog-single.html"><?php echo the_title(); ?></a></h3>
      <p class="desc"><?php echo the_excerpt(); ?></p>
      <div class="blog-meta">
          <div class="user-data">
              <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/avatar/1.png" alt=""> -->
              <!-- <span>admin</span> -->
          </div>
          <div class="date">
              <i class="fa fa-clock-o"></i> <?php the_time('Y年m月d日'); ?>
          </div>
      </div>
  </div>
</div>