<?php get_header(); ?>
<?php $title_text = get_theme_mod('faww_home_setting');?>
<div class="home-story">
    <div class="story-info">
        <h1>Factory farms can't be fixed. It's time for a ban.</h1>
        <p>Regulation hasn't worked because our corporate-run food system is broken.</p>
        <a href="/wordpress">LEARN MORE</a>
    </div>
</div>
<h2>Our Work</h2>
<div class="home-flex">
    <div class="flex-container  flex-border">
        <h3>Working in local communities</h3>
        <div class="flex-icon">
            <img src="<?php bloginfo('template_url'); ?>/image/icon1.png"/>
            <div class="icon-bar"></div>
        </div>
    </div>
    <div class="flex-container  flex-border">
        <h3>Advocating for fair polices</h3>
        <div class="flex-icon icon-fix">
            <div class="icon-bar"></div>
            <img src="<?php bloginfo('template_url'); ?>/image/icon2.png"/>
        </div>
    </div>
    <div class="flex-container  flex-border">
        <h3>Taking legal actions</h3>
        <div class="flex-icon">
            <img src="<?php bloginfo('template_url'); ?>/image/icon3.png"/>
            <div class="icon-bar"></div>
        </div>
    </div>
    <div class="flex-container">
        <h3>Investigating the issues</h3>
        <div class="flex-icon icon-fix">
            <div class="icon-bar"></div>
            <img src="<?php bloginfo('template_url'); ?>/image/icon4.png"/>
        </div>
    </div>
</div>
<div class="home-donate">
    <h4><?php if($title_text || is_customize_preview()):
            echo $title_text;
        endif; ?></h4>
    <a href="<?php echo site_url() . '/Donate.php/' . 'Donate';?>">
    Donate Today
    </a>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
