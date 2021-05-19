<?php
/*
Template Name: service.php
*/
?>

<?php get_header(); ?>

		<!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Section Start -->
            <div class="rs-breadcrumbs bg-2">
                <div class="container">
                    <div class="content-part text-center">
                        <h1 class="breadcrumbs-title white-color mb-0">Services</h1>
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs Section End -->

            <!-- Premium Services Section Start -->
            <div id="rs-services" class="rs-services style2 gray-bg2 pt-100 pb-70 md-pt-80 md-pb-50 sm-pt-72">
                <div class="container">
                    <div class="sec-title style2 mb-60 md-mb-50 sm-mb-42">
                        <div class="first-half text-right">
                            <div class="sub-title primary">Premium Services</div>
                            <h2 class="title mb-0">Business Services</h2>
                        </div>
                        <div class="last-half">
                            <p class="desc mb-0 pr-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non suscip it arcu. Quisque aliquam posuere tortor aliquam posuere tortor develop database.</p>
                        </div>
                    </div>
                    <div class="row gutter-20">
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="service-wrap">
                                <div class="image-part">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/style2/1.jpg" alt="">
                                </div>
                                <div class="content-part text-center">
                                    <h3 class="title"><a href="services-single.html">Business Analysis</a></h3>
                                    <div class="desc">Busiess servies ipsum dolor sit amet, consectetur adipiscing elit.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="service-wrap">
                                <div class="image-part">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/style2/2.jpg" alt="">
                                </div>
                                <div class="content-part text-center">
                                    <h3 class="title"><a href="services-single.html">Reports Analysis</a></h3>
                                    <div class="desc">Busiess servies ipsum dolor sit amet, consectetur adipiscing elit.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="service-wrap">
                                <div class="image-part">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/style2/3.jpg" alt="">
                                </div>
                                <div class="content-part text-center">
                                    <h3 class="title"><a href="services-single.html">Profit Planning</a></h3>
                                    <div class="desc">Busiess servies ipsum dolor sit amet, consectetur adipiscing elit.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="service-wrap">
                                <div class="image-part">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/style2/4.jpg" alt="">
                                </div>
                                <div class="content-part text-center">
                                    <h3 class="title"><a href="services-single.html">Profit Planning</a></h3>
                                    <div class="desc">Busiess servies ipsum dolor sit amet, consectetur adipiscing elit.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="service-wrap">
                                <div class="image-part">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/style2/5.jpg" alt="">
                                </div>
                                <div class="content-part text-center">
                                    <h3 class="title"><a href="services-single.html">Project Reporting </a></h3>
                                    <div class="desc">Busiess servies ipsum dolor sit amet, consectetur adipiscing elit.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="service-wrap">
                                <div class="image-part">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/style2/6.jpg" alt="">
                                </div>
                                <div class="content-part text-center">
                                    <h3 class="title"><a href="services-single.html">Estate Planning</a></h3>
                                    <div class="desc">Busiess servies ipsum dolor sit amet, consectetur adipiscing elit.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Premium Services Section End -->

            <!-- Cta Section Start -->
            <div class="rs-cta bg21 pt-90 pb-100 md-pt-68 md-pb-80">
                <div class="container">
                    <div class="sec-title text-center">
                        <div class="sub-title modify white">Any plan to start a project</div>
                        <h2 class="title3 white-color">Our Experts always ready to work <br> with you.</h2>
                        <div class="btn-part">
                            <a class="readon banner-style" href="contact.html">Get started</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cta Section End -->

            <!-- Free Quote Section Start -->
            <div id="rs-freequote" class="rs-freequote style3 pt-100 pb-100 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row md-col-padding">
                        <div class="col-lg-5 custom1 pr-0">
                            <div class="img-part"></div>
                        </div>
                        <div class="col-lg-7 custom2 pl-0">
                            <div id="form-messages"></div>
                            <form id="contact-form" class="quote-form" method="post" action="mailer.php">
                                <div class="sec-title mb-53">
                                    <div class="sub-title white-color">Let's Talk</div>
                                    <h2 class="title white-color mb-0">Request a Free Quote</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="name" placeholder="Name" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" placeholder="E-mail" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="phone" placeholder="Phone Number" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="website" placeholder="Your Website" required="">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="message" placeholder="Your Message Here" required=""></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="readon modify">Submit Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Free Quote Section End -->
        </div> 
        <!-- Main content End -->

        <!-- Footer Start -->
        <?php get_footer(); ?>