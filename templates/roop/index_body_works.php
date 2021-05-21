<div class="project-item">
  <div class="project-img">
      <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
  </div>
  <div class="project-inner">
      <h4 class="title"><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h4>
      <?php //ここはなんのサービスに該当するかを書く。あとでよい ?>
      <span class="category"><a href="<?php echo get_permalink(); ?>">詳細</a></span>
  </div>
</div>