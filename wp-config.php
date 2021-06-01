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
define( 'DB_NAME', 'cekbarang' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'alfan' );

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
define( 'AUTH_KEY',         '[4Qsbd^>gI00A!<KMcS=SkIz9J2-5EkMQ|f&[&&X>3+&~`>UORG%WC?P3Wy6(t!&' );
define( 'SECURE_AUTH_KEY',  'B-YU8hd&zT-T5<+2mjg)ZEK{yP]+|*L}Lia.R+5vZLOY]@W*AM[FppI]9iZX&q__' );
define( 'LOGGED_IN_KEY',    ']#E.ELuj]<Zq.:}od~1V2B?DI5OPL~g0%^y`/WJBIQR:y~?9t,7|O,72v@wO1kRB' );
define( 'NONCE_KEY',        '[qE49W.=`=ZmoX9>e)tNqqF.r88C@Xy(yi$|B/75sL CbdLLgId%n$kqeM^TO !D' );
define( 'AUTH_SALT',        'v{**,qJ=|fX?}|o06NnK#aQ$z/MaL+.@WV  )1F,-YV^s&8]]WLWCl(Fyzk8#]IE' );
define( 'SECURE_AUTH_SALT', ')h.iu7!l+O=WwK[q3#f];+DHJ00?=.Zz/QQM <vZh4WgsKyFndYE%9w4h<,Kw=;8' );
define( 'LOGGED_IN_SALT',   '(Usxt,Q~gT^AJdxX]b%@,hV%K_V{]6A#LoTbL? U4OwK}zp=nZy_57HlFPYI(~T6' );
define( 'NONCE_SALT',       'V`!7=}e6RUY3`sb!qpy-dT0;P5rVrY~L)M+:/G`4<RO+*KuFwqvFx$udQ@xl{G5K' );

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
