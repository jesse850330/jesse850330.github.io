<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bulmapress
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="is-fullheight">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css" />
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
        <header>
            <a href="<?php echo site_url() . '/index.php/';?>" class="logo">
                <img src="<?php bloginfo('template_url'); ?>/image/faww.png"/>
            </a>
            <div class="register">
                <input class="e-mail" type="text" name="email" placeholder="&#9993; Enter Your E-mail" size="35">
                <a class="submit" href="<?php echo site_url() . '/Sign-Up.php/' . 'Sign-Up';?>">SIGN UP</a>
            </div>
            <a class="donate" href="<?php echo site_url() . '/Donate.php/' . 'Donate';?>">
                    DONATE
            </a>
            <ul>
                <li><a href="<?php echo site_url() . '/Contact.php/' . 'Contact';?>">Contact</a></li>
                <li><a href="<?php echo site_url() . '/About-Us.php/' . 'About-Us';?>">About Us</a></li>
                <li><a href="<?php echo site_url() . '/Stories.php/' . 'Stories';?>">Stories</a></li>
                <li><a href="<?php echo site_url() . '/Campaigns.php/' . 'Campaigns';?>" >Campaigns</a></li>
            </ul>
        </header>

		<div id="content" class="site-content">


