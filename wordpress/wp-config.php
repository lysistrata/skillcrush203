<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'l8-E*HW3@D2t;$D#KT}w;lX0 Y=cR( HDcsJ2k=?pN;-4^p29s1!N)9yWx<7PYnk');
define('SECURE_AUTH_KEY',  'O|QRuiQW*uL0#UewY@c9EhITm/Po@:~v^-1WFbu#tyV@R496Z e|:J^)&w6q%?RQ');
define('LOGGED_IN_KEY',    '5|8YFYN[j--4(E$Ql(|A{1~Q]r30F>+emfJ.,`b*|AqL%|_SRNX;~s)QA*6t0@j)');
define('NONCE_KEY',        'w$jZN.k}d{!!9|JbQ?m7s*}{gN@y_W|+out|Eyzt0c^&s ,k+8TB^UKt:Al/Y]z8');
define('AUTH_SALT',        'iXor;1HW0qyz1Uk7(P #[FB2c93<M.rk6$Vj--(K6+NY+-SPm}7Us?(_N>S>:TFI');
define('SECURE_AUTH_SALT', '0}[RNEfR$?R0q wO6gc|%Pc(3Ky<~k-^g$_.j%cUDz {73-AG{%>{<VAc64`=PK%');
define('LOGGED_IN_SALT',   'ImFx_l8D6+z-#~{Y|>/P)1iG};W!U3wcxD|;/H:pk Ckp{R3_2A^sb->^7=%6|nE');
define('NONCE_SALT',       'F54:?/vnPZ##O8&>EeNW]$I/E e_Jmn).B9MHK|%G@?/R`t$=!WW]Mb~p9Z}#F<}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
