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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'terracongo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '2Aq(FuPbeb{u2yJ<E[ieSa-[Goo`lmS5Javl2`y/ulJ;f ,T5EUBaad#LW-C/h``' );
define( 'SECURE_AUTH_KEY',  ';I|7Ku?{T$sZp/$/9eM5|jw3;s cW4-NQliOLDha!;p^HDWg,,_])5tpv>.7Ua51' );
define( 'LOGGED_IN_KEY',    '{Z9_(wWr=k@YB09/^WMqYH#reNV[bb[tbh-;2tf>?`:*SCA:.Z,m_z.BAsFNx?dA' );
define( 'NONCE_KEY',        'm,1EPx{<H@ztbQ$%SpYhB^Gy/8V50f0(#yHU|[(Ty_7#/ZIo~VSDNXH%z76phhtD' );
define( 'AUTH_SALT',        'EK;2#9k<|]K0{nWvK3)suOu>8 DH>!|~f@.9EU++k^yUG*`G:i^zTlk!.Q5RN7QB' );
define( 'SECURE_AUTH_SALT', 'IV6`X_{zO*!R9V?;Zm<%tsj({q9v2ayPgNqU9h<k{Tc@G(j#g,8zQ*DpXk>4/@n_' );
define( 'LOGGED_IN_SALT',   'IY.P=nGPY+UQl&Z9%@ia mPJk hG@5wfqR<V@^KcK{0PKncKlANQq^~.??K=o$V`' );
define( 'NONCE_SALT',       'uGW^sXtBIe.<lxdL#)0pfQ<rAo5Tx4%61p6%t[}$H_0|--XYw+OBAA[%+8X6doFp' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
