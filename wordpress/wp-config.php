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
define('DB_NAME', 'gramatune');

/** MySQL database username */
define('DB_USER', 'aminabedi1368');

/** MySQL database password */
define('DB_PASSWORD', 'aminabedi1368');

/** MySQL hostname */
define('DB_HOST', 'laradock_mariadb_1');

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
/* MySQL database table prefix. */


/* Authentication Unique Keys and Salts. */
define('AUTH_KEY',         'Q]km*usb^K+|fC[mFqTx|by)@UL]CVBMDJDMd@1#YZ#S:eujmN}#FO*E#l#hKNL[');
define('SECURE_AUTH_KEY',  'Y@}{k/}|;8(m,n+>>hqc.43i9EA9/3M?uVpIaeuQ&hvW#4|0-/@ArSL@s}hg7^w ');
define('LOGGED_IN_KEY',    '~b[u^BA=5o5L+I<9y-=nml0s:/+IC@.um~Bat.IU140^0r^ ZK$HX.y4M{CjUTCy');
define('NONCE_KEY',        '4-*!s8*xCg*~)-u#TzkqIx_8aDmX~n|{Qz@tqyf|xA,8Bn6HTi7hZxeg ~9#t7/=W4CxlJ');
define('LOGGED_IN_SALT',   'R&dV[l+qi_@m|onFAyKB`9Q()iBit5fkWY+}~h6(/ZSLyef-f[Z)G.0y]3??-QOT');
define('NONCE_SALT',       '8,rVHRpW.d.4L/dhq*6Cr4>`eBmV}eQ7_mK-IY,8y)tUW >6d}Q$j&y#Z{8Bm#xG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'grama_';

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
