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
define('DB_NAME', 'wts');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'google');

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
define('AUTH_KEY',         'S){P<-NU8x1J7l}quK$0N_V*Z9UB>{o)o+AY<CgHtbPC<Fhsd]6QWq>;[hPt~OE~');
define('SECURE_AUTH_KEY',  'npNZ,x`2@$nqp;2a3C[K>Fy!,U.j*NtB8;wZ 5c&VT;(C6ay`?B=NBLLmDqh:6d(');
define('LOGGED_IN_KEY',    'bpCwnJGi-IrsY?4rVESPt30`PVDc%lb e=wSJ$1S[fQBk>s4&@m}%XKta%%0_N`D');
define('NONCE_KEY',        '7)Mr>Xwa+ST5+8s_l%E-[Z8Rvr({xy%(=nbY(K1XxA63h{t]uhVRBYP=;h{(o+9&');
define('AUTH_SALT',        'a%.h92 QtYDY@4`|W-, LCM|NPrFupRrBsI]Dd9Aj.9ejGLdQ64E8l4km{[Qkk#*');
define('SECURE_AUTH_SALT', '3Ue@.v%rGe+I>d^# JQwANQ?XWd`zZ!Rr-a*z-$uf`m7[l6mFpAH-6%]%:H8hGGx');
define('LOGGED_IN_SALT',   'U{H7^Pk/6esFcv]1NxE}uml,aERpdz<{0_Wpwxw@*>szSX~3/Fa}MZofJ?`yNK9i');
define('NONCE_SALT',       'O3MR8J&VMzMI9OUHLJ9wYfqS(IA.sv.dt&SwH2^MI]BM|imQinsa#{q^bd%/37k;');

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
