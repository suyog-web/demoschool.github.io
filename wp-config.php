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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'p-project' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_12ZZ~&!r@<M?d2&k[D0e-6YVGV+Iqm.nR EfN#mtYy>d^&M{X!V9PE9W)>snOsD' );
define( 'SECURE_AUTH_KEY',  'N8FZ0aP9O6cCtvVAdL9Yc|r#xP%e/?y68xMH>?P6T?:Hck?13h41j0DxTrG%s>;y' );
define( 'LOGGED_IN_KEY',    'p5v{uTU0t`DO=Redd}.MMT><lf!(.f$Lpd)=Y)7&ze)EK0OUgD^kk)s^idBf3N}B' );
define( 'NONCE_KEY',        'iBO(.mGXbH0+4+jtf5fv4njf`;:]|JZO~__Yj=_R{^A=RC!no0`kf=coP3_22zpb' );
define( 'AUTH_SALT',        'eu7CPB1y<W?4N[ut+qm;8;MJ[hUW.fuw&Xeuj^%J=A>D}Eme-v!U`@)Xh30[=|SY' );
define( 'SECURE_AUTH_SALT', 'SL7j@EzkbuP?~%*J^E,xrEe$o/8jF[96i9K7}k^4R_!GPfi.(rhKnX09*2AT9kBK' );
define( 'LOGGED_IN_SALT',   'qJ.=SZj>`_}!mWkUJy{N]fe6@l$w:@knb.|IURP5*xJzr|+r|&OazGW1TiXy_.@#' );
define( 'NONCE_SALT',       '`|;0q$FpD?[]r56n/<Xx}/k*Sb>U rUVr5-jUegQ+0`-TU*z^=O@Ubre5Yt4)K?A' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
