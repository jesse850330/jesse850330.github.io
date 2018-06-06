<?php get_header(); ?>
<?php $title_text = get_theme_mod('faww_camp_setting');?>

<div class="page-header">
    <h2>Campaigns</h2>
    <h6><?php if($title_text || is_customize_preview()):
            echo $title_text;
        endif; ?></h6>
</div>
<div class="cs-container">
    <div class="cs-info">
        <a href="<?php echo site_url() . '/Campaigns01.php/' . 'Campaigns01';?>">
            100 Percent Renewable Energy for Los Angeles
        </a>
        <p>
            The transition is faster, easier and cheaper than you thought.
        </p>
        <hr>
        <a>
            Stop Tainting Our Produce
        </a>
        <p>
            The produce industry’s dirty secret: toxic oil wastewater is being used to grow our food.
        </p>
        <hr>
        <a>
            Fighting a Trans-Atlantic Fracking Pipeline to Plastic Waste
        </a>
        <p>
            Fracked hydrocarbon exports help bolster the plastics industry at the expense of communities and
            the environment, in Pennsylvania and beyond.
        </p>
        <hr>
        <a>
            Ban Factory Farms
        </a>
        <p>
            Factory farms place our public health and food supply at risk, pollute the environment and our
            drinking water, and wreck rural communities—while increasing corporate control over our food.
        </p>
        <hr>
        <a>
            Clean Energy Revolution
        </a>
        <p>
            To protect our ability to live on this planet, we need to change how we define and meet our energy
            needs. We need renewable energy now.
        </p>
        <hr>
        <a>
            Public Water for All
        </a>
        <p>
            We help communities resist pressure to sell and outsource their public water systems to private
            corporations and keep control of this precious resource.
        </p>
    </div>
    <?php get_template_part( 'template-parts/content', 'news' ); ?>
</div>
<?php get_template_part( 'template-parts/content', 'signup' ); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

