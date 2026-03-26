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
define( 'AUTH_KEY',          'Q~4u23`Z5ydRVgN-wwGM5L:M,HN-}mkPvw^M5Por]{JLsny7#_Z COxE3}1jdlf#' );
define( 'SECURE_AUTH_KEY',   'O?tfwE:[N)WR[&8jze}QZi-C,&yLZ 8`r&pKyM7|aZ1w<Os5]>KaMfNdy&tkd4y3' );
define( 'LOGGED_IN_KEY',     'r|M=:ePV&AfU;BCd/3=5a,HsDiaT/;:+4^g,,v!vV6;w^TmvM7Pn0*1KH9y[ltT!' );
define( 'NONCE_KEY',         'x_f0w@+h?+,hK}=7!!/T`/:g?7^`N)Q(_&?Bmd1nLuama/@q=E<E(Xn@+Whmq<C9' );
define( 'AUTH_SALT',         '3FNL>)+wa,*|U.R#t0JxQ$0ssXu]6,`q&M;*xfc:i#hT;2v64P2:/jSvjra|Zv&4' );
define( 'SECURE_AUTH_SALT',  '8FL&3}e|C%q)!f5P9H`K]t3&k2^lsC~-)8ZDuea-}m$BY~4_WT5waK8SNTL{wEO/' );
define( 'LOGGED_IN_SALT',    '+uI/]i?f/1o}Qg>(=.YwzY*#F*>D!Nj*oU<* }]f@lL2u^k0wdX7!38B$he2mY*<' );
define( 'NONCE_SALT',        '=[4z#<1jK@S[MONqcMc>TaM+Q1Ay.FkTUW ip^VvL)BN.=I?ZLi{|&9&Py,4;lGN' );
define( 'WP_CACHE_KEY_SALT', '<o6pb`F<!SG$9Bk;BZ:o|h9MXw1L2OlSg=YYR$hG;iM7~wpF+w1JVp:jRJIV)3O=' );


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
