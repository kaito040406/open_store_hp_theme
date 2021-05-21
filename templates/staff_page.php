

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
                            </div>
                        </div>

                        <div class="col-lg-4 md-mb-50 pl-35 lg-pl-15 md-order-first">
                            <div id="sticky-sidebar" class="blog-sidebar">

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