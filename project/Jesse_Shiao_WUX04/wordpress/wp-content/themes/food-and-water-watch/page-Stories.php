<?php get_header(); ?>
<?php $title_text = get_theme_mod('faww_story_setting');?>
<h2>Stories</h2>
<h6><?php if($title_text || is_customize_preview()):
        echo $title_text;
    endif; ?></h6>
<div class="cs-container">
    <div class="cs-info">
        <a href="<?php echo site_url() . '/Stories01.php/' . 'Stories01';?>">
            Fossil Fuel Exec Says 100% Renewable Energy is Possible Now, and Then Backtracks
        </a>
        <p>
            A Sempra Energy VP tells an audience of energy execs and journalists that the technology is available now
            to power California entirely by renewable energy. He walks back his comments after they are reported in
            the media.
        </p>
        <hr>
        <a>
            Food & Water Watch Canvass: Building a Movement Door by Door, Person by Person
        </a>
        <p>
            “If you’re driving a movement forward that will be long-term and sustainable, you can’t just talk to the
            people you agree with.”
        </p>
        <hr>
        <a>
            How One Activist is Fighting to Get Florida Off Fossil Fuels
        </a>
        <p>
            At the launch of the Off Fossil Fuels campaign, Florida activist Brenda Probasco shared how she's made a
            difference in the fight for a statewide fracking ban.
        </p>
        <hr>
        <a>
            The Little Moments That Keep Us Going in the Fight Against Fracking
        </a>
        <p>
            Colorado Organizer Lisa Trope is surprised to connect with a local barista over news of a recent ban on
            fracking across the country in Maryland.
        </p>
        <hr>
        <a>
            Here's How We're Going to Build the Clean Energy Revolution
        </a>
        <p>
            This is how we'll build on our successes as a movement and bring about a true clean energy future.
        </p>
        <hr>
        <a>
            Supporting the Front Lines at Standing Rock
        </a>
        <p>
            An organizer from New Jersey gets a first-hand look at what effective action for climate justice looks like.
        </p>
    </div>
    <?php get_template_part( 'template-parts/content', 'news' ); ?>
</div>
<?php get_template_part( 'template-parts/content', 'signup' ); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
