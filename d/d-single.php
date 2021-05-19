<?php 
		//urlパラメータを取得
		$parameter = get_the_permalink();
		if (preg_match("/open_store_staffs/",str_replace("/","",$parameter))) {
		  ?>
<!DOCTYPE html>
<html>
	<head>
		<title>オープンストア株式会社</title>
		<?php get_header(); ?> 
		<style>
			.attachment-full{
				width:80%;
				height:80%;
			}
    	</style>
<!-- ロード画面用のスタイル -->
		<style>
			.load_img{
				margin: 30% 15%;
				text-align: center;
/*     			width: 10%; */
			}
			.breeding-rhombus-spinner {
				  height: 65px;
				  width: 65px;
				  position: relative;
				  transform: rotate(45deg);
				}

				.breeding-rhombus-spinner, .breeding-rhombus-spinner * {
				  box-sizing: border-box;
				}

				.breeding-rhombus-spinner .rhombus {
				  height: calc(65px / 7.5);
				  width: calc(65px / 7.5);
				  animation-duration: 2000ms;
				  top: calc(65px / 2.3077);
				  left: calc(65px / 2.3077);
				  background-color: white;
				  position: absolute;
				  animation-iteration-count: infinite;
				}

				.breeding-rhombus-spinner .rhombus:nth-child(2n+0) {
				   margin-right: 0;
				 }

				.breeding-rhombus-spinner .rhombus.child-1 {
				  animation-name: breeding-rhombus-spinner-animation-child-1;
				  animation-delay: calc(100ms * 1);
				}

				.breeding-rhombus-spinner .rhombus.child-2 {
				  animation-name: breeding-rhombus-spinner-animation-child-2;
				  animation-delay: calc(100ms * 2);
				}

				.breeding-rhombus-spinner .rhombus.child-3 {
				  animation-name: breeding-rhombus-spinner-animation-child-3;
				  animation-delay: calc(100ms * 3);
				}

				.breeding-rhombus-spinner .rhombus.child-4 {
				  animation-name: breeding-rhombus-spinner-animation-child-4;
				  animation-delay: calc(100ms * 4);
				}

				.breeding-rhombus-spinner .rhombus.child-5 {
				  animation-name: breeding-rhombus-spinner-animation-child-5;
				  animation-delay: calc(100ms * 5);
				}

				.breeding-rhombus-spinner .rhombus.child-6 {
				  animation-name: breeding-rhombus-spinner-animation-child-6;
				  animation-delay: calc(100ms * 6);
				}

				.breeding-rhombus-spinner .rhombus.child-7 {
				  animation-name: breeding-rhombus-spinner-animation-child-7;
				  animation-delay: calc(100ms * 7);
				}

				.breeding-rhombus-spinner .rhombus.child-8 {
				  animation-name: breeding-rhombus-spinner-animation-child-8;
				  animation-delay: calc(100ms * 8);
				}

				.breeding-rhombus-spinner .rhombus.big {
				  height: calc(65px / 3);
				  width: calc(65px / 3);
				  animation-duration: 2000ms;
				  top: calc(65px / 3);
				  left: calc(65px / 3);
				  background-color: white;
				  animation: breeding-rhombus-spinner-animation-child-big 2s infinite;
				  animation-delay: 0.5s;
				}


				@keyframes breeding-rhombus-spinner-animation-child-1 {
				  50% {
					transform: translate(-325%, -325%);
				  }
				}

				@keyframes breeding-rhombus-spinner-animation-child-2 {
				  50% {
					transform: translate(0, -325%);
				  }
				}

				@keyframes breeding-rhombus-spinner-animation-child-3 {
				  50% {
					transform: translate(325%, -325%);
				  }
				}

				@keyframes breeding-rhombus-spinner-animation-child-4 {
				  50% {
					transform: translate(325%, 0);
				  }
				}

				@keyframes breeding-rhombus-spinner-animation-child-5 {
				  50% {
					transform: translate(325%, 325%);
				  }
				}

				@keyframes breeding-rhombus-spinner-animation-child-6 {
				  50% {
					transform: translate(0, 325%);
				  }
				}

				@keyframes breeding-rhombus-spinner-animation-child-7 {
				  50% {
					transform: translate(-325%, 325%);
				  }
				}

				@keyframes breeding-rhombus-spinner-animation-child-8 {
				  50% {
					transform: translate(-325%, 0);
				  }
				}

				@keyframes breeding-rhombus-spinner-animation-child-big {
				  50% {
					transform: scale(0.5);
				  }
				}
    	</style>
		
		
		<script>
			$(window).on('load', function() {
				$.when(
					$(".load_img").delay(3000).fadeOut(800)
				).done(function() {
					$.when(
						$("body").animate({
      						'background-color' : '#FFFFFF'
    					}, 'slow')
					).done(function(){
						$.when(
							$(".wrapper").fadeIn(1500)
						).done(function(){
							$('.try_box').animate({
      						'background-color' : '#f1c40f'
    						}, 'slow');							
						})
						
					})
				})				
			});
		</script>

	</head>

	<body style="background-color:rgb(241, 196, 15);">
		<div class="load_img">
<!-- 			<div class="breeding-rhombus-spinner">
				<div class="rhombus child-1"></div>
				<div class="rhombus child-2"></div>
				<div class="rhombus child-3"></div>
				<div class="rhombus child-4"></div>
				<div class="rhombus child-5"></div>
				<div class="rhombus child-6"></div>
				<div class="rhombus child-7"></div>
				<div class="rhombus child-8"></div>
				<div class="rhombus big"></div>
			</div> -->
			<img src="<?php echo get_template_directory_uri(); ?>/img/load_img.gif"  style="width:70%;">
		</div>
		<div class="wrapper" style="display:none;">
			<header>
				<div class="header-color">
					<p></p>
				</div>
				<div class="header container ">
					<div class="header-left">
						<div class="header-logo">
							<a href="">PROFILE</a>
						</div>
					</div>

				</div>
			</header>
			<div class="profile_image" style="text-align:center;">
				<!-- アイキャッチ画像を表示 -->
				<?php if( has_post_thumbnail() ): ?>
              		<?php the_post_thumbnail( 'full' ); ?>
				<?php else: ?>
              		<img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="no-img"/ class="nonImage">
            	<?php endif; ?>
			</div>
			<div class="try_box">
				<div class="profile_titile"><?php the_title(); ?></div>
				<div class="profileText">
            		<?php the_content(); ?>
        		</div>
			</div>
			<div class="test">
			</div>
			<?php get_footer(); ?> 
		</div>
	</body>
</html>
<?php }else{ ?>
<?php 
			$cat = get_the_category();
			if($cat[0]->cat_name == 'WORK'){
?>
<!DOCTYPE html>
<html>
	<head>
		<title>株式会社 OPEN STORE</title>
		<?php get_header(); ?> 
	</head>
	<body>
		<?php get_template_part('menu'); ?>
	<div class="wrapper" style="display:block;">
		<div class="header-color">
			<p></p>
		</div>
		<div class="container clear">
			<div class="top">
				<div class="top-logo">
					<h3>WORKS</h3>
				</div>
				<div class="top-me">
					<p>- Past Recode -
						<br>
					</p>
				</div>
				<div class="backToTop" style="display:none;">
					TOP
				</div>
			</div>
		</div>
		<div class="b" style="background-image: url(<?php the_post_thumbnail_url(); ?>);" style="background-size:cover;">
        <div class="b2" style="background-image: linear-gradient(45deg, rgba(0, 0, 0, .2) 50%, rgba(0, 0, 0, .6) 50%);">
            <div class="re-flex" style="margin   : 0 4%; max-width: 100%;">
                <div class="re" style="width     : 100%; text-align: -webkit-right;">
                    <div class="re2" style="padding   : 5% 2%; width     : 55%; background: rgba(0, 0, 0, .6);">
                        <div class="re-title" style="width: 100%; margin-bottom: 0.1%; border-bottom: 2px solid #fff;">
                            <h3 style="text-align: center; color     : #fff;"><?php the_title(); ?></h3>
                        </div>
                        <table class="re-table" style="margin         : 10% 0; width          : 100%; border-collapse: collapse; text-align     : left;">
                            <tbody>
                                <tr class="tr">
                                    <th class="re-th" style="text-align: center; color     : #fff;"><?php
the_field("title1"); ?></th>
                                    <td class="re-td" style="text-align: center; color     : #fff;"><?php
the_field("me1"); ?></td>
                                </tr>
                                <tr class="tr">
                                    <th class="re-th" style="text-align: center; color     : #fff;"><?php
the_field("title2"); ?></th>
                                    <td class="re-td" style="text-align: center; color     : #fff;"><?php
the_field("me2"); ?></td>
                                </tr>
                            </tbody>
                        </table>
						<?php if( get_field('youtube_url') ){ ?>
                        <div class="re-wrap" style="position   : relative; width      : 100%; padding-top: 75%;">
							<?php echo $embed_code = wp_oembed_get( get_field('youtube_url') ); ?>
                        </div>
						<?php } else { ?>
						<?php the_post_thumbnail(); ?>
						<?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
		<div style="margin:0 5%;">
		<div class="blog_text" style="text-align:center;">
			<h2 class="work_title"><?php the_title(); ?></h2>
			<style>
				.attachment-full.size-full.wp-post-image{
					width:60%;
					height:60%;
				}
				img{
					width:100%;
					height:100%;
				}
			</style>
			<div style="max-width:90%; margin:0 5%;background-color:#EEEEEE;">
				<?php if( has_post_thumbnail() ): ?>
					<?php the_post_thumbnail('full'); ?>
				<?php else: ?>
					<img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="no-img"/ class="nonImage">
				<?php endif; ?>
			</div>
			<div style="
			    width: 90%;
			    margin: 0 5% 10% 5%;
					text-decoration: none;
			"><?php the_content(); ?></div>
		</div>
		</div>
		<?php get_footer(); ?> 
		</div>
	</body>
</html>
<?php }
elseif($cat[0]->cat_name == 'ブログ'){
?>
	
<!DOCTYPE html>
<html>
	<head>
		<title　alt="オープンストア OPEN STORE">オープンストア株式会社</title>
		<?php get_header(); ?> 
	<style>
		.wp-block-image img{
			height: auto;
		}
	</style>
	</head>
	<body>
		<?php get_template_part('menu'); ?>
	<div class="wrapper" style="display:block;">
		<div class="header-color">
			<p></p>
		</div>
		<div class="container clear">
			<div class="top">
				<div class="top-logo">
					<h3>BLOG</h3>
				</div>
				<div class="top-me">
				</div>
				<div class="backToTop" style="display:none;">
					TOP
				</div>
			</div>
		</div>
		<div class="brog" style="max-width          : 100%;padding         : 5% 0;background-color: rgb(232, 238, 235);">
        <div class="brog1" style="margin: 0 8%;">
            <div class="brog-title"
                style="background-image: url(<?php the_post_thumbnail_url(); ?>); padding         : 10%;background-size : cover;text-align      : center;">
                <h3 style="margin        : 0 17%;
                border-bottom : 1px solid #000;
                padding-bottom: 1%;"><?php the_title(); ?></h3>
            </div>
            <div class="brog-side"
                style="position: fixed;top: 50%;left: -66px;-webkit-transform: translateY(-50%) rotate(90deg);transform  : translateY(-50%) rotate(90deg);font-style : italic;line-height: 1.1;color   : #808085;letter-spacing  : .1em;-webkit-transition   : opacity .3s ease 0s;transition : opacity .3s ease 0s;">
                <p>©︎open store corporation </p>
            </div>
            <div class="brog-me" style="max-width   : 84%;margin : 7rem auto 0;color  : #171717;font-size   : 15px;">
                <p><?php the_content(); ?></p>
            </div>
        </div>
    </div>
<!-- 		<div style="margin:0 5%;">
		<div class="blog_text" style="text-align:center;">
			<h2 class="work_title"><?php the_title(); ?></h2>
			<span class="blog_article_date"><?php the_time('Y.m.d') ?></span>
			<style>
				.attachment-full.size-full.wp-post-image{
					width:60%;
					height:60%;
				}
				img{
					width:100%;
					height:100%;
				}
			</style>
			<div style="max-width:90%; margin:0 5%;background-color:#EEEEEE;">
				<?php if( has_post_thumbnail() ): ?>
					<?php the_post_thumbnail('full'); ?>
				<?php else: ?>
					<img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="no-img"/ class="nonImage">
				<?php endif; ?>
			</div>
			<div style="
			    width: 70%;
			    margin: 0 15% 10% 15%;
					text-decoration: none;
					    text-align: left;
			"><?php the_content(); ?></div>
		</div>
		</div> -->
		<?php get_footer(); ?> 
		</div>
	</body>
</html>
<?php }

?>
<?php } ?>

	