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
define('DB_NAME', 'flowerpower');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'B+<L/8fvAec[=vA.^M4,R^/y8; i;NS,}/=q@y=]f8gh-w]<FELqw>IVr{M4_fAp');
define('SECURE_AUTH_KEY',  'fGx0*=bEgrZ;AAhvBr6;ST&TegUK-?<$hE?2+vE~h8Pp[YbpJmXlk#FPT)[~E6u:');
define('LOGGED_IN_KEY',    'p9Y;t?,MQrSWxj4lBMrA{Dh[/[ HMvT +ZRqw=u_3]jY_X=Gc[upWLxYmJ6Wq:f^');
define('NONCE_KEY',        '<@e0JU*pFI.?~c6pKB<B:*Ig{-[,[,=^<h[:`V!!*p*yfTgy{k(jI <w}<<>Psk:');
define('AUTH_SALT',        'SW/j}VPWWf?U9MJwKIir@?Ancz~B=kf$~mbu.{Co pI:k%4W2FLsqVXMw.WUb>3)');
define('SECURE_AUTH_SALT', 'TvKI=gEf,/y0O*%nj*fv96}JS);#>9i7SS9tw7GE(U(m)6Y-:gdy7a.!$&>C2^8Y');
define('LOGGED_IN_SALT',   '4&ibLs[iu%NAG?cVo9)YoFjt~EK8c!;dj(3Ts.c>#b,HUWW]Gc|V:ov~BlW*6;=d');
define('NONCE_SALT',       'I!7Xko=BB5wjZo${x&d73crDDj+XJy0 f3<xr6Mbq-}Y 7Ib^0(I^WY~8)@a,AeV');

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
