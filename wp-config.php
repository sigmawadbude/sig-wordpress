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
define('DB_NAME', 'sig-wordpress');

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
define('AUTH_KEY',         'KA`kadu 6:&GHnsDQ4R+6dr9/g1Y2Qv;~2TU76ZxG+3-5>U[x%^be{Pn0Dg~#mPl');
define('SECURE_AUTH_KEY',  '@W@?F/<5.bj3=<U719ZKIxrz]SIE_(*z-a?@vrQzK5mPML>iIV0ylQh8PY?s_2w|');
define('LOGGED_IN_KEY',    'pOZM2Tdc$apjIFpg%1c{FU.s tR4Td8o$ZP@*b+_3465ZY;M4Kanjpl/;1VvL>6A');
define('NONCE_KEY',        'WkpPddC6-vj,_)2^K.[XS)2Mka)`]H!WmGk^1|CE8$|-a#mgp936Ed$.u3$E.d0f');
define('AUTH_SALT',        'cwDnt68j-s*Y$#*Jtk$tVmMx}qBE9yC%bGPgJIa.PR>g|Bb-f+;HMvN[(vcs^iH;');
define('SECURE_AUTH_SALT', '!lZ&XLn1WT)#gSb~Wuaw=m,:BNf<`?C3r9$V;D1GpE-~rVE5n`qm86Ee$<%+WM0j');
define('LOGGED_IN_SALT',   'zhjN3Bjx[fK%KnIT&//jB1w.1kbLS2uQPju2k?L8O(=n/p5;ZCL 9!5BwjUGCzGH');
define('NONCE_SALT',       'Sub@|H!aj/P-g^?w[QT/!>T9=zNl|)E?G7}> :NeX.<HUzONuE~HKx+TVms${AL=');

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
