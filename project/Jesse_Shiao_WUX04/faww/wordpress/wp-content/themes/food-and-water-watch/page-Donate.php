<?php /* Template Name: Donate
*/ ?>
<?php get_header(); ?>
<h2>Donate to Food & Water Watch</h2>
<div class="donate-info">
    <img src="<?php bloginfo('template_url'); ?>/image/donate.jpg"/>
    <p>Now, more than ever, <b>we must work together to champion healthy food and clean water for all!</b>
        <br><br>
        Together, we can take BOLD action to resist attacks on our right to safe food and drinking water and
        build toward a healthy future that puts our families and our communities before corporate profits!
        <br><br>
        We take no corporate or government money, so we can take strong and independent stands to fight fracking,
        protect our food from dangerous chemicals and address the threat of runaway climate change.
        <br><b>Your support makes this possible.</b>
        <br><br>
        <b>Make a tax-deductible donation today to help keep our food and water safe!</b>
    </p>
</div>
<div class="donation">
    <div class="donation-info">
        <h5>Your Information</h5>
        <hr>
        <p>First Name</p>
        <input class="donation-detail" name="required" type="text" size="50">
        <br><br>
        <p>Last Name</p>
        <input class="donation-detail" name="required" type="text" size="50">
        <br><br>
        <p>Email</p>
        <input class="donation-detail" name="required" type="text" size="50">
    </div>
    <div class="donation-payment">
        <h5>Payment Information</h5>
        <hr>
        <p>Credit Card Number</p>
        <input id="detail-card" class="donation-detail detail-card" name="required" type="number" min="1000000000000000" max="9999999999999999">
        <br><br>
        <p>Expiration Date</p>
        <input class="donation-detail detail-month" name="required" type="number" min="01" max="12"> /
        <input class="donation-detail detail-year" name="required" type="number" min="2018" max="2099">
        <i>( MM / YYYY )</i>
        <br><br>
        <p>CVV</p>
        <input class="donation-detail detail-cvv" name="required" type="number" min="001" max="999">
    </div>
    <div class="donation-select">
        <br><br>
        <p>Select Gift Amount:</p>
        <button class="donate-btn">$5</button>
        <button class="donate-btn">$10</button>
        <button class="donate-btn">$20</button>
        <button class="donate-btn">$50</button>
        <button class="donate-btn">$100</button>
        <br>
        <button class="donate-btn">Other $ <input type="number" name="amount" min="5" max="100000000000000">
            <br>Minimum payment $5
        </button>
    </div>
</div>
<div class="donation">
    <div class="donation-checkbox">
        <input type="checkbox" value="checkbox">
    </div>
    <div class="donation-read">
        <p>
            Yes, keep me updated by email about urgent food and water issues from
            Food & Water Watch and Food & Water Action.
        </p>
    </div>
    <div class="submit-but">
        <a href="<?php echo site_url() . '/Donate.php/' . 'Donate';?>">
        Submit
        </a>
    </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>