<?php
/**
 * The template for displaying 404 pages (not found)
 * 
 * @package WordPress
 * @subpackage Open_store_hp
 * @since Twenty Fourteen 1.0
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
                <h3><span>404</span></h3>
                　　　<p>お探しのページは存在しません</p>
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
	</div>
	<?php get_footer(); ?> 
</body>
