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
define( 'AUTH_KEY',          'lL+_8fhE4>{nfRXF5hvhpDqql[^]WQ-m;2#mIZ=b}?=}i:M{ lqdq68E(Jbi!:G5' );
define( 'SECURE_AUTH_KEY',   '>J&{*H>NJLf^rxy#sS0Zs}&}<hG$WGV{:f(>v(B~_}8JMAF#24#SO:+GUh[n9m{J' );
define( 'LOGGED_IN_KEY',     'a<]p%f`7U0F(- ak(aaUp*<S|L0Q!Pc#PBdQyK}Pwy%XpoJ fQn0<%E}c:~KEZ5b' );
define( 'NONCE_KEY',         'Gkw43K0n,Wgf;_8dizAj&KU;2M&X[epDw1m>x92u,zH[(c!/nB>A+ /+.(*=0RQ(' );
define( 'AUTH_SALT',         '@GVtq)Vm]JnH3K2BF^i9/o RN6fIHA>qdtG~+dQ%@=T2@60}VHHWsRQ>T]53qPk}' );
define( 'SECURE_AUTH_SALT',  '3BdG:[Me62Pastsad,X3R;LH{r&`B<Y4G3^0Nt,jbrjwH-kH71/xQy 1R)Y>#; #' );
define( 'LOGGED_IN_SALT',    'c?1:|-+Pt2Ii2MyBdRwUNsDI *KptaQ2Znp>&gc9&+6n>Hzi,k=O6/6idXL*O{]O' );
define( 'NONCE_SALT',        '5HHX TG})b&%a(e=n!;CQo=AHSa?ljnGb1x/8u<eR0c2xzp|Af}/*>Sd/cw{Sl$l' );
define( 'WP_CACHE_KEY_SALT', 'xg+<h-,*{l  .CZF_H [=.<~kY6,bR5JqDjrATuJe#~r}{!>wV@[dKlIZ}*2tr[8' );


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
