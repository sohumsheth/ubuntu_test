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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'TestVM123!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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

define('AUTH_KEY',         'lT!yR+#D,)2Yx_:x2u(YD|Zx_ptE~abC4wyp+;Wz@fd-*R}DPF!Ax-QA6i_^/yz&');
define('SECURE_AUTH_KEY',  '|hc:sQ99fHm+E$K^h6CmcU|VBU,_YFW.aj5+D-VHZ-_*;Q.{v-)>A&E7`=Fhi6pn');
define('LOGGED_IN_KEY',    'x>L#L<1K 2*-S_i^ V-Y;&Em^ct++Z4e1j8/riJzt2-I5T:8x6M[Zn_=-j#ZAvwA');
define('NONCE_KEY',        'Sy6Yb) y_AS|]->HOE&.G&/J{r$qai]:NNQItn;WxxY1tkrM7kq]Fj^)1W%=7RW)');
define('AUTH_SALT',        'S_WL.)IkY/]253iL7EAd+j.sW~>[Lc+iMVH?8i+~_R!K:xJn5#L}z?~/{+gmTt^-');
define('SECURE_AUTH_SALT', 'Rnx2N=>o_o3+1B]Dt78!dlr}|_U4.#n.:uCFS5_Pl3sNiKb-Z-7EkeR&_|O)`r5|');
define('LOGGED_IN_SALT',   '<FswN]ZQ@i@))2s )V~C?~[9p:)/WcUmy|3Wr0e,cIm?CnIo9/4cKQic6;zQn`xf');
define('NONCE_SALT',       'WBBNDNbS/e[b(Q]>D7? B|WA?S/s3>.3n9)RzYxhOtsqTACm1XzVSOA>Nc){%E,)');
/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
