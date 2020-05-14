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
define( 'DB_NAME', 'rock1media_db' );

/** MySQL database username */
define( 'DB_USER', 'adminr1m' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Jivers24!' );

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
define( 'AUTH_KEY',         '&]ZWw9X{[1jBsEyHlZ*l,2$5Ad,1a;hzP;x2o=Y):nqi=[QxH.7h$I%#bdUw7|tt' );
define( 'SECURE_AUTH_KEY',  '2j~n_puTt]5O=@ /&ZEu+_r8qqN*9v[BR0 B[.z;3FtkaNh%I}e3^G#t)K8!Kln3' );
define( 'LOGGED_IN_KEY',    '[53BBlF<1hdxeoOW;+PRtmou2I)IA0yIAy(Bb4G+5ntHKx7kH+MuocqnOCW%RxX:' );
define( 'NONCE_KEY',        '//xs?h=Xd{tA]+7QI kH^xix?)>@b$4VKa|*J*F8%?X$2`+fF,#& 90jU%A&AIb?' );
define( 'AUTH_SALT',        '~0N$CtDI_80R|i3GQfXTn9F<FMr/$1Hy=Rd7 blS+;8xAosk2S$K 73dos0|LK.M' );
define( 'SECURE_AUTH_SALT', 'WmpvE^#E.rDapCkj`-+JolnWl$fRN+ctt!V5?,A!@&]>|SD|HJSk}o:sAmGSOv86' );
define( 'LOGGED_IN_SALT',   '<~4][Yh-EC=R2_)O`U~v03[( :NX./?FCq.fcE|<jewL<v#G8x&W<&[a%!1pSB,O' );
define( 'NONCE_SALT',       'yMO[*eN Xm~AoU&Mo%nmT2e [z#A5}?VJ}n]lDHD.V:e(Fj{}gN6X?5{Fb*y&r<T' );

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
