<div class="blog-wrap shadow mb-70 xs-mb-50">
    <div class="image-part">
        <a href="<?php echo get_permalink();?>"><?php the_post_thumbnail(); ?></a>
    </div>
    <div class="content-part">
        <h3 class="title mb-10"><a href="<?php echo get_permalink();?>"><?php echo the_title(); ?></a></h3>
        <ul class="blog-meta mb-22">
            <li><i class="fa fa-calendar-check-o"></i> <?php the_time('Y年m月d日'); ?></li>
            <!-- <li><i class="fa fa-user-o"></i> admin</li> -->
            <li><i class="fa fa-book"></i> <a href="#"><?php echo the_category(); ?></a></li>
        </ul>
        <p class="desc mb-20"><?php echo the_excerpt(); ?></p>
        <div class="btn-part">
            <a class="readon-arrow" href="<?php echo get_permalink();?>">Continue Reading</a>
        </div>
    </div>
</div>