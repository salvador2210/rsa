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
define('DB_NAME', 'rsa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         '!Qo/7wTp3WA-^it8?F2J3&NR;,VQ!w1[b!ge}&anzR_X<zb.7*bsSnA:+<j1T=v[');
define('SECURE_AUTH_KEY',  'f8NKiC%G2P2K$F $w`[{7xZ|ryW{6QT#.#W4 cns%-KnIc_F!@dRV!y`=7tD%s0$');
define('LOGGED_IN_KEY',    't|wVEN:8HYX0%b!s)`$@J>B_M]q%)WRs@4Mnt8tR&3(;;^jw@uQv -*2^|%p:]iT');
define('NONCE_KEY',        'O*NWjs -PqRUIJF6Uwb%-Eagg=`:9=!RmU9?`hL]KR=}jv^}12I@{tMI%E:/ixg:');
define('AUTH_SALT',        'xA}f^!Sc/P`[d,uHPmD)$5_y9f;q`VPA?#9H0NCvjBD/yCKDF~5rZXmcHophPXgm');
define('SECURE_AUTH_SALT', 'yEVTSUCA[M/:j,H_)(*)2&~8!ff`srM6_W{pMv=22Wdo.Av3s-9a*;q_{ =(bH6h');
define('LOGGED_IN_SALT',   'ITD~PWLBNuCR#t 3nmHVnhssE*Ii?ACsJBz=e1|qPi)2.3ZhnLPSg$dzt&|~m5$o');
define('NONCE_SALT',       'e~#7hfSkuqA3t)Sz 3+4ewc5,HS,;aE,|gR:*G9Ip5/5b1cBj(]c{&s8I -HVWuY');

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
