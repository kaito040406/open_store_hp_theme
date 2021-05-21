<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>オープンストア株式会社</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/fav.png">
        <link rel="shortcut icon" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/boostrap.css">
        <link rel="shortcut icon" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/boostrap-responsive.css">
        <link rel="shortcut icon" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/documenter_style.css">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
        <!-- aos css -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/aos.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.css">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/off-canvas.css">
        <!-- linea-font css -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/linea-fonts.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/flaticon.css">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/rsmenu-main.css">
        <!-- Rs animations css -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/rs-animations.css">
        <!-- nivo slider CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/inc/custom-slider/css/nivo-slider.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/inc/custom-slider/css/preview.css">
        <!-- rsmenu transitions css -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/rsmenu-transitions.css">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/rs-spacing.css">
        <!-- style css -->
        <!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css"> -->
		  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css">
		<!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">

        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/footer.css">
        <?php wp_head(); ?>
    </head>
    <body class="home-five">

        <!-- Preloader area start here -->
        <div id="loader" class="loader">
            <div class="spinner"></div>
        </div>
        <!--End preloader here -->

        
        <!--Full width header Start-->
        <div class="full-width-header header-style2 modify3 md-mod">
            <!--Header Start-->
            <header id="rs-header" class="rs-header">
                <!-- Menu Start -->
                <div class="menu-area menu-sticky">
                    <div class="container-fluid">
                        <div class="row custom-row">
                            <div class="col-cell">
                                <div class="logo-area">
                                    <a class="dark" href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/nishi/OPENSTOREロゴ.png" alt="logo"></a>
                                    <a class="light" href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/nishi/OPENSTOREロゴ.png" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-cell">
                                <div class="rs-menu-area">
                                    <div class="main-menu">
                                        <div class="mobile-menu">
                                            <a class="rs-menu-toggle">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                        </div>
                                        <nav class="rs-menu">
                                            <ul class="nav-menu">
                                                <li class="menu-item-has-children">
                                                    <a href="<?php echo home_url('/') ?>">会社概要</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="<?php echo home_url('about') ?>">私たち</a></li>
                                                        <li><a href="<?php echo home_url('privacy-policy') ?>">プライバシーポリシー</a></li>
                                                    </ul>
                                                </li>

                                                <li class="menu-item-has-children">
                                                    <a href="<?php echo home_url('services') ?>">サービス</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="<?php echo home_url('service/consulting') ?>">WEBコンサルティング</a></li>
                                                        <li><a href="<?php echo home_url('service/webservice') ?>">WEBサービス制作/開発</a></li>
                                                        <li><a href="<?php echo home_url('service/ecservice') ?>">ECサイト構築/運営</a></li>
                                                        <li ><a href="<?php echo home_url('service/webmarketing') ?>">WEBマーケティング/運用</a></li>
                                                        <li><a href="<?php echo home_url('service/creative') ?>">クリエイティブ制作</a></li>
                                                        <li class="last-item"><a href="<?php echo home_url('service/system') ?>">システム開発</a></li>
                                                    </ul>
                                                </li>

                                                <li class="menu-item-has-children">
                                                    <a href="<?php echo home_url('blog') ?>">NEWS</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="<?php echo home_url('blog') ?>">オープンストアブログ</a></li>
                                                        <li><a href="<?php echo home_url('news') ?>">お知らせ(ブログ)</a></li>
                                                    </ul>
                                                </li>

                                                <li class="menu-item-has-children">
                                                    <a href=""<?php echo home_url('works') ?>>制作実績</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="<?php echo home_url('works') ?>">一覧</a></li>
                                                    </ul>
                                                </li>

                                                <li class="menu-item-has-children">
                                                    <a href="<?php echo home_url('contact') ?>">お問い合わせ</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="<?php echo home_url('contact') ?>">問合せフォーム</a></li>
                                                        <li><a href="https://lin.ee/zv4arTx">Lineでご連絡</a></li>
                                                    </ul>
                                                </li>
                                            </ul> <!-- //.nav-menu -->
                                        </nav>
                                    </div> <!-- //.main-menu -->
                                </div>
                            </div>
                            <div class="col-cell hidden-lg">
                                <!-- <div class="expand-btn-inner">
                                    <ul>
                                        <li class="search-parent">
                                            <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#">
                                                <i class="flaticon-search"></i>
                                            </a>
                                        </li>
                                        <li class="quote-btn pl-20"><a href="#">Get A Quote</a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End -->

                <!-- Canvas Menu start -->
                <nav class="right_menu_togle hidden-md">
                    <div class="close-btn">
                        <span id="nav-close" class="humburger">
                            <span class="dot1"></span>
                            <span class="dot2"></span>
                            <span class="dot3"></span>
                            <span class="dot4"></span>
                            <span class="dot5"></span>
                            <span class="dot6"></span>
                            <span class="dot7"></span>
                            <span class="dot8"></span>
                            <span class="dot9"></span>
                        </span>
                    </div>
                    <div class="canvas-logo">
                        <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-dark.png" alt="logo"></a>
                    </div>
                    <div class="offcanvas-text">
                        <p>Consectetur adipiscing elit. Duis at dictum risus, non suscip it arcu. Quisque aliquam posuere tortor aliquam posuere tortor develop database.</p>
                    </div>
                    <div class="canvas-contact">
                        <ul class="contact">
                            <li><i class="flaticon-location"></i> 374 William S Canning Blvd, Fall River MA 2721, USA</li>
                            <li><i class="flaticon-call"></i><a href="tel:+880155-69569">(+880)155-69569</a></li>
                            <li><i class="flaticon-email"></i><a href="mailto:support@rstheme.com">support@rstheme.com</a></li>
                            <li><i class="flaticon-clock"></i>10:00 - 17:00</li>
                        </ul>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Canvas Menu end -->
            </header>
            <!--Header End-->
        </div>
        <!--Full width header End-->