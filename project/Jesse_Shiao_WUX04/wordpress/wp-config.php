<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Applications/MAMP/htdocs/wordpress/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'X<XTB_TY,UZtUE2UhH@<|l|/+N?yrOcja[Mj)m*3wW/#*Hs.)7@KY9P8JcRSNYk ');
define('SECURE_AUTH_KEY',  'D&O[7!z.lu/djy@20YZ:Qq2wftJ_7`k.a/8l!2<w|+*n?7^`o<hUh}vLAPW(5xod');
define('LOGGED_IN_KEY',    'AikNTWx:?t.TDzjf%l44le A|h`4/sw3zqzOq[lS^{.R2dHc+m7 ?4>-oBd3,<00');
define('NONCE_KEY',        'L4Kqq<x@k!azqzW:[p}BoNcO2W!&Gi$%^@/<%<v:Z1A,+/Fn<;z4GSowz6sv8k;3');
define('AUTH_SALT',        ',bc< sros$TL>yLPS2Y(u<i[<JQ]K{x}gcLK*`CBEA)s,)keOw!X)e)Wh`KK{?I_');
define('SECURE_AUTH_SALT', 'o6MF7cnC5u|@V~-9dx:LyEWWra`f^b+SLc[sFu`1&t,wz~.xqYdTF.~VPSUT@{6H');
define('LOGGED_IN_SALT',   'lKBd{IsQEO(A]zpo6`J9Y+J=FL=WIy+Dv%g~BVsx$>-_{y%sfQlv+?ztVe=C er%');
define('NONCE_SALT',       '|bFq3M5oT:LpRpyycms2.ym0`/yt9(J&CCYK;dZ0o|Gtt!DAn>AWRFHeMMM%(3 _');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
