

                <!-- Canvas Menu end -->
            </header>
            <!--Header End-->
        </div>
        <!--Full width header End-->

		<!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Section Start -->
            <div class="rs-breadcrumbs bg-9">
                <div class="container">
                    <div class="content-part text-center">
                        <h1 class="breadcrumbs-title .title-color2 mb-0"><?php echo the_title(); ?></h1>
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs Section End -->

            <!-- Blog Section Start -->
            <div class="rs-blog inner single pt-100 pb-100 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="blog-part">
                                <div class="blog-img">
                                    <a href="#"><?php the_post_thumbnail(); ?></a>
                                </div>
                                <div class="article-content shadow mb-60">
                                    <ul class="blog-meta mb-22">
                                        <li><i class="fa fa-calendar-check-o"></i> <?php echo the_time('Y年m月d日'); ?></li>
                                    </ul>
                                    <?php echo the_content(); ?>
                                </div>
                                <?php //今度実装します ?>
                                <!-- <div class="article-nav">
                                    <ul>
                                        <li class="next">
                                            <a href="#">
                                                <span class="next-link">Next <i class="flaticon-next"></i></span>
                                                <span class="link-text">Soundtrack Filma Lady Exclusive Music</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div> -->
                                <div class="bs-contact-form pt-45">
                                    <h3 class="title">この記事へのコメント</h3>
                                    <p></p>
                                    <div id="form-messages"></div>
                                    <form id="contact-form" method="post" action="mailer.php">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-field">
                                                    <label>お名前 *</label>
                                                    <input type="text" id="name" name="name" required="">
                                                </div>                              
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-field">
                                                    <label>メールアドレス *</label>
                                                    <input type="email" id="email" name="email" required="">
                                                </div>                              
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-field mb-30">
                                                    <label>コメント</label>
                                                    <textarea rows="7" id="message" name="message"></textarea>
                                                </div>
                                                <div class="form-button mt-30">
                                                    <button type="submit" class="readon radius">送信</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 md-mb-50 pl-35 lg-pl-15 md-order-first">
                            <div id="sticky-sidebar" class="blog-sidebar">
                                <?php //検索機能は後ほど実装 ?>
                                <!-- <div class="sidebar-search sidebar-grid shadow mb-50">
                                    <form class="search-bar">
                                        <input type="text" placeholder="Search...">
                                        <span>
                                          <button type="submit"><i class="flaticon-search"></i></button> 
                                        </span>
                                    </form>
                                </div> -->

                                <div class="sidebar-popular-post sidebar-grid shadow mb-50">
                                    <div class="sidebar-title">
                                       <h3 class="title mb-20">最近の投稿</h3>
                                    </div>
                                    <?php get_template_part("templates/parts/archive_nearyroop", null, $args); ?>
                                </div>

                                <?php get_template_part("templates/parts/side_link"); ?>
                            </div>
                        </div>
                    </div>
                    <div id="sticky-end"></div>
                </div>
            </div>
            <!-- Blog Section End -->
        </div> 
        <!-- Main content End -->