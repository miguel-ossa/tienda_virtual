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
if (file_exists(dirname(__FILE__). '/local.php')) {
	define('DB_NAME', 'carolinaspa_wc');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');
} else {
	define('DB_NAME', 'dissenyd_carolinaspa');
	define('DB_USER', 'dissenyd_spa');
	define('DB_PASSWORD', 'hermes123');
	define('DB_HOST', 'localhost');
}

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


define('AUTH_KEY',         '7q$+^wBy87O:+iB:|,!T*[9S#&Qv3LEm(.y5Bi Yyf8V/kMCba+H5 T_<Bf={O^s');
define('SECURE_AUTH_KEY',  'r: w>[a-BT~wnX$7C+>K@,~|}:,tY(}2jQ6<q6n6ae:5(;PR9;o}`o[^/f~)y|qn');
define('LOGGED_IN_KEY',    '|4KR9bdjqd*@R)UJww}U2{L)hYI@!Im-i+hnj^f|Sg3]-c4B[.hHDk:Gb4n/1,Bh');
define('NONCE_KEY',        'HjMprh}c|{/l3bRE;l,5*XqJV!Ap%~rDRUj{F-~8:gV<R&,qSK;_%j|%ZKty<J]j');
define('AUTH_SALT',        '|Q%@QU+MT*u7gZC;Xl9jGuuliUWU]Vp+8ll&pl?$`qk@~lx`4e1D:+-eC)dm^H6$');
define('SECURE_AUTH_SALT', 'NC?/2N}T7@-6 [%L-T/]BZ):iBrZ 2$4M BZN{:S;tZe-/jzY(<fWmR8ai+v,JUA');
define('LOGGED_IN_SALT',   'SJ5$nD>]JNu|s(NmC3$S+xc90_2d]4{w&NS?>WNM=}M#19#2|rObHb]GI<a8q_oJ');
define('NONCE_SALT',       '|+}A<pRI |i#Dl7V&*XA+0Gj_e@Ww/KD4o+pD4[O`zH%*tv!ctJSMgO|d_Bz1 =z');

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
