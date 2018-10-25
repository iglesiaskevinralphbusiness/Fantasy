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
define('DB_NAME', 'fantasy');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
 define('AUTH_KEY',         '~gp1P}yY=B9my_`T[B>Dnw|CW`1y8Xe;pmZ<I&5kzJ*EhLt(0;9C$-wB4ULi@EW?');
 define('SECURE_AUTH_KEY',  'VVi.|+Nk-nvl5v!N^tI~mC)EGYLxE`Qs @x|RNAgk9!QoO0Cy*<;M9`*h^QbKF!q');
 define('LOGGED_IN_KEY',    '^1F;|Jj)vM!1<_|ow,3NwH(=ejX!6&ZNc%)bNePsF2Cn,&d|8j;|>UxI2eBRdoEa');
 define('NONCE_KEY',        '|.~}O(n-+t8LHFNhT89sE|m0^OPv^T|:@X-LR@_@,^/t3b[1TR=]CoN=]mD6Y0{i');
 define('AUTH_SALT',        '[kF#M[b(qDF~~Tp(+|/vaXN$E]:zFD B+/+P;Z`SXhW--2:uO@,>kD/:[W=T3]u_');
 define('SECURE_AUTH_SALT', 't_KTHq=>Df(d*=MAe2Y(O>4a2_a8D[8Hg+y+:Dh%gA>||VYwHdvI2HonOI3&[d;]');
 define('LOGGED_IN_SALT',   'L5Q5/{S@cE:XF(U;:R.;Cw1~)|px`OQt9HSYC<I=-TNh2vLQ>j=$cK{?)&-`vL+v');
 define('NONCE_SALT',       'p(b[&BF.,3G-wxV8LKr>|t< ,?iAfT#5:v+!HS4;-v$sTsxG, ,`=b9/;75zy(b ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fantasy081995_';

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
