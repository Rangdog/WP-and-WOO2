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
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'thanh' );

/** Database password */
define( 'DB_PASSWORD', 'Thanh12345@' );

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
define( 'AUTH_KEY',         '-ArUUFk$3R|*L+TgN|A|z/!Yr/:>L0:MY9!1VtY]qHj))hh^c)>1V:s$6U xz3#g' );
define( 'SECURE_AUTH_KEY',  'OLXbpHS`Sq&Nbn_8.redSA>IGi52`C44i*^rX/~Lna>a4FB36I#[xjvwHGw Uj!Z' );
define( 'LOGGED_IN_KEY',    'b</lx2ad&1uj5(w9VEZWLqiZVq)G=zCf71#&OdR5*c(~ jbuFY,<a%R5~tAe5**9' );
define( 'NONCE_KEY',        'ETZtM(Dk1h/ ,Xi*H_zsU4{XrA#v,6Nb?cf#:S9X h=9SQee%58tl2ro/-0nAihS' );
define( 'AUTH_SALT',        'IJ,nN>jWPb{z4([k|6s((6B^60y4[~bRkb^|o(NB%+<)&y9k%1CAWR}NV22Xk7%e' );
define( 'SECURE_AUTH_SALT', '{vpZj`kn )T*NWcN+iGA$?qr1r=/(Uu_ZKe 1_?QW/rE._w_]aEzX?oeoxjgJ:uZ' );
define( 'LOGGED_IN_SALT',   '/YUHCcz3alBUL,[5LJz9dQ_gP2WI(&b7e[Y>JN6o~sJGN*!=Kon=TZrwk!y(pbII' );
define( 'NONCE_SALT',       'yV>ptgHo/BKy,t)&?hR&w}y8g9ZfcNQDYR79 D/.DZ~=}NO{+ev)G<chh;6YoT5X' );

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
