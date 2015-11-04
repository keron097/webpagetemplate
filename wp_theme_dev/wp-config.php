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
define('DB_NAME', 'wp_theme_dev');

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
define('AUTH_KEY',         '<K7O2T~&R&}OFZoV`QVP8nAUBzz9TS-ro$_VQoW1+ef=xUx1dom}g4TFi-+5WIKR');
define('SECURE_AUTH_KEY',  '2p;|[?(xS&;o2-~f_n(UO?syyMO?3atqr5T>l`<,^YZVW4Z/M0$K=aY3a:+|iD6Z');
define('LOGGED_IN_KEY',    '_=bWx/kiPr&|7y ]J<_dY+N!T.XW@B/AjEJ-Io.s/.$y2Vm1NfD&QUCFhVZM!DP[');
define('NONCE_KEY',        '|ioXQy,&NRy_l><u~-ZSs5?VlJy@BXknR[q}EeOPa5G+td2}5,WcP}9&Uz k.ggI');
define('AUTH_SALT',        'JX8j!@?Xjq+NqdNUU/1`aho7-q;oDI0|-S^mT(u;G1-%!2p3#A{<b_v;4^qju-qJ');
define('SECURE_AUTH_SALT', ':x=j~5RioeX=y;NC[-AQ|V+e6,4g  <-Ftpaa(@J.Qq]|Zu=K/1dbF]|$I6u+(4J');
define('LOGGED_IN_SALT',   'US`&z/%j+2CUT+{$Nx|O>}7CJe]LH|$Py-hUWw-_yCN7Rk?L+swSh}HqSjfs_T)F');
define('NONCE_SALT',       '4iN}-TR.gXhTn&C*ffmyzgv|pOi+Pafn}W}k!|qArLsx`&K]MU([n03.9.#*i*{~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'k_';

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
