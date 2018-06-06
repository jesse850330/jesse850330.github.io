<?php
///**
// * The template for displaying all pages
// *
// * This is the template that displays all pages by default.
// * Please note that this is the WordPress construct of pages
// * and that other 'pages' on your WordPress site may use a
// * different template.
// *
// * @link https://codex.wordpress.org/Template_Hierarchy
// *
// * @package Bulmapress
// */
//
get_header(); ?>



<?php //get_sidebar(); ?>
<?php //get_footer(); ?>
<? /*template name:Campaigns post */?>
<?php get_header(); ?>
<h2></h2>
<h6></h6>
<div class="ac-container">
    <div class="side-nav">
        <div class="donate-side">
            <p>We all need safe food and clean water.</p>
            <br>
            <a class="side-btn" href="<?php echo site_url() . '/Donate.php/' . 'Donate';?>">
                Donate &#8658;
            </a>
        </div>
    </div>
    <div class="ac-info">
        <div class="campaigns01">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'template-parts/content' ); ?>
                        <?php bulmapress_get_comments(); ?>
                    <?php endwhile; ?>
                </main>
            </div>
        </div>
    </div>
</div>
<br><br>
<div class="cs-sign-up">
    <img src="<?php bloginfo('template_url'); ?>/image/sign-up.jpg"/>
    <div class="sign-up-input">
        <p>
            Get the latest on your food and water with news, research and urgent actions.
        </p>
        <br>
        <input class="e-mail" type="text" name="email" placeholder="Enter Your E-mail For Alerts" size="35">
        <a href="<?php echo site_url() . '/Sign-Up.php/' . 'Sign-Up';?>">SIGN UP</a>
    </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

