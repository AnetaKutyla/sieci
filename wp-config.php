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
define( 'DB_NAME', 'sieci' );

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
define( 'AUTH_KEY',         '9p)KEtCM?0aE$JR:/L96;p_}`zVXrR5lwSHK_cZq/Gy)A=3R<)<Pu^uC<TyOR8Hj' );
define( 'SECURE_AUTH_KEY',  'En=Ha>MGc~KKFj8`1Q~mWwW m5@,_O^?rbsqa1f/Fq+ky:D0Sz%LI,n$^na=b:NY' );
define( 'LOGGED_IN_KEY',    'I,#FI;%%m&#5i|?(db6JAWK}/I<7LW h*>@oa-.z_k(S9_?(@qmw @i+JzhrwlYQ' );
define( 'NONCE_KEY',        'f=Ba%A3h|NmEJc/X3qglK.H%,%/?ue=8Lmt7]zBD>DaF87yyH8X1IVAyFx[b*-%@' );
define( 'AUTH_SALT',        'z):!)cx:5,=;NN *Eb_M($J9_sng;9~EIeO;_]HSmd=qa<xyx~5h0]Up5+aDQ#R<' );
define( 'SECURE_AUTH_SALT', 'r`]Fty09[z62,J(x8wd:5B9LLcox.)yT:Yd0fzWA=l@%&nzR6ewhROvGJC1[ju(|' );
define( 'LOGGED_IN_SALT',   'MTabfHYuCr:P4Rh?Ft@8l^>[o=A65:!n`nL&@<T3e2d^(xT$ai#`2o37mXdj#D+l' );
define( 'NONCE_SALT',       'aTZF%K#d3UtV%}>~N:Pr1k{bdKep_ }I7*FrAjA4VRbPS[$W-C*.1lI7T|i$0&P;' );

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
