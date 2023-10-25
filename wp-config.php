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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_belajarecm' );

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
define( 'AUTH_KEY',         'CB7|s=Yu,6;4YMjiM)@Q tP{ok8P!ThVB1(]iHOwHmxo670=T):+)S].#TP/pVq0' );
define( 'SECURE_AUTH_KEY',  'U(RX%;e^mT}-MNTxr^ESC2J}-VmVcZ]i:/+-J#}f:t]Q%E_-g%^O)Te9?a}B^[}L' );
define( 'LOGGED_IN_KEY',    '{P9*Qlf&1Z1h`y>J%rC6*6YfRf]:e:*WG|snoSzQTdVoa+npm!`5#T>:+C7wI![c' );
define( 'NONCE_KEY',        '2ku{V|-tDUuw,>{r4*@<DlHm)Mp`{1HSF;4z0$`)^]jQo|<?$LG_$i:Ul@k#ItZ8' );
define( 'AUTH_SALT',        ']t~-bOi)*gQ7Mt~ztRAfx WM[@AjU[4V+9;MrO:k4<I];4ml0,]0oZMM1ufAp;I?' );
define( 'SECURE_AUTH_SALT', 'cN/zElH&5wZZ_,Ne#q1gxME`O4VsO}G7mp61D@.p5Xw>jb;~A(v#W/?a!L.sKnH6' );
define( 'LOGGED_IN_SALT',   'Rq=YOV.@%1J9,rfV%3DTYpdtNfYI1~~xKP#Yj<LC!32}>b<)[rd%-X4.~@+l=}f]' );
define( 'NONCE_SALT',       'q-Tl3omH+zp?5:K_j*XBl!/xuBcsfjr?YYKA,J` 7{K@dH#DWJJZ>#L?9v<f#Vn_' );

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
