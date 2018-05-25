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
define('DB_NAME', 'python_computers');

/** MySQL database username */
define('DB_USER', 'python');

/** MySQL database password */
define('DB_PASSWORD', 'nadmas24');

/** MySQL hostname */
define('DB_HOST', 'db4free.com');

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
define('AUTH_KEY',         'X?{F3Lo6 N1>?T91pfZl(d4t0=3YWiM+fwz>OW#F-~/NK>m@t`G>ZLp+qy 51!OV');
define('SECURE_AUTH_KEY',  'n<DYNP2C}4VM/6V6@!$R[BY>8;OGC;:P,ymxx.z8*BuD7F6.ou^c|=)t6Xs`UTq:');
define('LOGGED_IN_KEY',    'KwMe7{6q1$xIMgk2AeYH}HvJJ<},&9Zm^&t~F8)suX$rd7ntWU3b=DJA2yA#;alq');
define('NONCE_KEY',        '92UKSlaL+-Xkw%ka&;_C`SWaRy2T%sg(>,3x@S9IB!kD;T*S$?mSS?=<AhhwD K[');
define('AUTH_SALT',        '^ML[n,#]MBg#f=O8U7&X:dumXuFjP]rSXok)M/A8e0,iT;E1S26(?m tT/w~Bwm,');
define('SECURE_AUTH_SALT', 'EYLH[zHYA7:R/5_80?<2[T5|4n1~41]i5lv7rD+YLDRzd_0U:lPMUbC{(GEb@PJ5');
define('LOGGED_IN_SALT',   'e==!,Tf9ZQ7 +B9T8v/<JG#BPqSJd>j{`A_=%8$oxhX?2]m;ea@<CK5)!q=B?EMl');
define('NONCE_SALT',       '~7qsyxE}lez#|4.McFlkR38N~8NY3E;/$9WHgmV#4unDmIo~@kpYw>=tT0IDnSR+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**define( 'WP_CONTENT_URL', 'http://' .'pythoncomputers.herokuapp.com'. '/wp-content' );*/
define('WP_HOME','http://pythoncomputers.herokuapp.com');
define('WP_SITEURL','http://pythoncomputers.herokuapp.com');

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
