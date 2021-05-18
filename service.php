<?php
/*
Template Name: service.php
*/
?>

<!DOCTYPE html>
<html>

<head>
    <title alt="オープンストア　OPEN STORE">オープンストア株式会社</title>
    <?php get_header(); ?> 
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/stylesheet.css" type="text/css" />
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
                <h3><span>SERVICE</span></h3>
                　　　<p>提供サービス</p>
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
    </div>

    <div class="consulting" id="id1">
        <div class="container">
            <div class="consult consultx">
                <div class="consult-me "　alt="WEBコンサルティング EC 通販">
                    <h3 class="">WEBコンサルティング <br><span >WEB CONSULTING</span></h3>
                    </br>
                    <p class="" style="font-size:1.1rem; font-weight: bold;">WEBコンサルタントとは</p>
                    </br>
                    <p class="" style="font-size:0.9rem;">
                    「自社のWEBサイトでサービスや製品をもっと多くの人に届けたい」「WEB上で人材採用を進めていきたい」と思ったことはありませんか？</br>
                    中小企業の管理職や新米のWEB担当者など、WEBサイトの活用に関する知識や経験が少ない方から、</br>
                    「自社のWEBサイトはあるけれどどうやって改善していけばいいのか分からない」という悩みをよくお聞きします。</br>
                    インターネットの急速な普及により、WEBサイトからの売り上げを伸ばしている企業が急増しています。</br>
                    また、WEBサイトだけでサービスを展開している企業も多く、ユーザーにサービスの利用を促す施策を打つ必要性が高まっています
                    </p>
                </div>
                <div class="consult-img ">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/WEB-CONSULTING.png" alt="">
                </div>
            </div>
        </div>
       <div class="container">
            <div class="consult1">
                <div class="consult1-top ">
                    <h3>「WEBサービス」の成功は戦略で決まる</h3>
                </div>
                <div class="consult1-me" style="text-align: center;">
                    <p class="">綿密なヒアリングをもとに、
                    <span class="">WEBサービスの問題発見や解決策の提案、戦略立案などを中心に、</br>お客様が最適なWEBサービスを活用できるようサポートします。</span>
                    </p>
                </div>
            </div>
<!--             <div class="consult2">
                <div class="consult2-top">
                    <h3 class="">POINT<span class="">!</span></h3>
                </div>
                <div class="con-course ">
                    <div class="course ">
                        <div class="course-img ">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me ">
                            <h3>POINT!1</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                    <div class="course ">
                        <div class="course-img ">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me ">
                            <h3>POINT2</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                    <div class="course ">
                        <div class="course-img ">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me ">
                            <h3>POINT!3</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                </div>
            </div> -->
				<style>
					.non-active{
						display:inline-block;
					}
					.active2{
						display:none;
					}
				</style>

            <div class="consult3" style="background-color: #e74c3c;">
                <div class="consult3-contents">
							<div class="title_box">
								<img class="strategy2 non-active" src="<?php echo get_template_directory_uri(); ?>/img/non-active.png" >
								<img class="strategy2 active2" src="<?php echo get_template_directory_uri(); ?>/img/active.png">
								<div class="consult3-content strategy2">
									<a class="">戦略立案</a>
								</div>
							</div>
							<br>
							<div class = "subbox2 web_consulting" id = "strategy2">
								<h1>戦略立案</h1>
								<p class="subbox2_text">
								企業において、有効な事業戦略を立案し、実施することは重要な課題です。しかし、事業戦略とは、単純に商品を投入する計画を立てることではありません。</br>
								企業の環境や市場の動向、競合との差別化など、様々な要因を考慮しつつ、それらを適切に分析・判断し、自社にとって有効な一手となるように計画しなくてはなりません。</br>
								顧客の獲得、顧客単価の底上げ、認知拡大といったマーケティング上の課題や、さらに上位の視点から売り上げや利益の拡大といった全体的な課題の解決を目的に考えなければなりません。</br>
								私たちとともに、最適なWEBサイト戦略を展開しましょう！！
								</p>
							</div>
							<div class="title_box">
								<img class="innovation2 non-active" src="<?php echo get_template_directory_uri(); ?>/img/non-active.png" >
								<img class="innovation2 active2" src="<?php echo get_template_directory_uri(); ?>/img/active.png">
                    	<div class="consult3-content innovation2">
                        	<a class="">イノベーション支援</a>
                    	</div>
							</div>
							<br>
							<div class = "subbox2 web_consulting" id = "innovation2">
								<h1>イノベーション支援</h1>
								<p class="subbox2_text">
								現在、IT技術は私たちの生活に欠かせないものになっています。</br>
								今後も、全ての業種でIT技術の活用なくして企業や事業の発展はあり得ない状況です。</br>
								そこで、私たちの様なITサービス提供会社を活用いただきたく事が事業改善や企業発展に必要なIT技術を活用する近道になると考えています。
								</p>
							</div>
							<div class="title_box">
								<img class="consept2 non-active" src="<?php echo get_template_directory_uri(); ?>/img/non-active.png" >
								<img class="consept2 active2" src="<?php echo get_template_directory_uri(); ?>/img/active.png">
                    		<div class="consult3-content consept2">
                        		<a class="">コンセプト設計</a>
                    		</div>
							</div>
							<br>
							<div class = "subbox2 web_consulting" id = "consept2">
								<h1>コンセプト設計</h1>
								<p class="subbox2_text">
								「どうやったら魅力的なコンセプトが作れるようになるか？」は永遠のテーマですが、それを考え出すためのいわゆる「コツ」があります。</br>
								コンセプトとはビジネスのアイデアや構想を一言にまとめたもので、事業計画を立てる際に必須となる項目です。</br>
								これから計画する事業活動はどのような市場や人を対象にしていて、何のために、どのようなモノ・コトを提供するのかといったポイントを具体的に示します。</br>
								コンセプトを明確にすると、事業の概念や考え方に沿った商品やサービスを生み出すことができます。 
								</p>
							</div>
							<div class="title_box">
								<img class="branding2 non-active" src="<?php echo get_template_directory_uri(); ?>/img/non-active.png" >
								<img class="branding2 active2" src="<?php echo get_template_directory_uri(); ?>/img/active.png">
                    	<div class="consult3-content branding2">
                        	<a class="">ブランディング戦略</a>
                    	</div>
							</div>
							<br>
							<div class = "subbox2 web_consulting" id = "branding2">
								<h1>ブランディング戦略</h1>
								<p class="subbox2_text">
								自宅の家電にはロゴが入っているし、駅に降り立てばあちこちに看板が出ています。</br>
								コンビニを1周するだけで、数百のブランドが目に入るでしょう。</br>
								私たちは意識するにせよ、しないにせよ、望むにせよ、望まないにせよ、ブランドに囲まれて暮らしているのが実態です。</br>
								ブランド戦略を実施するということは、新しい予算で新しい施策を追加するというより、既存の商品・サービスそのものや、広告、営業、接客など、その他あらゆる顧客接点で与えている印象を、一貫性があるように整えることが主な内容になります。</br>
								自社の商品・サービスを、他社のものと区別してもらう。それがブランドの目的なのです</br>
								</p>
							</div>
                </div>
            </div>
        </div>
    </div>





    <div class="consulting" id="id2">
        <div class="container">
            <div class="consult">
                <div class="consult-me ">
                    <h3>WEBサービス制作/開発 　<br><span>WEB SERVICE PRODUCTION</span></h3>
                    </br>
                    <p class="" style="font-size:1.1rem; font-weight: bold;">WEB制作/開発とは</p>
                    </br>
                    <p class="" style="font-size:0.9rem;">
                    WEBサイト構築とは、単にテキスト要素を含むHTMLファイルとデザイン要素としての</br>画像ファイルの組み合わせを行うことではありません。</br>
                    WEBサイトを立ち上げたい、リニューアルしたい、売り上げを伸ばしたい、など様々なニーズがありますが、</br>
                    WEBサイトを構築するための全工程をしっかり把握してから構築を行っている企業は、どれくらいあるでしょうか？</br>
                    特に、WEBサイトを企業のマーケティングツールとして捉えた場合はなおさらです。</br>
                    その場合、WEBサイト構築の目的は「より多くのお客様からコンタクトをもらえるような仕組み」を作ることです。
                    </p>
                </div>
                <div class="consult-img ">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/WEB-SERVICE-PRODUCTION.png" alt="">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="consult1">
                <div class="consult1-top ">
                    <h3>あくまでもユーザーのためのもの。</h3>
                </div>
                <div class="consult1-me " style="text-align: center;">
                    <p>お客様の「伝えたいコト」「やりたいコト」と</br><span>ユーザーの「求めているコト」を用いて様々なカタチで実現します。</span></p>
                </div>
            </div>
<!--             <div class="consult2">
                <div class="consult2-top ">
                    <h3>POINT<span>!</span></h3>
                </div>
                <div class="con-course">
                    <div class="course ">
                        <div class="course-img ">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me ">
                            <h3>POINT!1</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                    <div class="course ">
                        <div class="course-img ">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me ">
                            <h3>POINT２</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                    <div class="course ">
                        <div class="course-img ">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me ">
                            <h3>POINT3</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                </div>
            </div> -->



            <div class="consult3" style="background-color: #f1c40f;">
                <div class="consult3-contents">
							<div class="title_box">
								<img class="corporate2 non-active" src="<?php echo get_template_directory_uri(); ?>/img/non-active.png" >
								<img class="corporate2 active2" src="<?php echo get_template_directory_uri(); ?>/img/active.png">
                    	<div class="consult3-content corporate2">
                       	<a class="">コーポレートサイト</a>
                    	</div>
							</div>
							<br>
							<div class = "subbox2 web_service" id = "corporate2">
								<h1>コーポレートサイト</h1>
								<p class="subbox2_text">
								会社のWEBサイトです。簡単に言えば、会社の公式プロフィールとも言えます。</br>
								主にどのような会社なのか、どのような製品・サービスを扱っているのか、などの情報を記載します</br>
								従来は、会社案内のパンフレットのWEB晩=コーポレートサイトといった認識が一般的でしたが、現在では、「採用、広告、企業ブランディング」と用途は多岐にわたります。</br>
								コーポレートサイトを通じて何をしたいのか「目的意識」をもって制作・運用に力を入れる企業が増えてきています。
								</p>
							</div>
							<div class="title_box">
								<img class="service_site2 non-active" src="<?php echo get_template_directory_uri(); ?>/img/non-active.png" >
								<img class="service_site2 active2" src="<?php echo get_template_directory_uri(); ?>/img/active.png">
                    	<div class="consult3-content service_site2">
                        	<a class="">サービスサイト</a>
                    	</div>
							</div>
							<br>
							<div class = "subbox2 web_service" id = "service_site2">
								<h1>サービスサイト</h1>
								<p class="subbox2_text">
								広告の商品やサービスについて詳しく紹介し、問い合わせや購入につなげるためのサイトです。</br>
								企業そのものよりも、商品やサービスにスポットを当てています。</br>
								会社が扱う全ての商品やサービスの情報を紹介しています。ページ数も多く、商品やサービスに関するあらゆる情報が網羅されている事が特徴です。</br>
								また、BtoB と BtoC によってもサイトによるアプローチ手法が異なります。
								</p>
							</div>
							<div class="title_box">
							<img class="lp2 non-active" src="<?php echo get_template_directory_uri(); ?>/img/non-active.png" >
							<img class="lp2 active2" src="<?php echo get_template_directory_uri(); ?>/img/active.png">
                    	<div class="consult3-content lp2">
                        	<a class="">lp</a>
                    	</div>
							</div>
							<br>
							<div class = "subbox2 web_service" id = "lp2">
								<h1>lp</h1>
								<p class="subbox2_text">
								サービスサイトから、さらにターゲットや商品を絞り、「１つ」の商品やサービスを売るためのWEBサイトのことをランディングページといいます。</br>
								サービスサイトを「WEB版カタログ」とすると、LPは「WEB版チラシ」に近いイメージです。</br></br>
								・特定の商品やサービスを売ることに特価</br>
								・１ページのみで構成「他のページに移動できない」</br>
								・サイトのゴールが明白(お問い合わせや販売に特価)
								</p>
							</div>
							<div class="title_box">
							<img class="owned2 non-active" src="<?php echo get_template_directory_uri(); ?>/img/non-active.png" >
							<img class="owned2 active2" src="<?php echo get_template_directory_uri(); ?>/img/active.png">
                    	<div class="consult3-content owned2">
                        	<a class="">オウンドメディア</a>
                    	</div>
							</div>
							<br>
							<div class = "subbox2 web_service" id = "owned2">
								<h1>オウンドメディア</h1>
								<p class="subbox2_text">
								同じ「集客」が目的でも、ランディングページとは異なり、中長期的な集客施策を行うなら、オウンドメディアがおすすめです。</br>
								オウンドメディアは、「様々なコンテンツを通して商品やサービスの魅力を発信し、集客を行う」ためのWEBサイトです。</br></br>
								・ランディングページのように広告費が不要</br>
								・コンテンツが積みあがってくると継続的に集客を行える</br>
								・ユーザーにしっかり情報発信を行うため顧客単価が高い
								</p>
							</div>
							<div class="title_box">
							<img class="recruit_site2 non-active" src="<?php echo get_template_directory_uri(); ?>/img/non-active.png" >
							<img class="recruit_site2 active2" src="<?php echo get_template_directory_uri(); ?>/img/active.png">
                    	<div class="consult3-content recruit_site2">
                        	<a class="">リクルートサイト</a>
                    	</div>
							</div>
							<br>
							<div class = "subbox2 web_service" id = "recruit_site2">
								<h1>リクルートサイト</h1>
								<p class="subbox2_text">
								基本的に企業の採用を強化するのが目的です。</br>
								コーポレートサイトの中に、「採用情報」として掲載されている会社も存在します。</br>
								しかし、基本的に採用を行う場合は、採用サイトとして独立したWEBサイトが求められます。</br>
								採用サイトの主な目的は、「他媒体で会社のことを知った候補者に応募するための一押しをする」ことです。</br>
								</p>
							</div>
                </div>
            </div>
        </div>
    </div>
    <div class="consulting" id="id3">
        <div class="container">
            <div class="consult">
                <div class="consult-me ">
                    <h3>ECサイト構築/運営 <br><span>EC SITE CONSTRUCTION/OPERATION</span></h3>
                    </br>
                    <p class="" style="font-size:1.1rem; font-weight: bold;">ECサイト構築/運営とは</p>
                    </br>
                    <p class="" style="font-size:0.9rem;">
                    実店舗を持っているがWEBでも販売したい、すでにWEBで商品を売っているが自社ショップを一新したいなど様々なご要望を伺い、</br>
                    お客様にあった最適なECサイト構築プランをご提案します。</br>
                    国外EC・国内ECの構築、運営代行をワンストップでサポートしています。</br>
                    ECサイト運営に必要な構築からブランディング、SEO対策、運用、分析改善、構築・カスタマイズ、オンラインEC決済、販促、マーケティング、SNS運用など幅広く対応しています。</br>
                    お客様の商品やオリジナルブランドを独自のオンラインショップを通じて日本中、世界中のユーザーに届けます</br>
                    </p>

                </div>
                <div class="consult-img ">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/EC-SITE-CONSTRUCTION.png" alt="">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="consult1">
                <div class="consult1-top ">
                    <h3>あなたのお店を、全ての場所に</h3>
                </div>
                <div class="consult1-me " style="text-align:center;">
                    <p>お客様の商品やオリジナルブランドを独自のオンラインショップを通じて</br>
                        <span>誰にでもどこにでもお届けすることができます。</span>
                    </p>
                </div>
            </div>
<!--             <div class="consult2">
                <div class="consult2-top ">
                    <h3>POINT<span>!</span></h3>
                </div>
                <div class="con-course">
                    <div class="course ">
                        <div class="course-img ">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me ">
                            <h3>POINT１</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                    <div class="course ">
                        <div class="course-img ">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me ">
                            <h3>POINT２</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                    <div class="course  ">
                        <div class="course-img ">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me ">
                            <h3>POINT３</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="consult3" style="background-color: #1abc9c;">
                <div class="consult3-contents">
							<div class="title_box">
							<img class="ec_site2 non-active" src="<?php echo get_template_directory_uri(); ?>/img/non-active.png" >
							<img class="ec_site2 active2" src="<?php echo get_template_directory_uri(); ?>/img/active.png">
                    <div class="consult3-content ec_site2">
                        <a class="">ECサイト制作</a>
                    </div>
							</div>
							<br>
							<div class = "subbox2 ec_site" id = "ec_site2">
								<h1>ECサイト制作</h1>
								<p class="subbox2_text">
								これまでECサイトを展開するには、自社でサーバを用意し、パッケージを導入する必要があったが、サブスクリプション型のサービスモデルでECサイトを開設できる容易さが評価されています。</br> 
								多言語・多通貨・海外配送も簡単にできるため、越境ECも可能となっています。</br>
								デザインの変更も容易で、数十もの「テーマ」を使うことで、ITエンジニアやデザイナーを雇わなくとも、高品質なデザインがサイト全体に適用できます。</br>
								さらにサードパーティの開発者が公開している「アプリ」を導入すれば、不足している機能も追加できます。</br>
								</p>
							</div>
							<div class="title_box">
							<img class="system_custom2 non-active" src="<?php echo get_template_directory_uri(); ?>/img/non-active.png" >
							<img class="system_custom2 active2" src="<?php echo get_template_directory_uri(); ?>/img/active.png">
                    	<div class="consult3-content system_custom2">
                        	<a class="">システムカスタマイズ</a>
                    	</div>
							</div>
							<br>
							<div class = "subbox2 ec_site" id = "system_custom2">
								<h1>システムカスタマイズ</h1>
								<p class="subbox2_text">
								お客様の日常業務での「不便・・困った・・こんな機能があれば・・」から始まるご要望に、 機能追加と最適化のカスタマイズでお応えします。</br>
								オリジナリティを出すためにできるカスタマイズをご提案します!!</br>
								</p>
							</div>
							<div class="title_box">
							<img class="kpi_setting2 non-active" src="<?php echo get_template_directory_uri(); ?>/img/non-active.png" >
							<img class="kpi_setting2 active2" src="<?php echo get_template_directory_uri(); ?>/img/active.png">
                    	<div class="consult3-content kpi_setting2">
                        	<a class="">KPI設定</a>
                    	</div>
							</div>
							<br>
							<div class = "subbox2 ec_site" id = "kpi_setting2">
								<h1>KPI設定</h1>
								<p class="subbox2_text">
								KPIとは、Key Performance Indicatorの略称で、「重要業績評価指数」と訳されています。</br>
								KPIは、最終目標を達成するために必要な要因を幾つか洗い出し、</br>
								目標達成に向かって順調に進んでいるかを点検するために設ける中間指標で、</br>
								具体的な数値で表したものです。</br>
								またKPIはただ設定するだけではなく、<br>
								PDCA（Plan:計画、Do：実行、Check：評価、Action：改善）サイクルで行うことが必要です。</br>
								そしてこれを1回で終わらせないで何回も続けて行うことが重要ですので、一連の流れが定着するよう支援します。
								</p>
							</div>
							<div class="title_box">
							<img class="site_operation2 non-active" src="<?php echo get_template_directory_uri(); ?>/img/non-active.png" >
							<img class="site_operation2 active2" src="<?php echo get_template_directory_uri(); ?>/img/active.png">
                    	<div class="consult3-content site_operation2">
                        	<a class="">サイト運営代行</a>
                    	</div>
							</div>
							<br>
							<div class = "subbox2 ec_site" id = "site_operation2">
								<h1>サイト運営代行</h1>
								<p class="subbox2_text">
								販売戦略の構築、新規集客、リピート対策、商品撮影、商品登録、WEBデザイン、注文・配送、物流倉庫、顧客対応、サイト分析にいたるまでネットショップのすべてをオープンストアへおまかせいただけます。</br>
								企業様はネットショップ運営がスムーズになれば、時間的な余裕が生まれます。</br>
								企業様は新たな商品企画やキャンペーン、プロモーション、顧客とのコミュニケーションなど、より売上アップのための業務に集中できます。</br>
								すべての業務の代行だけでなく、一部の代行も可能です。</br>
								</p>
							</div>
							<div class="title_box">
							<img class="product_photograph2 non-active" src="<?php echo get_template_directory_uri(); ?>/img/non-active.png" >
							<img class="product_photograph2 active2" src="<?php echo get_template_directory_uri(); ?>/img/active.png">
                    	<div class="consult3-content product_photograph2">
                        	<a class="">商品撮影</a>
                    	</div>
							</div>
							<br>
							<div class = "subbox2 ec_site" id = "product_photograph2">
								<h1>商品撮影</h1>
								<p class="subbox2_text">
								商品写真はECサイトで重要な役割を担っています。商品撮影の正しい知識を身につければ、商品写真を通して事業者様の「思い」を伝えることもできます。</br>
								商品撮影の目的は、正確に商品の特徴を伝えることと、商品の魅力を引き出すことにあります。</br>
								あなたがどうしても売りたい商品があるとき、いろいろな言葉で一生懸命その商品の特徴や魅力について説明するでしょう。</br>
								写真は、その言葉の意味するところから言葉では表現しきれない情報まで、視覚的に伝えることができます。</br>
								だからこそ、ECサイトにおいて商品写真はとても重要な役割を担っていると言われています。</br>
								</p>
							</div>
                </div>
            </div>
        </div>
    </div>
    <div class="consulting" id="id4">
        <div class="container">
            <div class="consult">
                <div class="consult-me ">
                    <h3>WEBマーケティング/運用<br><span>WEB MARKETING</span></h3>

                    </br>
                    <p class="" style="font-size:1.1rem; font-weight: bold;">WEBマーケティング/運用とは</p>
                    </br>
                    <p class="" style="font-size:0.9rem;">
                    デジタル領域のマーケティングを中心に、データ解析と効果計測に基づく実践的マーケティングの立案から実施・コンサルティングまで柔軟に対応いたします。</br>
                    また、ブランド構築やインフルエンサー・メディア・広告の運用など、幅広い領域のソリューションでお客様の事業を一貫してサポートいたします。</br>
                    WEBサイト運営に不可欠な各種広告の運用やデータ解析を通じてマーケティング活動を支援。</br>
                    また販売パートナー開拓を通じた集客・販売活動支援など幅広くお手伝いしています
                    </p>



                </div>
                <div class="consult-img ">
					<img src="<?php echo get_template_directory_uri(); ?>/img/WEB-MARKETING.png" alt="">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="consult1">
                <div class="consult1-top ">
                    <h3>「だれに」「どこで」「どう伝えるか」</h3>
                </div>
                <div class="consult1-me " style="text-align:center;">
                    <p><span>デジタル広告の重要性が非常に高まっている今</br></span>インターネット上でユーザーを集める為の仕組みづくりを提供します。</p>
                </div>
            </div>
<!--             <div class="consult2">
                <div class="consult2-top ">
                    <h3>POINT<span>!</span></h3>
                </div>
                <div class="con-course">
                    <div class="course ">
                        <div class="course-img ">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me ">
                            <h3>POINT１</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                    <div class="course ">
                        <div class="course-img ">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me ">
                            <h3>POINT２</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                    <div class="course ">
                        <div class="course-img ">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me ">
                            <h3>POINT３</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                </div>
            </div> -->



            <div class="consult3" style="background-color: #3498db;">
                <div class="consult3-contents">
							<div class="title_box">
							<img class="targeting2 non-active" src="<?php echo get_template_directory_uri(); ?>/img/non-active.png" >
							<img class="targeting2 active2" src="<?php echo get_template_directory_uri(); ?>/img/active.png">
								<div class="consult3-content targeting2">
									<a class="">ターゲティング戦略</a>
								</div>
							</div>
							<br>
							<div class = "subbox2 marketing" id = "targeting2">
								<h1>ターゲティング戦略</h1>
								<p style="text-align:left;margin:10px 25%;font-size: 1.2rem;">
									6R</br>
									&nbsp;&nbsp;・有効な市場規模</br>
									&nbsp;&nbsp;・競合状況</br>
									&nbsp;&nbsp;・成長性</br>
									&nbsp;&nbsp;・波及効果</br>
									&nbsp;&nbsp;・到達可能性</br>
									&nbsp;&nbsp;・測定可能性</br>
									を用いて、STP分析(セグメンテーション、ターゲティング、ポジショニング)をします。</br>
								</p>
							</div>
							<div class="title_box">
							<img class="influencer_marketing2 non-active" src="<?php echo get_template_directory_uri(); ?>/img/non-active.png" >
							<img class="influencer_marketing2 active2" src="<?php echo get_template_directory_uri(); ?>/img/active.png">
                    	<div class="consult3-content influencer_marketing2">
                        	<a class="">インフルエンサーマーケティング</a>
                    	</div>
							</div>
							<br>
							<div class = "subbox2 marketing" id = "influencer_marketing2">
								<h1>インフルエンサーマーケティング</h1>
								<p class="subbox2_text">
								主にSNS(Instagram、Twitter、Facebook等)で大きな影響力をもつ</br>
								インフルエンサーにブランドの製品やサービスを紹介してもらい、</br>
								消費者の態度変容や行動変容を促すコミュニケーション型マーケティング手法になります。</br>
								WEB上での集客や認知拡大が売上に直結する今、</br>
								セグメントやターゲティングが細かく設定でき、</br>
								より多くの潜在顧客にリーチできるSNS広告は必須となります。</br>
								</p>
							</div>
							<div class="title_box">
							<img class="gdn_ydn_advertising2 non-active" src="<?php echo get_template_directory_uri(); ?>/img/non-active.png" >
							<img class="gdn_ydn_advertising2 active2" src="<?php echo get_template_directory_uri(); ?>/img/active.png">
                    <div class="consult3-content gdn_ydn_advertising2">
                        <a class="">GDN・YDN広告</a>

                    </div>
							</div>
							<br>
							<div class = "subbox2 marketing" id = "gdn_ydn_advertising2">
								<h1>GDN・YDN広告</h1>
								<p class="subbox2_text">
								GDN(Googleディスプレイネットワーク)</br>
								YDN(Yahooディスプレイネットワーク)</br>
								上記を用いたディスプレイ広告(サイト閲覧時に画像・動画形式で広告が表示される広告)になります。</br>
								</p>
							</div>
							<div class="title_box">
							<img class="listing_advertising2 non-active" src="<?php echo get_template_directory_uri(); ?>/img/non-active.png" >
							<img class="listing_advertising2 active2" src="<?php echo get_template_directory_uri(); ?>/img/active.png">
                    <div class="consult3-content listing_advertising2">
                        <a class="">リスティング広告</a>
								</div>
                    </div>
							<br>
							<div class = "subbox2 marketing" id = "listing_advertising2">
								<h1>リスティング広告・DSP広告</h1>
								<p class="subbox2_text">
								リスティング広告とは、検索エンジン(Google、Yahoo!)の検索結果に連動して表示される検索連動型広告です。</br>
								特定のキーワードに対して広告を表示させることができ、</br>
								そのキーワードをユーザーが検索している関心が高いときに広告が表示されるため、</br>
								コンバージョン率が高くなりやすいのが特徴です。</br>
								DSP広告は、DSP(広告主側)、SSP(媒体側)それぞれが持つユーザーの行動履歴などの膨大なデータをもとに、</br>
								自動的に広告の最適化と費用対効果を上げる仕組みであるため、</br>
								面(とにかく幅広い層)ではなく人(ピンポイント)にアプローチできるのが特徴です。</br>
								</p>
							</div>
							<div class="title_box">
							<img class="usesability_survey2 non-active" src="<?php echo get_template_directory_uri(); ?>/img/non-active.png" >
							<img class="usesability_survey2 active2" src="<?php echo get_template_directory_uri(); ?>/img/active.png">
                    <div class="consult3-content usesability_survey2">
                        <a class="">ユーザビリティ調査</a>
								</div>
                    </div>
							<br>
							<div class = "subbox2 marketing" id = "usesability_survey2">
								<h1>ユーザビリティ調査</h1>
								<p class="subbox2_text">
								ユーザビリティ調査とは、製品やWEBサイト、スマートフォンのアプリなどの使い勝手の良さを評価する調査です。</br>
								競合とのサービス比較やサイト・アプリリニューアルの際の課題の洗い出しや方向性の指針を明確にすることが可能になります。</br>
								</p>
							</div>
							<div class="title_box">
							<img class="heuristic_evaluation2 non-active" src="<?php echo get_template_directory_uri(); ?>/img/non-active.png" >
							<img class="heuristic_evaluation2 active2" src="<?php echo get_template_directory_uri(); ?>/img/active.png">
                    <div class="consult3-content heuristic_evaluation2">
                        <a class="">ヒューリスティック評価</a>
								</div>
                    </div>
							<br>
							<div class = "subbox2 marketing" id = "heuristic_evaluation2">
								<h1>ヒューリスティック評価</h1>
								<p style="text-align:left;margin:10px 25%;font-size: 1.2rem;">
								ヒューリスティック評価とは、10の経験則</br>
								&nbsp;&nbsp;・システムの状態の把握</br>
								&nbsp;&nbsp;・利用環境に適合したシステムの作成</br>
								&nbsp;&nbsp;・ユーザーに操作の主導権と自由度の付与</br>
								&nbsp;&nbsp;・一貫性を保つ</br>
								&nbsp;&nbsp;・エラーの防止</br>
								&nbsp;&nbsp;・シンプルなデザイン</br>
								&nbsp;&nbsp;・柔軟性と効率性</br>
								&nbsp;&nbsp;・最小限</br>
								&nbsp;&nbsp;・サポート</br>
								&nbsp;&nbsp;・ヘルプ</br>
								に基づいてユーザビリティを評価し、 UI 上の問題を発見できます。</br>
								</p>
							</div>
                </div>
            </div>
        </div>
    </div>
    <div class="consulting" id="id5">
        <div class="container">
            <div class="consult">
                <div class="consult-me">
                    <h3>クリエイティブ制作 <br><span>CREATIVE</span></h3>
                    </br>
                    <p class="" style="font-size:1.1rem; font-weight: bold;">クリエイティブ制作とは</p>
                    </br>
                    <p class="" style="font-size:0.9rem;">
                    ブランドのネーミングからブランドスローガンやステートメントのコピーライティング、ブランドイメージにふさわしい商品やモデルの撮影、ブランドサイトやランディングページのWEBデザインなど、ブランドを具現化するために必要なクリエイティブを幅広く提供しています。</br>
                    たったひとつのロゴやパッケージだとしても、ブランドのビジョンや文脈にふさわしいあり方を目指してデザインに取り組んでいます。</br>
                    その一つひとつの積み重ねが、ターゲットやコミュニティとの繋がりを生み出し、</br>
                    対話のチャンスを広げるブランドを実現させると信じて、クライアントと共に関わる全ての仕事を成功させていきたいと願っています。
                    </p>
                </div>
                <div class="consult-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/CREATIVE.png" alt="">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="consult1">
                <div class="consult1-top">
                    <h3>創造がビジネスを加速させる</h3>
                </div>
                <div class="consult1-me"  style="text-align:center;">
                    <p>ユーザーのココロと行動を変化させ、
                    お客様のブランドが </br><span>人々の記憶に深く刻まれるような
                    "伝わる"クリエイティブを制作します。
                    </span></p>
                </div>
            </div>
<!--             <div class="consult2">
                <div class="consult2-top">
                    <h3>POINT<span>!</span></h3>
                </div>
                <div class="con-course">
                    <div class="course">
                        <div class="course-img">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me">
                            <h3>POINT１</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                    <div class="course">
                        <div class="course-img">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me">
                            <h3>POINT２</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                    <div class="course">
                        <div class="course-img">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me">
                            <h3>POINT３</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                </div>
            </div> -->




            <div class="consult3" style="background-color: #9b59b6;">
                <div class="consult3-contents">
							<div class="title_box">
							<img class="pamphlet2 non-active" src="<?php echo get_template_directory_uri(); ?>/img/non-active.png" >
							<img class="pamphlet2 active2" src="<?php echo get_template_directory_uri(); ?>/img/active.png">
                    <div class="consult3-content pamphlet2">
                        <a class="">パンフレット・カタログ制作</a>
								</div>
                    </div>

							<br>
							<div class = "subbox2 creative2" id = "pamphlet2">
								<h1>パンフレット・カタログ制作</h1>
								<p class="subbox2_text">
									「営業支援」「新商品紹介」「サービス紹介」「総合カタログ」「ブランディング」といった目的や、</br>
					「BtoB」「BtoC」「商談ツール」「店頭での陳列」「イベント・展示会での配布」「DM」など、</br>
				それぞれの用途を明確にし、作成します。
								</p>
							</div>
							<div class="title_box">
							<img class="uniform2 non-active" src="<?php echo get_template_directory_uri(); ?>/img/non-active.png" >
							<img class="uniform2 active2" src="<?php echo get_template_directory_uri(); ?>/img/active.png">
                    <div class="consult3-content uniform2">
                        <a class="">ユニフォームデザイン</a>
								</div>
                    </div>

							<br>
							<div class = "subbox2 creative2" id = "uniform2">
								<h1>ユニフォームデザイン</h1>
								<p class="subbox2_text">
								ユニフォームは着ている事で私達見る側に対して安心感を与える効果があり、</br>
								同じ服を着用する事で連帯意識を持ち仕事の精度が上がる、</br>
								仕事の機能性を上げるなどの役割も果たす、</br>
								そのようなデザインを提案します。
								</p>
							</div>
							<div class="title_box">
							<img class="content_creation2 non-active" src="<?php echo get_template_directory_uri(); ?>/img/non-active.png" >
							<img class="content_creation2 active2" src="<?php echo get_template_directory_uri(); ?>/img/active.png">
                    <div class="consult3-content content_creation2">
                        <a class="">コンテンツ制作</a>
								</div>
                    </div>
							<br>
							<div class = "subbox2 creative2" id = "content_creation2">
								<h1>コンテンツ制作</h1>
								<p class="subbox2_text">
								音声と映像の組み合わせによって受ける印象というのが大きく変化し、同じ映像だとしても同時に流す音声によって動画コンテンツの印象が変わります。</br>
								このように、音声と映像をセットで用いられる動画コンテンツならではの強みがあり、印象付けを強めたり、世界観を表現したりユーザーに与える印象をコントロールしたりといった施策が展開できます。
								</p>
							</div>
                </div>
            </div>
        </div>
    </div>
    <div class="consulting" id="id6">
        <div class="container">
            <div class="consult">
                <div class="consult-me">
                    <h3>システム開発 <br><span>SYSTEM DEVELOPMENT</span></h3>
                    </br>
                    <p class="" style="font-size:1.1rem; font-weight: bold;">システム開発とは</p>
                    </br>
                    <p class="" style="font-size:0.9rem;">
                    事業戦略や業務プロセスがITと不可分となっている中、ITの活用力は競争力に大きく 影響します。</br>
                    幅広い業種を対象に、IT戦略の策定やITを活用した業務改革の計画・実行支援、標準アーキテクチャの確立など、</br>
                    企業のIT活用力の向上を支援する多様なサービスを提供しています。</br>
                    業務とITの両方に精通したコンサルタントが、お客様と一体となって、IT活用力の向上に取り組んでいます。
                    </p>
                </div>
                <div class="consult-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/SYSTEM-DEVELOPMENT.png" alt="">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="consult1">
                <div class="consult1-top">
                    <h3>「効率」から「創造」へ</h3>
                </div>
                <div class="consult1-me" style="text-align:center;">
                    <p>顧客管理、営業管理システムといったITの導入により業務を効率化し、</br>
                    <span>新たなビジネスチャンスを創造します。</span></p>
                </div>
            </div>
<!--             <div class="consult2">
                <div class="consult2-top">
                    <h3>POINT<span>!</span></h3>
                </div>
                <div class="con-course">
                    <div class="course">
                        <div class="course-img">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me">
                            <h3>POINT１</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                    <div class="course">
                        <div class="course-img">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me">
                            <h3>POINT２</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                    <div class="course">
                        <div class="course-img">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me">
                            <h3>POINT３</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="consult3" style="background-color: #777777;">
                <div class="consult3-contents">
							<div class="title_box">
							<img class="in_house_tools2 non-active" src="<?php echo get_template_directory_uri(); ?>/img/non-active.png" >
							<img class="in_house_tools2 active2" src="<?php echo get_template_directory_uri(); ?>/img/active.png">
                    <div class="consult3-content in_house_tools2">
                        <a class="">社内ツール改善</a>
								</div>
                    </div>

							<br>
							<div class = "subbox2 system" id = "in_house_tools2">
								<h1>社内ツール改善</h1>
								<p class="subbox2_text">
								社内で使われるツールを開発・改善することです。</br>
								社内ツールは、課題発見から解決まで社内で行うからこそ、ユーザーサイドと開発サイドが近く、ビジネスに直結する有効なツールを生み出すことができます。
								</p>
							</div>
							<div class="title_box">
							<img class="select_system2 non-active" src="<?php echo get_template_directory_uri(); ?>/img/non-active.png" >
							<img class="select_system2 active2" src="<?php echo get_template_directory_uri(); ?>/img/active.png">
                    <div class="consult3-content select_system2">
                        <a class="">システム選定</a>
								</div>
                    </div>

							<br>
							<div class = "subbox2 system" id = "select_system2">
								<h1>システム選定</h1>
								<p class="subbox2_text">
							   業務上で利用するシステムは、ビジネスを取り巻く環境の変化や新事業の発足等によって新しいものへと変えるタイミングがやってきます。</br>
								その際システム選定を成功させるポイントは、現状の業務フローを作成し、業務を可視化することです。</br>
								そして現状の業務を正しく理解することができれば、現状の業務を改善するためのシステム選定を的確に行うことが可能になります。
								</p>
							</div>
							<div class="title_box">
							<img class="select_server2 non-active" src="<?php echo get_template_directory_uri(); ?>/img/non-active.png" >
							<img class="select_server2 active2" src="<?php echo get_template_directory_uri(); ?>/img/active.png">
                    <div class="consult3-content select_server2">
                        <a class="">サーバー選定</a>
								</div>
                    </div>

							<br>
							<div class = "subbox2 system" id = "select_server2">
								<h1>サーバー選定</h1>
								<p class="subbox2_text">
								WEBサービスの構築において、サーバの選定が必要になります。</br>
								せっかく良いWEBサイトが完成しても、サーバが運用に耐えられるもので無ければ、トラブルの元となります。</br>
								サーバの特徴を理解した上で、選定することが重要です。</br>
								サーバは大きく分けると、「ホスティング」「クラウド」「ハウジング」「オンプレミス」といった種類があり、それぞれ各特徴があります。</br>
								当社ではコストや運用という視点で、「ホスティング」または「クラウド」のサーバでお客様の用途にあったご提案や、代行運営をさせていただいております。</br>
								</p>
							</div>
							<div class="title_box">
							<img class="vulnerability_diagnosis2 non-active" src="<?php echo get_template_directory_uri(); ?>/img/non-active.png" >
							<img class="vulnerability_diagnosis2 active2" src="<?php echo get_template_directory_uri(); ?>/img/active.png">
                    <div class="consult3-content vulnerability_diagnosis2">
                        <a class="">脆弱性診断</a>
								</div>
							</div>

							<br>
							<div class = "subbox2 system" id = "vulnerability_diagnosis2">
								<h1>脆弱性診断</h1>
								<p class="subbox2_text">
								脆弱性診断とは、ネットワーク・OS・ミドルウェアやWEBアプリケーションなどに脆弱性がないか診断することです。</br>
								脆弱性診断を実施することでネットワーク/サーバ、WEBアプリケーションのセキュリティの現状を確認することで攻撃者からの悪意ある攻撃や情報漏えい事故などのリスクを未然に防ぐことができます。
								</p>
							</div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(function() {


            //アクセス時の初期位置制御用 start
                var prm = location.search;
                
                if(prm == "?id=1"){
                    var scroll = jQuery('#id1').offset().top;
                }
                if(prm == "?id=2"){
                    var scroll = jQuery('#id2').offset().top;
                }
                if(prm == "?id=3"){
                    var scroll = jQuery('#id3').offset().top;
                }
                if(prm == "?id=4"){
                    var scroll = jQuery('#id4').offset().top;
                }
                if(prm == "?id=5"){
                    var scroll = jQuery('#id5').offset().top;
                }
                if(prm == "?id=6"){
                    var scroll = jQuery('#id6').offset().top;
                }
                jQuery(window).scrollTop(scroll);	
            //アクセス時の初期位置制御用 end



            //詳細出力 start
                // strategy2
                jQuery('.strategy2' ).mouseup(function() {
                    jQuery.changeElement(".subbox2.web_consulting","#strategy2",jQuery(this).attr('class'));
                });
                //innovation2
                jQuery('.innovation2' ).mouseup(function() {
                    jQuery.changeElement(".subbox2.web_consulting","#innovation2",jQuery(this).attr('class'));
                });
                //consept2
                jQuery('.consept2' ).mouseup(function() {
                    jQuery.changeElement(".subbox2.web_consulting","#consept2",jQuery(this).attr('class'));
                });
                //branding2
                jQuery('.branding2' ).mouseup(function() {
                    jQuery.changeElement(".subbox2.web_consulting","#branding2",jQuery(this).attr('class'));
                });



                // ec_site2
                jQuery('.ec_site2' ).mouseup(function() {
                    jQuery.changeElement(".subbox2.ec_site","#ec_site2",jQuery(this).attr('class'));
                });
                // system_custom2
                jQuery('.system_custom2' ).mouseup(function() {
                    jQuery.changeElement(".subbox2.ec_site","#system_custom2",jQuery(this).attr('class'));
                });
                // kpi_setting2
                jQuery('.kpi_setting2' ).mouseup(function() {
                    jQuery.changeElement(".subbox2.ec_site","#kpi_setting2",jQuery(this).attr('class'));
                });
                // site_operation2
                jQuery('.site_operation2' ).mouseup(function() {
                    jQuery.changeElement(".subbox2.ec_site","#site_operation2",jQuery(this).attr('class'));
                });
                // product_photograph2
                jQuery('.product_photograph2' ).mouseup(function() {
                    jQuery.changeElement(".subbox2.ec_site","#product_photograph2",jQuery(this).attr('class'));
                });


                // corporate2
                jQuery('.corporate2' ).mouseup(function() {
                    jQuery.changeElement(".subbox2.web_service","#corporate2",jQuery(this).attr('class'));
                });
                // service_site2
                jQuery('.service_site2' ).mouseup(function() {
                    jQuery.changeElement(".subbox2.web_service","#service_site2",jQuery(this).attr('class'));
                });
                // lp2
                jQuery('.lp2' ).mouseup(function() {
                    jQuery.changeElement(".subbox2.web_service","#lp2",jQuery(this).attr('class'));
                });
                // owned2
                jQuery('.owned2' ).mouseup(function() {
                    jQuery.changeElement(".subbox2.web_service","#owned2",jQuery(this).attr('class'));
                });
                // recruit_site2
                jQuery('.recruit_site2' ).mouseup(function() {
                    jQuery.changeElement(".subbox2.web_service","#recruit_site2",jQuery(this).attr('class'));
                });

                // targeting2
                jQuery('.targeting2' ).mouseup(function() {
                    jQuery.changeElement(".subbox2.marketing","#targeting2",jQuery(this).attr('class'));
                });
                // influencer_marketing2
                jQuery('.influencer_marketing2' ).mouseup(function() {
                    jQuery.changeElement(".subbox2.marketing","#influencer_marketing2",jQuery(this).attr('class'));
                });
                // gdn_ydn_advertising2
                jQuery('.gdn_ydn_advertising2' ).mouseup(function() {
                    jQuery.changeElement(".subbox2.marketing","#gdn_ydn_advertising2",jQuery(this).attr('class'));
                });
                // listing_advertising2
                jQuery('.listing_advertising2' ).mouseup(function() {
                    jQuery.changeElement(".subbox2.marketing","#listing_advertising2",jQuery(this).attr('class'));
                });
                // usesability_survey2
                jQuery('.usesability_survey2' ).mouseup(function() {
                    jQuery.changeElement(".subbox2.marketing","#usesability_survey2",jQuery(this).attr('class'));
                });
                // heuristic_evaluation2
                jQuery('.heuristic_evaluation2' ).mouseup(function() {
                    jQuery.changeElement(".subbox2.marketing","#heuristic_evaluation2",jQuery(this).attr('class'));
                });

                // pamphlet2
                jQuery('.pamphlet2' ).mouseup(function() {
                    jQuery.changeElement(".subbox2.creative2","#pamphlet2",jQuery(this).attr('class'));
                });
                // uniform2
                jQuery('.uniform2' ).mouseup(function() {
                    jQuery.changeElement(".subbox2.creative2","#uniform2",jQuery(this).attr('class'));
                });
                // content_creation2
                jQuery('.content_creation2' ).mouseup(function() {
                    jQuery.changeElement(".subbox2.creative2","#content_creation2",jQuery(this).attr('class'));
                });

                // in_house_tools2
                jQuery('.in_house_tools2' ).mouseup(function() {
                    jQuery.changeElement(".subbox2.system","#in_house_tools2",jQuery(this).attr('class'));
                });       
                // select_system2
                jQuery('.select_system2' ).mouseup(function() {
                    jQuery.changeElement(".subbox2.system","#select_system2",jQuery(this).attr('class'));
                });       
                // select_server2
                jQuery('.select_server2' ).mouseup(function() {
                    jQuery.changeElement(".subbox2.system","#select_server2",jQuery(this).attr('class'));
                });    
                // vulnerability_diagnosis2
                jQuery('.vulnerability_diagnosis2' ).mouseup(function() {
                    jQuery.changeElement(".subbox2.system","#vulnerability_diagnosis2",jQuery(this).attr('class'));
                });    

                //要素切り替え用メソッド
                jQuery.changeElement = function(setClassName, idName ,ckickClass){
                    //下記にて引数を変数にそれぞれ格納
                    let useClassName = setClassName;
                    let useIdName = idName;
                    let clickClassName = ckickClass;
					
							let imgIdName = idName + "#iconimg";

                    //クリックした要素のクラス名取得
                    let className = clickClassName;

                    //現在表示している要素のクラス名取得
//                     let currentDisps = jQuery(useClassName);
//                     for (var i = 0; i < currentDisps.length; i++) {
                        
//                         //取得した要素のID情報をcurrentDispIdに格納
//                         currentDispId = jQuery(currentDisps[i]).attr('id');

//                         //取得した要素のスタイルにて、display:blockの場合抜ける
//                         if(jQuery(currentDisps[i]).css('display') == 'block'){

//                             //ここでbreakした場合、currentDispIdはクリアされない
//                             break;
//                         }

//                         //currentDispIdをクリアする
//                         currentDispId = "";
//                     }

                    //クリックした要素のクラス名が、現在表示している要素のクラス名に含まれなければ実行
//                     if ( !className.match(currentDispId)) {
//                         jQuery(useClassName).slideUp(400);
//                     }

                    if (jQuery(useIdName).css('display') == 'none') {
								jQuery(useIdName).slideDown(400);
								console.log(jQuery(useIdName.replace('#', '.')+'.non-active').css('display'));
// 								jQuery(useIdName+'#non-active').css('display','none');
								jQuery(useIdName.replace('#', '.')+'.non-active').css('display','none')
								jQuery(useIdName.replace('#', '.')+'.active2').css('display','inline-block')
                    }
                    else{
                        jQuery(useIdName).slideUp(400);
								 jQuery(imgIdName).css('display','none');
								jQuery(useIdName.replace('#', '.')+'.active2').css('display','none')
								jQuery(useIdName.replace('#', '.')+'.non-active').css('display','inline-block')
                    }
                };
            //詳細出力 end

        });
</script>
<?php get_footer(); ?> 
</div>
</body>
</html>