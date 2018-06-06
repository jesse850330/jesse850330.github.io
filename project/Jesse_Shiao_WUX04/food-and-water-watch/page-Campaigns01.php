<?php get_header(); ?>
<h2>100 Percent Renewable Energy for Los Angeles</h2>
<h6>The transition is faster, easier and cheaper than you thought.</h6>
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
            <img src="<?php bloginfo('template_url'); ?>/image/camp01.jpg"/>
            <p><b>Energy experts say Los Angeles’s electrical grid can reach 100 percent renewable energy by 2030,
                    leading the way for California and the rest of the country.</b></p>
            <br>
            <p>
                A new study by Synapse Energy Economics shows the Los Angeles Department of Power and Water (LADWP) can
                rely on energy efficiency, increased storage and smart management of the electric grid to achieve this
                groundbreaking transition.
                <br><br>
                While there are many ways to get to 100 percent renewable energy, this research presents two different
                scenarios: One relies on more utility-level, large-scale solar, while the other emphasizes distributed
                solar (like rooftop installations).If the city adopts a plan that relies more heavily on utility-scale
                solar, it would not require building substantially more renewables than it would in a business-as-usual
                scenario. <b>And transition can be affordable: A 100 percent renewable plan that relies more heavily on
                    distributed solar is projected to cost less than continuing to rely on fossil fuels.</b><br><br>
            </p>
            <iframe src="https://www.youtube.com/embed/p6-oOuEKueM?rel=0"
                    frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <h5>There is no time to lose to protect the climate, Angelenos’ health and the environment!</h5>
            <div class="campaigns-info">
                <p>
                    The case study defines renewables as wind, solar, geothermal and hydroelectric energy only.
                    No dangerous nuclear energy or dirty biomass would be used.
                    <br><br>
                    The Los Angeles City Council has instructed LADWP—the nation’s largest municipal utility—to come up
                    with a 100 percent renewable plan, but the department is not set to release its findings until the
                    middle of 2020. This research shows that a clean energy future is feasible now. There is no time to
                    lose to protect the climate, Angelenos’ health and the environment!
                </p>
            </div>
            <div class="campaigns-info-img">
                <img src="<?php bloginfo('template_url'); ?>/image/camp02.jpg"/>
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

