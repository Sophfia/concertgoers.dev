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
define('DB_NAME', 'concertgDBqemum');

/** MySQL database username */
define('DB_USER', 'concertgDBqemum');

/** MySQL database password */
define('DB_PASSWORD', 'AJRru42BHg');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '5hdZ4Z:8!sD]#A]i*eTHe[+*iun7B3P**qi^mXIjTE0|vgk!wgGdRVG4R1!wBF0');
define('SECURE_AUTH_KEY',  'ZWG5COWK[1bE26TI<2iPMF^vYU4MI{yyIC40dorNU80!YG#[peiLRKsl-K<ibXE6.');
define('LOGGED_IN_KEY',    '2*3<mbf]teSWxaeT6AaDH6*.E.{*eQY7}z37^vzn@^vUcQckY7F4UbQ7{7{3ynu');
define('NONCE_KEY',        'lG#<yXj<{y*mmiPmHH2<{*cQUF>JN7}r>@^rvzkYJjUE3QUE^B^vyn$^vUcQNVK:');
define('AUTH_SALT',        '#dSVlZhG5CAH]*.m<]u+qTXmbiIP2TbAI6*.HPD#]~]2+pxWe*imPDLXLT6A.QY7E');
define('SECURE_AUTH_SALT', 'SiSDeHLA*AH<+.iv$bQcQ37^BJ>,jr}vzcQYy^uXbPfnMTI{EMA,<q{y^uXbC0');
define('LOGGED_IN_SALT',   'QUF3F,>$-owVJhkZ8:1RC!w:1|lZd!rgRUscR0NCF0|0|sgkSH1_]_#+ei_mpeHL');
define('NONCE_SALT',       'Z0:kO[S]p*alhO99:1#59:td~_xWK3A{$myjXIMnX7{I3^u$6]2x*t*u+aPXiXeEL');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
