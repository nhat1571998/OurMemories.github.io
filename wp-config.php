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
define( 'DB_NAME', 'our_memory' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '|ewv_v9X}zIchyq]Aj1(vq-CJa;CKpU5Ca7t^iiHM92r:3CLUm7B4D]x|s$A#-m0' );
define( 'SECURE_AUTH_KEY',  '~~d_<tgi]%<`+v*-nIqCI*kxvJ6bm3qc&R+}wPpXIzqoSmV:3Ia>W8BhX4q]=cq2' );
define( 'LOGGED_IN_KEY',    'P@3|k)},3.l%w+Fh_OdJ&L[S9!)6qWV@[{QjsW?e_.9S{)LwDOXC%B*uu<>h_^x)' );
define( 'NONCE_KEY',        ':WM@qc4W9MQJ)_Z%KW&-tnFH_dVO8rLzF0pFtGO.@5mpTX{o<3cush}OnUbBytE]' );
define( 'AUTH_SALT',        '#~1g_ p=`Qgn?A[pZUDz_4H#THdEYk>prr2!N8mV,In.1>4;5`nsS0#[`3kJk8as' );
define( 'SECURE_AUTH_SALT', 'A@6![3YrISIe)BeULE3t,u*HsCM{ZX W9@~bQgKC6>;HkD)Yy@- h:cw-Uvi )|C' );
define( 'LOGGED_IN_SALT',   '10Y$7B7~blf6=]%c!s( h<Jv qBf6zJNV~LpH^j7t3<p9mk7hXCO3:4Kq/H}7vw$' );
define( 'NONCE_SALT',       'j%Q@I0T,Mv%Z(:cxp}6tYGx<deo.:?UvC8qc1w rHa!-5NY_Ta@s}Ga[zshyc`Pj' );

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
