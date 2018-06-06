<?php get_header(); ?>
<h2>Sign Up to Receive Email Updates</h2>
<h6>We'll send you ways to get involved in protecting your food and water, opportunities to take action,
    and other important updates.</h6>
<div class="sign-up-info">
    <div>
        <p>First Name</p>
        <input class="donation-detail" name="required" type="text" size="40">
        <br><br>
        <p>Last Name</p>
        <input class="donation-detail" name="required" type="text" size="40">
        <br><br>
        <p>Email</p>
        <input class="donation-detail" name="required" type="text" size="60">
    </div>
</div>
<div class="donation">
    <div class="donation-checkbox">
        <input type="checkbox" value="checkbox">
    </div>
    <div class="donation-read">
        <p>
            Yes, keep me updated by email about urgent food and water issues from Food & Water Watch
            and Food & Water Action.
        </p>
    </div>
    <div class="submit-but">
        <a href="<?php echo site_url() . '/Donate.php/' . 'Donate';?>">
            Sign Up
        </a>
    </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

