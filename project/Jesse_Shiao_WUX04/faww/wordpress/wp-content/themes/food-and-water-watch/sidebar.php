<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bulmapress
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div class="footer-info">
    <div class="footer-logo">
        <img class="" src="<?php bloginfo('template_url'); ?>/image/faww-bw.png"/>
        <a href="<?php echo site_url() . '/About-Us.php/' . 'About-Us';?>">
            Learn More
        </a>
    </div>
    <div class="footer-detail">
        <p>
            Food & Water Watch champions healthy food and clean water for all.
            We stand up to corporations that put profits before people,
            and advocate for a democracy that improves people’s lives and protects our environment.
        </p>
        <br>
        <b>
            Food & Water Watch is a 501(c)3 non-profit organization.
            <br><br>
            Food & Water Action Fund is a 501(c)4 organization.
        </b>
    </div>
    <div class="footer-side">
        <b>
            Food & Water Watch Headquarters
        </b>
        <p>
            1616 P Street, NW,
            Washington, DC 20036
            <br><br>
            Main: 202.683.2500
            <br><br>
            Contact your regional office.
            <br><br>
            Work with us: See all job openings
        </p>
    </div>
</div>
</aside><!-- #secondary -->
