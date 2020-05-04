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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'affilate_web' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5vi@QZTL&s9{y{_k+{|fcjj]p1k#{/20x#!5sayyB]3wF 2*dNi5JuUl8li<2]4?' );
define( 'SECURE_AUTH_KEY',  'IqK0snzd>&fB3:UG/U:nP5,a:d_:nBAsA| Uq_o= WPk*YLZ-]FrbFH%/Y*t}&4l' );
define( 'LOGGED_IN_KEY',    'Lud)d>Q]FCE;MJ7vkK,OPW9sIU.vksLL36UEEcZ:_6(D~,Jn/#0!5m5@xXDr9dFm' );
define( 'NONCE_KEY',        'lx~0iao<<@W|<p3IR*J(A{V5Kke]Z4DD{3PO}5@V!25[@j)Yr^NAWk^h;qGweY,A' );
define( 'AUTH_SALT',        'Zi#t]Q9=3Bt>VLb>^/#PAi)^gjcd~$$JA;GyBAynvN(^HvCrH.Z/f#KuliE_?*h[' );
define( 'SECURE_AUTH_SALT', 'i<TN=e*F kfcP7{_K9w3Tc)4P@YD;,1]kg~] :`^LORN?XJ%z`+MHi.<+Bz|2+z)' );
define( 'LOGGED_IN_SALT',   'NBF8dQ<+I1RiwMm^tle(>}|wovrb:7t6V]c_L2YQ_hDM:Y(UjbZ=iIMX^<U+<{h}' );
define( 'NONCE_SALT',       'Xt5WnX+cpI -Rg{-*jH3F}($w6L4322%S=r(#Y{=!644V/W*_}]mGw:C7k`b2zI;' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
$isDebug = true;

define( 'WP_DEBUG', $isDebug );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', $isDebug );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', $isDebug );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', $isDebug );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
