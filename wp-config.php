<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'publi_4' );

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
define( 'AUTH_KEY',         '7%8=9U/<v_y=X~@C:4(K^xhdLN=w/o(FjwUZ#O&pT&eQ3p`1]%T.h6&j9al_nbTV' );
define( 'SECURE_AUTH_KEY',  '1L3`yh *3h[enuUOQiKP?4X{MOnm++ZsLb.gw=Z1aNvQ8S,fIve+3IUC^TAi:; h' );
define( 'LOGGED_IN_KEY',    'Mqu~FxBb{;lc0#1*YqAI^o[I;ju1?A7BQ]uIN6W$#n%pd1`J>}!7a2~^w4e^ s0#' );
define( 'NONCE_KEY',        '.Pwl}Y.g}#67A4-,2~b~= NJ2_lGwi3pNEj!C;1w58Yi}5zGs=nk7LEB/80}ie0f' );
define( 'AUTH_SALT',        'sMfwX||XDBoW?841oio7@3/S7SB$aYbi lxZ<E={tW0 =+L{ (@51+i*0,Qp4S2(' );
define( 'SECURE_AUTH_SALT', 'E8^ Z@CNmV@LQ)z+*_q,J%aV{;cW;S~-]U#&0MTi9!y[TYIru@L-He,b~dI_$z7?' );
define( 'LOGGED_IN_SALT',   ':=V8%VR]G%]%x[4$T=_@AO~^*~grwXFq^KMv.7xzTKJ1!&6Bl@|8#dS &}5iPtdK' );
define( 'NONCE_SALT',       '*Y/){-(<|h=3zBWG=WR]F$/+m~Sn]}=55[&K9):5r*i]=9REqt0sB+Ot_](UR]B`' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
