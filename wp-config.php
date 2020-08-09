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
define( 'DB_NAME', 'syracuse' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Password@001!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'T.7aT.7aBVB/P35pTMliX&f&YpqY7L&K<3ML-s]>;r-+`9v&+DE?!pE7z]BRsJ,]' );
define( 'SECURE_AUTH_KEY',   '2~AWU{IOg E@<Cpbwu !}F$61F=#FMXa&CBg{BmoD(poLM`$OKirC5u1Ne.@ii4B' );
define( 'LOGGED_IN_KEY',     'J3gCL;BdA^C6fVa+^FoJ[G/^!X[]fki~::mo+X8,5~Zb`~lJJqpVy`g.jIC-eEh#' );
define( 'NONCE_KEY',         '4P/`m0-#J(x%*6U.`}Gk;t/DKxBARy$#[u9EkIS_Egi9%Om^(mPYjrfr-JyG1>[:' );
define( 'AUTH_SALT',         '8?@.@wJNTG)/[$R4v7n;g]|AVCmh?|bSOz@f>Qf;j)IEjne6@<ux$qT_T[1!J.Xv' );
define( 'SECURE_AUTH_SALT',  '=z&7_3Z#&Bal^@k]RF|7bGUun&Yky.9ha*Cz-KyLluju-sXZZl./ouKfFi(rapr<' );
define( 'LOGGED_IN_SALT',    'pO.siqcS9>2Zt~mb}3$d_Uvc x<)XcQt?:%u-4YEbf -dbtiP$;pK^jJZ$/-5Rr/' );
define( 'NONCE_SALT',        '?|&/C:xSV5Eiz!~$N60^bHwn*Yvfp/4cW(N3dRrkO+djc=a%=NIF]mgKP;C4D&my' );
define( 'WP_CACHE_KEY_SALT', 'v@z4F#;xdc@pEz?8qt|(_mq3LY5L`lbzHB[/Jf,zPi4{&!1ko`Wx0K1c0,_Fs)N[' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
