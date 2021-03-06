<?php
/*
Template Name: services.php
*/
?>

<?php get_header(); ?>

<!-- Main content Start -->
<div class="main-content">
            <!-- Breadcrumbs Section Start -->
            <div class="rs-breadcrumbs bg-2">
                <div class="container">
                    <div class="content-part text-center">
                        <h1 class="breadcrumbs-title title-color2 mb-0">Services</h1>
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs Section End -->

            <!-- Premium Services Section Start -->
            <div id="rs-services" class="rs-services style2 gray-bg2 pt-100 pb-70 md-pt-80 md-pb-50 sm-pt-72">
                <div class="container">
                    <div class="sec-title style2 mb-60 md-mb-50 sm-mb-42">
                        <div class="first-half text-right">
                            <div class="sub-title primary">Services</div>
                            <h2 class="title mb-0">「WEBサービス」の成功は戦略で決まる</h2>
                        </div>
                        <div class="last-half">
                            <p class="desc mb-0 pr-50">時代の流れとともに、ビジネスを取り巻く環境は変化し続けるもの。
                                                        種を蒔き、大切に育てた芽が、揺るぎない大樹となるには、
                                                        周囲の環境に順応し、深く地中に根を張るような取り組みが大切です。
                                                        </p>
                        </div>
                    </div>
                    <div class="row gutter-20">
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="service-wrap">
                                <div class="image-part">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/services/consulting.png" alt="WEBコンサルティング">
                                </div>
                                <div class="content-part text-center">
                                    <h3 class="title"><a href="<?php echo home_url('service/consulting') ?>">WEBコンサルティング</a></h3>
                                    <div class="desc">「自社のWEBサイトでサービスや製品をもっと多くの人に届けたい」「WEB上で人材採用を進めていきたい」と思ったことはありませんか？</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="service-wrap">
                                <div class="image-part">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/services/webservice.png" alt="WEBサービス制作/開発">
                                </div>
                                <div class="content-part text-center">
                                    <h3 class="title"><a href="<?php echo home_url('service/webservice') ?>">WEBサービス制作/開発</a></h3>
                                    <div class="desc">WEBサイト構築とは、単にテキスト要素を含むHTMLファイルとデザイン要素としての画像ファイルの組み合わせを行うことではありません。</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="service-wrap">
                                <div class="image-part">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/services/ecsite.png" alt="ECサイト構築/運営">
                                </div>
                                <div class="content-part text-center">
                                    <h3 class="title"><a href="<?php echo home_url('service/ecservice') ?>">ECサイト構築/運営</a></h3>
                                    <div class="desc">実店舗を持っているがWEBでも販売したいなど様々なご要望を伺い、お客様にあった最適なECサイト構築プランをご提案します。</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="service-wrap">
                                <div class="image-part">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/services/webmarketing.png" alt="WEBマーケティング/運用">
                                </div>
                                <div class="content-part text-center">
                                    <h3 class="title"><a href="<?php echo home_url('service/webmarketing') ?>">WEBマーケティング/運用</a></h3>
                                    <div class="desc">デジタル領域のマーケティングを中心に、データ解析と効果計測に基づく実践的マーケティングの立案から実施・コンサルティングまで柔軟に対応いたします。</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="service-wrap">
                                <div class="image-part">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/services/creative.png" alt="クリエイティブ制作">
                                </div>
                                <div class="content-part text-center">
                                    <h3 class="title"><a href="<?php echo home_url('service/creative') ?>">クリエイティブ制作</a></h3>
                                    <div class="desc">ブランドサイトやランディングページのWEBデザインなど、ブランドを具現化するために必要なクリエイティブを幅広く提供しています。</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="service-wrap">
                                <div class="image-part">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/services/systemdev.png" alt="システム開発">
                                </div>
                                <div class="content-part text-center">
                                    <h3 class="title"><a href="<?php echo home_url('service/system') ?>">システム開発</a></h3>
                                    <div class="desc">事業戦略や業務プロセスがITと不可分となっている中、ITの活用力は競争力に大きく 影響します。企業のIT活用力の向上を支援する多様なサービスを提供しています。</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Premium Services Section End -->

        </div> 
        <!-- Main content End -->

        <!-- Footer Start -->
        <?php get_footer(); ?>