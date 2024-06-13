<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '1|fV;91j6Cc{wbaatY^AnNb]fY14Z!(^efAXDI_%9o Fo},9u|!n,! ;0/BNFH_I' );
define( 'SECURE_AUTH_KEY',   '!T:]Cn&xGpr!%g;JW@]0IULryDaAK7|<gL/L,i./U/]z;0Rv&]$?-Sj{47B!hv5U' );
define( 'LOGGED_IN_KEY',     'S8HY5%+Q6O5@9-yZB{qOmBG$0>8xBSYp`+@ef&A9}3/BLx(v2[?R`(A^+Xj>hszG' );
define( 'NONCE_KEY',         '2ViE3s?B^8YVib_XX:K22@_|8~iUoF#yNVNh+uesP#]_?Rf[bWp(-cY`sGGT@FL2' );
define( 'AUTH_SALT',         'm>c$L*2,-#ELy0Xto;}IPf=aQB/(Cmawi4+i&f4F;!R/ q*wn#Sox$:HbXi?,7rY' );
define( 'SECURE_AUTH_SALT',  'JR^u!^x|eW QV.XsTuI744NF;Ghw#&_T=/2zj)={]?u5;_`*?:Z=Di>26}m9zrj:' );
define( 'LOGGED_IN_SALT',    'N]2)}5j}s8Z1U5YUG[OT$Cwcj17FyqWWw.4FY,v/BgpVp3d!+)aPD},w*nRi?i>)' );
define( 'NONCE_SALT',        '!(t%I!9>5{,C8 R+Wrg2ITJ(@;;*@3/`1h*R&t_+B|]5*h7PN%C>-(*>^Q:%Y5*>' );
define( 'WP_CACHE_KEY_SALT', 'n8/u**bL#vy%}Ym-ynBW,ZWeEK>5J^OSm)zrW9h6XPiz6cG>z2CyRoA=hmS|~$&T' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
