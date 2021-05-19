<?php
/*
Template Name: contact.php
*/
?>

<?php get_header(); ?>

		<!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Section Start -->
            <div class="rs-breadcrumbs bg-6">
                <div class="container">
                    <div class="content-part text-center">
                        <h1 class="breadcrumbs-title white-color mb-0">Contact</h1>
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs Section End -->

            <!-- Contact Section Start -->
            <div id="rs-contact" class="rs-contact inner pt-100 md-pt-80">
                <div class="container">
                    <div class="content-info-part mb-60">
                        <div class="row gutter-16">
                            <div class="col-lg-4 md-mb-30">
                                <div class="info-item">
                                    <div class="icon-part">
                                        <i class="fa fa-at"></i>
                                    </div>
                                    <div class="content-part">
                                        <h4 class="title">Phone Number</h4>
                                        <a href="tel:+088589-8745">(+088)589-8745</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 md-mb-30">
                                <div class="info-item">
                                    <div class="icon-part">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="content-part">
                                        <h4 class="title">Email Address</h4>
                                        <a href="mailto:support@rstheme.com">support@rstheme.com</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="info-item">
                                    <div class="icon-part">
                                        <i class="fa fa-map-o"></i>
                                    </div>
                                    <div class="content-part">
                                        <h4 class="title">Office Address</h4>
                                        <p>228 Main Street, Georgia, USA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form-part">
                        <div class="row md-col-padding">
                            <div class="col-md-5 custom1 pr-0">
                                <div class="img-part"></div>
                            </div>
                            <div class="col-md-7 custom2 pl-0">
                                <div id="form-messages"></div>
                                <!-- <?php
                                    $get_form = get_posts(array('post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1, 'name' => 'コンタクトフォーム 1'))[0];
                                    ?>

                                    <?php echo do_shortcode( '[contact-form-7 id="'.$get_form->ID.'" title="'.$get_form->post_title.'"]' ); ?>  -->

                                <form id="contact-form" method="post" action="mailer.php">
                                    <div class="sec-title mb-53 md-mb-42">
                                        <div class="sub-title white-color">Let's Talk</div>
                                        <h2 class="title white-color mb-0">Get In Touch</h2>
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
                <div class="g-map mt-100 md-mt-80">
                    <iframe src="https://maps.google.com/maps?q=37.803467%2C%20-122.472369&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                </div>
            </div>
            <!-- Contact Section End -->
        </div> 
        <!-- Main content End -->
<?php get_footer(); ?>