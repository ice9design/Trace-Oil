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
define('DB_NAME', 'traceoil_trace');

/** MySQL database username */
define('DB_USER', 'traceoil_trace');

/** MySQL database password */
define('DB_PASSWORD', 'Smpo31@x(1');

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
define( 'AUTH_KEY', '6-Ql{p18-{c-0WO,G@)N$m{m9z&>poZ,NyJQ<vxUZh$iTcR,Ok7U1V(Lf__)$yEw' );
define( 'SECURE_AUTH_KEY', '@xb7$Xlx3eI/Oq}P3g?_P{vPnG@H76tIl&U`@Pk[/~Jl~d2G C9tu]%2sSzL-c~6' );
define( 'LOGGED_IN_KEY', 'tyG@~vHQFB93-o*>RX`<`%9ez4,U(1BOP)+DbT,d3i!~ {W}>V*t <R#96fq0McM' );
define( 'NONCE_KEY', 'o|2Mg|lQ+0`azJYDUH.Ma57z}-ngf{)4QOmcgL0QhN?zbKLQ~;n*.I8:s G^Ayws' );
define( 'AUTH_SALT', 'VC^N{a87F:aJhY.<TMa`-SFaL_V]D=:PW$4S6(]6-Zg/0O:}8bbS~D*(W2fU}+n{' );
define( 'SECURE_AUTH_SALT', 'lwc&iRgIuv2B) Nb-Y9w&x/?=ja8de,?uyPoco;K5A,]=Y<>o~?K!+M>!O2IJ*@0' );
define( 'LOGGED_IN_SALT', 'Vz3M`&P#_bqXs*n%GFf^G`}L_UvT2y.*.w(6@_k.8+MJ{tJ{C=74MzcgR+S+!e/]' );
define( 'NONCE_SALT', 'eKz92}vU~nORea?MUEP=^U(+F+<M5IGQfR>&$(V68N5 `6%Yrp|vjXNdYue0o QK' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wppi_';

define( 'DISALLOW_FILE_EDIT', true );

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

define('WP_CACHE', true); // Added by WP Hummingbird
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
