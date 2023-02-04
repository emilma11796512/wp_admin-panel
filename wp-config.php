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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'pAN:y0Qlybs<g~9iNw<[~]^%]54grZN~+{F_e-a.{fPg3hn<!ngz;bhp1WV$0TE)' );
define( 'SECURE_AUTH_KEY',  'lZuwF{UB/*QZjpS#@jRot^m12{&9itm&8j.A{,LoCPYC3T)MzbD;6%[rREt3pSc ' );
define( 'LOGGED_IN_KEY',    ',pgQ}6x549W0^[Gjswl89~y8-yhn#R8ImJ ,)G%0+ttv*E:IwdE|*}lV^K+(({F$' );
define( 'NONCE_KEY',        'L8H|;auwa#wEnk~h(0EF| 5vqN/:sPj^.g~~; b8#g9kV^Nx{n_//!K.$,58~3$z' );
define( 'AUTH_SALT',        ')%:zC A9n>SDB&DsF>R,Yv*gscs2:RR4pn1hCKy<YO+Yx>:,SWaDB?]4*_K,Vylt' );
define( 'SECURE_AUTH_SALT', '08*>hO6alb};l7_yHZJErtsq{9ZXUJQ{[wgaiv.LhXMsVP^(O_QzltaPi`5$7V1o' );
define( 'LOGGED_IN_SALT',   '>l[pw(Vr}|u>87Icui5r[B`21fpbm_>3b^mA+F!O91gqwhn2;IM9c8QHRpg-ip%V' );
define( 'NONCE_SALT',       '<-.Z#ifo@72AjZU[nGJ+h0?wJP*a^L)wTLy*p`hwInm1@;dn0aOj%v8+]-RI]2Js' );

/**#@-*/

/**
 * WordPress database table prefix.
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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
