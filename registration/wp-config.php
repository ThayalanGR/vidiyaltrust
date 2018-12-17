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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'vidiyall_vidiyal');

/** MySQL database username */
define('DB_USER', 'vidiyall_admin');

/** MySQL database password */
define('DB_PASSWORD', 'vidiyal@123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ']j;#w-G4i)=kv]A$uKSuW -XbL[$PsbFQ6~ls/r:Zr<S.@GbQ(cMVUl[n_gK`G-i');
define('SECURE_AUTH_KEY',  'C<$_ O#Fz2a~*B9#$w$|B/c+nI6nWazddB!zLm/3W~q)fV*igGD,LSps)6#L8YmE');
define('LOGGED_IN_KEY',    'rl0.V}ZQ<s$A<ATg&HK nbsBPwEBm`H0G_7w*qK MVJkvx;FYH:f;?@P)mpZ|6pp');
define('NONCE_KEY',        'rMB)=O--ma7;[;s%PuJDF9=b2L)akv{BhNH`pP0J10?8HCT 8925EjE+{+2hBVaJ');
define('AUTH_SALT',        'H%A3y[E <n!RDWyzNE%.Vn.tFYGuNi^YIxl+BB>WMcx8r0U0/ksTqncg!]bwI=GV');
define('SECURE_AUTH_SALT', '0O2,?8q,c+qHlPEGIF&HI|P>3NpUx35vdhny]yNs$5i(%{VjK%NRE@#+<GR}1a0D');
define('LOGGED_IN_SALT',   'Q0Kj&xl^LIO!P[6-+dpm<35bAJ#ycYPql{-u-Ok%DtheYSBWzEL^?]C!eGkB$;#Z');
define('NONCE_SALT',       'JFj*:F&5NWMLi?>sk8?~iD:.P IIoI~:l),rb.@q632/IVI5!5s0/sjTL+tK1kA;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
