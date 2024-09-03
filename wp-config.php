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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'local');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY', 'X<o8rRq3J`C:B$w{h+siKmHC]Eq:-X/ *w<IWJQ@U0({N$=chfM0~8F^p|v<ae8A');
define('SECURE_AUTH_KEY', ':;o!#ver {nk3ioL3+DMKY|`/G!0ysGQ@}f:WGw7-($u5a_#}.s>#U#<+G7H!$qN');
define('LOGGED_IN_KEY', 'LSD=5W.:l7/;cm&r6?ASA>Q,sYjbQ,O8F@L7$%qW;.V0xyOQc0K+~nzu`][2&! J');
define('NONCE_KEY', 'ibl/e?9Z}1_N,/o#!FUa!7=,!XEp^`:08XPZ(H77C=e7G8v]r##04>TyrZ5!5Fxt');
define('AUTH_SALT', 'xK#gs1 yPo&Qc?sM{B%]*Q R*?R4)8p-4]5qY&#E5EJ!pWJ?EQlKNC9D0G:6UlFV');
define('SECURE_AUTH_SALT', '{}o}jNXjq@Ciwl}U8Y6NIQ+~(ZqRAQq5IOHtls+T.FfEMGKbbO^i!9E *jRko:0C');
define('LOGGED_IN_SALT', 'q2.%lqxJ-tA`_%c6Yp(ptlZA~V<9XYvp =&=uaTF=S@4Q6Nc!%8<l*EfRb/pyEt)');
define('NONCE_SALT', 'CkP)DuGT[,U,<)Yp[3JP0^4iqv%b@u4md1P4leaWw3GPFyg`P :.u_gycK@dF)-A');
define('WP_CACHE_KEY_SALT', 'MW?ANob_Ja#Skyi1DB8Q];nJl 4DF}XadQRqp]Ho(,|FwC,QE0HKOn%yVKO/>yO(');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}
define('WP_MEMORY_LIMIT', '512M');


define('WP_ENVIRONMENT_TYPE', 'local');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
