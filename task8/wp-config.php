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
define('DB_NAME', 'task8');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '(iNM]{ QtZ(aK3~|fiQr0w/01(6!?D8K2oD3uGgi0{!|gK{FL6aO(D^*whq;RBb$');
define('SECURE_AUTH_KEY',  '4m *$d4?^6cWp2@)0vei/x-#!Xcdar,(-STO] Ry#:+E*ih/:u&~nF`no=DvU!;g');
define('LOGGED_IN_KEY',    'dWRx*w]iM<xw+_tn5*m#<IwZu#<F+eI#*.tYAVLHF&A.s0)#bnd>i~%gq`-RjHO|');
define('NONCE_KEY',        '!-o%Wt$OYx&J{Z3<B]=NtU,++f~n1e*#)e;[zteESSf7NY<`@tH5J9tt.(cr>3Lc');
define('AUTH_SALT',        '?RaNN%h[5LN?m[!A,b-5SwZ*2Cngmsp@#$g8aWCP{:eI=1jsZ%tSF15j<|-,^0ef');
define('SECURE_AUTH_SALT', 'PDWO`A.cP]irTB?A3s$zDEpVf0t&ZQ>b%JP3!~v~=U@zF^[K[5iZ>}-skTYdOF1E');
define('LOGGED_IN_SALT',   '?5TXO}NXyr1&GKyG/og4Z=nxg%2]0*#y3X)Do?FKdl|4wllaI&b0C)@{3/6U0PLc');
define('NONCE_SALT',       'ae9KA?IH%f*<y77v(Skp|fU|x]TbCebGylh7Wsl7PYKv@}VQZBhq!iyes=:w<mNY');

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
