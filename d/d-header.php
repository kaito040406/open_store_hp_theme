    <title>オープンストア株式会社</title>
    <link rel="SHORTCUT ICON" href="<?php echo get_template_directory_uri(); ?>/img/favicon/OPEN-STORE-logo.ico" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-191498151-1">
	</script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-191498151-1');
	</script>

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" type="text/css" />
    <?php
    wp_deregister_script('jquery');
    wp_head();
    ?>
    <!-- jquery読み込み -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/jquery-color.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    

	<style>
		.btn-trigger span {
			position: absolute;
			left: 0;
			width: 100%;
			height: 4px;
			background-color: black;
			border-radius: 4px;
		}
		.btn-trigger, .btn-trigger span {
			display: inline-block;
			transition: all .5s;
			box-sizing: border-box;
		}
		.btn-trigger span:nth-of-type(1) {
			top: 0;
		}
		.btn-trigger span:nth-of-type(2) {
			top: 20px;
		}
		.btn-trigger span:nth-of-type(3) {
			bottom: 0;
		}

		#h_button.active span:nth-of-type(1) {
			-webkit-transform: translateY(20px) rotate(-315deg);
			transform: translateY(20px) rotate(-315deg);
		}
		#h_button.active span:nth-of-type(2) {
			opacity: 0;
		}
		#h_button.active span:nth-of-type(3) {
			-webkit-transform: translateY(-20px) rotate(315deg);
			transform: translateY(-20px) rotate(315deg);
		}
	</style>
	<script type="text/javascript">
		$(function(){
			$('.btn-trigger').on('click', function() {
				$(this).toggleClass('active');
				if($(".wrapper").css('display') == 'block'){
					$.when(
						$(".wrapper").fadeOut(100)
					).done(function() {
						$.when(
							$("body").animate({
								'background-color' : '#FFFFFF'
							}, 'fast')
						).done(function(){
							$(".nav_menue").fadeIn(100)
						});
					});
				}else{
					$.when(
						$(".nav_menue").fadeOut(100)
					).done(function() {
						$.when(
							$("body").animate({
								'background-color' : '#FFFFFF'
							}, 'fast')
						).done(function(){
							$(".wrapper").fadeIn(100)
						});
					});		
				}
				return false;
			});
		});
	</script>


	<script type="text/javascript">

		jQuery(function() {

			//トップに戻るボタン表示 start
			jQuery(window).scroll(function(){
				var obj_t_pos = window.innerHeight/2;
				var scr_count = jQuery(document).scrollTop();
				if(scr_count < obj_t_pos){
					if(jQuery('.backToTop').css('display') == 'block'){
						jQuery('.backToTop').css('display', 'none');
					}
				}else{
					if(jQuery('.backToTop').css('display') == 'none'){
						jQuery('.backToTop').css('display', 'block');
					}
				}
			});
			//トップに戻るボタン表示 end 

			//クリックしてトップに戻る start
			jQuery('.backToTop').click(function() {
				jQuery(window).scrollTop(0);
				// $('body').animate({scrollTop: 0}, 2000, 'swing');
			});
			//クリックしてトップに戻る end

			//タップイベント
			jQuery('.backToTop').on('touchend', function(){
				jQuery(window).scrollTop(0);
				// $('body').animate({scrollTop: 0}, 2000, 'swing');
			});

		});
    </script>