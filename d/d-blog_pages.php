<?php
/*
Template Name: blog_pages.php
*/
?>

<!DOCTYPE html>
<html>

<head>
	<?php get_header(); ?> 
</head>
<body>
	<?php get_template_part('menu'); ?>
	<div class="wrapper" style="display:block; margin:0 5%;">
		<div class="header-color">
			<p></p>
		</div>
		<header>
		</header>
		<div class="container clear">
			<div class="top">
				<div class="top-logo">
					<h3><span>BLOG</span></h3>
					   <p>ブログ</p>
				</div>
				<div class="top-me">
					<p>
						<br>
					</p>
				</div>
				<!-- <div class="sc ">
					<p>scroll<span>→</span></p>
				</div> -->
				<div class="backToTop" style="display:none;">
					TOP
				</div>
			</div>
			<div>
				
				<?php
					//だれかここ改造してほしいです
					query_posts( 'category_name=blog&posts_per_page=5000' );
				?>
					<?php if(have_posts()): while(have_posts()): the_post(); ?>
					<a href="<?php the_permalink(); ?>" style="text-decoration: none; color:black;">
						<div class="manege-me">
							<div class="news-img">
								<?php if( has_post_thumbnail() ): ?>
									<?php the_post_thumbnail('full'); ?>
								<?php else: ?>
									<img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="no-img"/ class="nonImage">
								<?php endif; ?>
							</div>
							<div class="news-me">
								<h3>
									<?php the_title(); ?>
								</h3>
								<p>
									<?php the_excerpt(); ?>
								</p>
							</div>
						</div>
					</a>
					<?php endwhile; endif; ?>
			</div>
		</div>
	<?php get_footer(); ?> 
	</div>

</body>