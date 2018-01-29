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

/// ** MySQL settings - You can get this info from your web host ** //
$url = parse_url(getenv('DATABASE_URL') ? getenv('DATABASE_URL') : getenv('CLEARDB_DATABASE_URL'));

/** The name of the database for WordPress */
define('DB_NAME', trim($url['path'], '/'));

/** MySQL database username */
define('DB_USER', $url['user']);

/** MySQL database password */
define('DB_PASSWORD', $url['pass']);

/** MySQL hostname */
define('DB_HOST', $url['host']);

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
 define('AUTH_KEY',         'Z}c}e+C2*9N!v&y^QSSe(hj|ty<)8M]n-)WJ*~VF_bNffEOYDi6|-tfS+3C}!^b ');
 define('SECURE_AUTH_KEY',  'M$HV+2Z^ZPyLh+C-wd.#OCs2)g2lE,|9P0+4?|@ /<wr(6@VO=2)GjE[Do,~xn9k');
 define('LOGGED_IN_KEY',    '(_jb<g. JbJ+5qYnU8`O+wbdzs-Mp|M3!0pDt!:2[ QDx/i^t~tNhx+Z{@!;Y+,P');
 define('NONCE_KEY',        '[n(]t:IT>m!W+W6na9o 4[Tq(c{CA&+5X-oB>J6)[MMdS$(W>$4b)(;&tJC1QU.m');
 define('AUTH_SALT',        '32[czRMADO)LQDK&?pNW_sVg:)7?7?|?YiHv8jSzy2*q*{/pg)qka(kd(QuBuqIb');
 define('SECURE_AUTH_SALT', 'LR=R5V&nIy|@[&h2$Z0sT.Dmj|@sD|5^zGYc|$6-sU*HzROvk)M-ahveT m(gv%J');
 define('LOGGED_IN_SALT',   'NXg/u|rKq2uMYsxO~Z@0Q6-T)(?s[H>79pAA[i@w~h*79qEp7IO|/bRMg$7X 7G>');
 define('NONCE_SALT',       'K}W$iO[r*gCb?=W;]fiBN#-W^t,NQE2-?npq?#M#HGDl9fZlJwFWJb&UD$n03/[o');

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
