<!DOCTYPE html>
<html>

<head>
	<?php get_header(); ?> 
	<script>
		window.addEventListener("scroll", function() {
        let scroll = window.pageYOffset;
        if (scroll > 2300) {
				document.body.style.backgroundColor = '#002036';
				document.body.style.color = 'white';
				var trgdoc = document.getElementsByClassName('main1-bo-inner')
				 for (let i = 0; i < trgdoc.length; i++) {
					 trgdoc[i].style.color = 'white'
// 					 console.log(trgdoc[i].style.color)
				 }
            }
            else if (scroll > 2000) {
               document.body.style.backgroundColor = '#fff';
					document.body.style.color = 'black';
					var trgdoc = document.getElementsByClassName('main1-bo-inner')
				 	for (let i = 0; i < trgdoc.length; i++) {
					 	trgdoc[i].style.color = 'black'
				 	}
            }
    		});
	</script>
	<style>
		body{
			transition:1.0s;
		}
	</style>
</head>
<body>
	<?php get_template_part('menu'); ?>
	<div class="wrapper" style="display:block; margin:0 5%;">
		<div class="header-color">
			<p></p>
		</div>
		<header>
			<div class="header container ">
				<div class="header-left">
					<div class="header-logo">
						<a href="#"><img src="" alt=""></a>
					</div>
				</div>
				<div class="header-right">
					<div class="header-contact">
					</div>
				</div>
			</div>
		</header>
		<div class="container clear">
			<div class="top">
				<div class="top-logo">
					<h3>あなたの価値を、<br><span>すべての場所に</span></h3>
				</div>
				<div class="top-me">
					<p>- Branding your value everywhere -
						<br>
					</p>
				</div>
				<div class="backToTop" style="display:none;">
					<p>
					<	
					</p>  
				</div>
			</div>
		</div>
		<div class="service clear scrollanime slide-left">
			<div class="service1 ">
				<p>SERVICE</p>
			</div>
			<div class="con-1 ">
				<div class="main container ">
					<div class="main1">
								<a  href="service/?id=1">
						<div class="main1-me scrollanime slide-left ">
							<div class="main1-to">
								<p>WEBコンサルティング</p>
								<a href="service/?id=1">WEB CONSULTING</a>
							</div>
							<div class="main1-bo">
										<a href="service/?id=1" style="text-decoration: none; color:black;" class="main1-bo-inner">
								<h3>「WEBサービス」の成功は戦略で決まる</h3>
								<p>
								綿密なヒアリングをもとに、WEBサービスの<br>問題発見や解決策の提案、戦略立案などを中心に、<br>
								お客様が最適なWEBサービスを活用できるよう<br>サポートします。
							  </p>
										<p style="text-align: right">read more</p>
									</a> 
									</div>
						</div>
								</a>
					</div>
					<div class="main1">
					<div class="main1-me scrollanime slide-left">
							<div class="main1-to">
											<a href="service/?id=2"><p>WEBサービス制作/開発</p></a>
								<a href="service/?id=2">WEB SERVICE PRODUCTION</a>
							</div>
							<div class="main1-bo">
										<a href="service/?id=2"  style="text-decoration: none; color:black;" class="main1-bo-inner">
								<h3>あくまでもユーザーのためのもの。</h3>
								<p>
								お客様の「伝えたいコト」「やりたいコト」と<br>
								ユーザーの「求めているコト」をWEBサービスを<br>
								用いて様々なカタチで実現します。
							  </p>
										<p style="text-align: right">read more</p>
										</a>
							</div>
						</div>
					</div>
					<div class="main1">
					<div class="main1-me scrollanime slide-left">
							<div class="main1-to">
											<a href="service/?id=3"><p>ECサイト構築/運営</p></a>
								<a href="service/?id=3">EC SITE CONSTRUCTION/OPERATION</a>
							</div>
							<div class="main1-bo">
											<a href="service/?id=3"  style="text-decoration: none; color:black;" class="main1-bo-inner">
								<h3>あなたのお店を、すべての場所に</h3>
								<p>
									お客様の商品やオリジナルブランドを<br>独自のオンラインショップを通じて<br>
									誰にでもどこにでもお届けすることができます。
								</p>
											<p style="text-align: right">read more</p>
											</a>
							</div>
						</div>
					</div>
				</div>
				<div class="main1-1 container">
					<div class="main1">
					<div class="main1-me scrollanime slide-left">
							<div class="main1-to">

											<a href="service/?id=4"><p>WEBマーケティング/運用</p></a>
								<a href="service/?id=4">WEB MARKETING</a>
							</div>
							<div class="main1-bo">
										<a href="service/?id=4"  style="text-decoration: none; color:black;" class="main1-bo-inner">
								<h3>「だれに」「どこで」「どう伝えるか」</h3>
								<p>
									デジタル広告の重要性が非常に高まっている今、<br>
									インターネット上でユーザーを集める為の<br>
									仕組みづくりを提供します。
								</p>
											<p style="text-align: right">read more</p>
										</a>
							</div>
						</div>
					</div>
					<div class="main1">
					<div class="main1-me scrollanime slide-left">
							<div class="main1-to">
											<a href="service/?id=5"><p>クリエイティブ制作</p></a>
								<a href="service/?id=5">CREATIVE</a>
							</div>
							<div class="main1-bo">
											<a href="service/?id=5" style="text-decoration: none; color:black;" class="main1-bo-inner">
								<h3>創造がビジネスを加速させる</h3>
								<p>
									ユーザーのココロと行動を変化させ,<br>お客様のブランドが
									人々の記憶に深く刻まれるような<br>
									"伝わる"クリエイティブを制作します。
								</p>
											<p style="text-align: right">read more</p>
										</a>
							</div>
						</div>
					</div>
					<div class="main1">
					<div class="main1-me scrollanime slide-left">
							<div class="main1-to">

											<a href="service/?id=6"><p>システム開発</p></a>
								<a href="service/?id=6">SYSTEM DEVELOPMENT</a>
							</div>
							<div class="main1-bo">
											<a href="service/?id=6"  style="text-decoration: none; color:black;" class="main1-bo-inner">
								<h3>「効率」から「創造」へ</h3>
								<p>
									顧客管理、営業管理システムといった<br>
									ITの導入により業務を効率化し、新たな<br>
									ビジネスチャンスを創造します。
								</p>
											<p style="text-align: right">read more</p>
										</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="creative scrollanime slide-left">
			<div class="main2-to">
				<p class="scrollanime slide-left">CREATIVE LINE UP</p>
				<h3 class="scrollanime slide-left">ビジネスの課題を解決しています。</h3>
			</div>

			<div class="main2 container">
				<div class="main2-bo">
					<div class="main2-bo-item scrollanime slide-left">
						<p>新しくWEBサービスを
							<br>立ち上げたい
						</p>
					</div>
					<div class="main2-bo-item scrollanime slide-left">
						<p>WEBサービスを効果的に
							<br>運用したい
						</p>
					</div>
					<div class="main2-bo-item scrollanime slide-left">
						<p>新規見込顧客
							<br>問い合わせを獲得したい
						</p>
					</div>
				</div>
<!-- 				<div class="main2-bo">
					<div class="main2-bo-item scrollanime slide-left">
						<p>新しくWEBサービスを
							<br>立ち上げたい
						</p>
					</div>
					<div class="main2-bo-item scrollanime slide-left">
						<p>WEBサービスを効果的に
							<br>運用したい
						</p>
					</div>
					<div class="main2-bo-item scrollanime slide-left">
						<p>新規見込顧客
							<br>問い合わせを獲得したい
						</p>
					</div>
				</div> -->
			</div>


		</div>
		<div class="workflow clear">
			<div class="workflowx">
				<div class="con3 clear scrollanime slide-left">
					<div class="work-title ">
						<p> WORK FLOW</p>
					</div>
					<div class="workflow1 container ">
						<div class="workflow1-me scrollanime slide-left">
							<p>様々なビジネス課題をWEBサイトで解決してきた私たちが
								<br>WEBサイトの活用方法をご提案します。
							</p>
						</div>
						<div class="workflow1-item">
							<div class="workflow1-item1 scrollanime slide-left">
								<div class="workimg">
									<img src="<?php echo get_template_directory_uri(); ?>/img/1.png" alt="">
								</div>
								<p>STEP 01
									<br>お打ち合わせ
								</p>
							</div>
							<div class="yaji scrollanime downup">→</div>
							<div class="workflow1-item1 scrollanime slide-left">
								<div class="x">
									<div class="workimg">
										<img src="<?php echo get_template_directory_uri(); ?>/img/2.png" alt="">
									</div>
									<p>STEP 02
										<br>提案書 見積り
									</p>
								</div>
							</div>
							<div class="yaji scrollanime downup">→</div>
							<div class="workflow1-item1 scrollanime slide-left">
								<div class="x2">
									<div class="workimg">
										<img src="<?php echo get_template_directory_uri(); ?>/img/3.png" alt="">
									</div>
									<p>STEP 03
										<br>ご契約
									</p>
								</div>
							</div>
						</div>
						<div class="yaji2 scrollanime downup">↙</div>
						<div class="text">
							<div class="workflow2-item">
								<div class="workflow1-item1 scrollanime slide-left">
									<div class="workimg">
										<img src="<?php echo get_template_directory_uri(); ?>/img/4.png" alt="">
									</div>
									<p>STEP 04
										<br>デザイン制作
									</p>
								</div>
								<div class="yaji scrollanime downup">→</div>
								<div class="workflow1-item1 scrollanime slide-left">
									<div class="x">
										<div class="workimg">
											<img src="<?php echo get_template_directory_uri(); ?>/img/5.png" alt="">
										</div>
										<p>STEP 05
											<br>サイト構築
										</p>
									</div>
								</div>
								<div class="yaji scrollanime downup">→</div>
								<div class="workflow1-item1 scrollanime slide-left">
									<div class="x2">
										<div class="workimg">
											<img src="<?php echo get_template_directory_uri(); ?>/img/6.png" alt="">
										</div>
										<p>STEP 06
											<br>完成 運用
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<!-- 		<div class="pastrecords clear scrollanime slide-left">

			<div class="past-title scrollanime slide-left">
				<p>PAST RECORD</p>
			</div>
			<div class="container">
				<div class="past">
					<div class="past-item">
						<?php query_posts( 'category_name=PAST_RECORD&posts_per_page=3' ); ?>
							<?php if(have_posts()): while(have_posts()): the_post(); ?>
								<div class="past-main scrollanime slide-left">
									<div class="past-img">
										<?php if( has_post_thumbnail() ): ?>
											<?php the_post_thumbnail('full'); ?>
										<?php endif; ?>
									</div>
									<div class="past-me">
										<p>
											<?php the_excerpt(); ?>
										</p>
									</div>
									<div class="past-buttom">
										<div class="past-bu">
											<a href="#">detail</a>
										</div>
									</div>
								</div>
							<?php endwhile; endif; ?>
					</div>
				</div>

			</div>
		</div> -->
		<div class="manage">
			<div class="con3 scrollanime slide-left">
				<div class="manage-top">
					<p>NEWS</p>
				</div>
				<div class="container">
					<?php query_posts( 'category_name=NEWS&posts_per_page=3' ); ?>
						<?php if(have_posts()): while(have_posts()): the_post(); ?>
							<a href="<?php echo get_permalink(); ?>" style="text-decoration:none; color:white;">
								<div class="manege-me scrollanime slide-left">
									<div class="news-img">
										<?php if( has_post_thumbnail() ): ?>
											<?php the_post_thumbnail('full'); ?>
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
		</div>
		<div class="pastrecords clear scrollanime slide-left">
			<div class="past-title scrollanime slide-left">
				<p>WORK</p>
			</div>
			<div class="container">
				<div class="past">
						<?php query_posts( 'category_name=WORK&posts_per_page=5000' ); ?>
							<?php if(have_posts()): while(have_posts()): the_post(); ?>
							<div class="past-item">
								<a href="<?php echo get_permalink(); ?>" >
									<div class="past-main scrollanime slide-left">
										<div class="past-img">
											<?php if( has_post_thumbnail() ): ?>
												<?php the_post_thumbnail('full'); ?>
											<?php endif; ?>
										</div>
										<div class="past-me">
											<div style="text-align:center;text-decoration: none;color:black;margin-bottom:20px;"><p><?php the_title(); ?></p></div>
										</div>
									</div>
								</a>
							</div>
						<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
		<div class="pastrecords clear scrollanime slide-left">
			<div class="past-title scrollanime slide-left">
				<p>CONTACT FORM</p>
			</div>
			<div class="container">
				<div class="past">
					<div class="contact_text">
						弊社に興味を持っていただきありがとうございます。制作のご相談・お見積もり等お気軽にお問い合わせください。<br>
						お問合せ内容の確認後、ご連絡させていただきます。
					</div>
					<div class="past-item	line-item">
						<div class="qr_box">
							<img src="https://qr-official.line.me/sid/M/246xdhfu.png" alt="" class="line_qr">
							<div class="line_frend_button">
								<a href="https://lin.ee/zv4arTx"><img src="https://scdn.line-apps.com/n/line_add_friends/btn/ja.png" alt="友だち追加" height="50" border="0"></a>
							</div>
						</div>
						<div class="line_qr_text">
							<span>LINEからのお問い合わせも出来ます！！</span><br>
							<span>QRコードを読み込む、もしくは「友達追加」を押していただき、友達登録後</span><br>
							<span>メッセージをお送りください!!</span><br>
						</div>

					</div>
				</div>
				<div class="contact_form_box">
					<h2>お問い合わせ</h2>
				</div>
				<?php echo do_shortcode('[contact-form-7 id="24" title="コンタクトフォーム 1"]') ?>
				<div class="google_sec">
					This site is protected by reCAPTCHA and the Google
					<a href="https://policies.google.com/privacy">Privacy Policy</a> and
					<a href="https://policies.google.com/terms">Terms of Service</a> apply.
				</div>
			</div>
		</div>
		<?php get_footer(); ?> 
	</div>
</body>


</html>