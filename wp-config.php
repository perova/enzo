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
define('DB_NAME', 'enzo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'b/i(1t`~9zBN<H0z[88/]^RT2@YCs-yK=|hg!NAV*OcBIM9eY#i(U=/$?+6QW2b(');
define('SECURE_AUTH_KEY',  'J>6DSk6YDV?$TBpe&5T({q_WSu^A4<A!-x99,$A{|V{dts[x2r&_bA3:LUcNf[bc');
define('LOGGED_IN_KEY',    '(p~wdrl(!h%E`+xmIchFUYWL,7yeh&f,Jc<~BVRYr&Er};X7nr)6@Kb!j1(LT~U+');
define('NONCE_KEY',        'h-9tgZb^Yi9CK;/.+-_N|,;5/[]!f7]@@{W7~:+EJE&,D-I7[Q-&Z-yi}Zvh}~i5');
define('AUTH_SALT',        'L5k+?wjzltoUaJ.%lw|afUGu&;uj?|$EQTC.chctmS<=HoGdwdU(CI9hVr;tJb[N');
define('SECURE_AUTH_SALT', 'o~aME@I<D:Fx:5/YB-xNvs]2k~R+PZzws^n6OH7)dwj`fI!ASdmcfIfi@1o1B#q+');
define('LOGGED_IN_SALT',   'kQ4?[>O1^nVhX`wjcw`0W#q+*wz|-x/Er;XB^Z$|~,d||Kc:9cv/Luu6IgMHSmmx');
define('NONCE_SALT',       '441-&:xuf,(/`+7eqPpoMksDo_Bwwqzf-_wm$tU]:|tY9.Hl@<,<2*#NXNEBY)cj');

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
