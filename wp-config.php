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
define('DB_NAME', 'visotech');

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
define('AUTH_KEY',         '|]sqsUyJUcwnO&e,b5J!!-=gs(Sx+t;ts@U-BC:c&FbINZSH)_BT(lFu75_L;0TP');
define('SECURE_AUTH_KEY',  '&coL:&rEED#%.GUPE4B:68I]DKb=Y/,VSnl96)cIeM_P(TiAA8;x~S/R:|$@5Ujr');
define('LOGGED_IN_KEY',    'SM%,T2!w-d/gUQRG&L+uY]^RMj!okl[LrQxk]1`#D]=rD%#swL%Bi0S1Igl8X}t`');
define('NONCE_KEY',        'S#0aGo!hZPn 2Muo~CkQn3nz!(,vZPs5%*|.=EN&$Q>`S_;m+;,#_r-;Q/RrOIv$');
define('AUTH_SALT',        '[6`F%1ZF7ss<Njs?7>>6_jBD:,<goEI_ b$(g>!IjjZ%`.4[w? .prgQtbN11Cb2');
define('SECURE_AUTH_SALT', 'YQkx L&#_ns(z)C6S}cGG]-M&6{m-3l=%G3eo6:C,!T60A%q2@.o@2BsttAT1o>3');
define('LOGGED_IN_SALT',   '2q9_|z%O24lU|<Q6J2hG9&bcH3r]xit{{`4&_xbzZbrjKUGR|5GA8vmfG$eqFig5');
define('NONCE_SALT',       '!tIHr_FU0A10_0(my0@t#kblg`SEg*DmT4x,Nez&i_ZWt,^u;E/kOSfj=,;85ieT');

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
