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
define( 'DB_NAME', 'db_zebtaxwp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         'y?m zBEjIJGMO|jSDFr;{q?*8B)p#WkL?Z}i#zJw }Vh/%N=A?Z]f#2=kwrPX;Uc' );
define( 'SECURE_AUTH_KEY',  'q.]Nn]Zj->}as/:]aQMKo[gu5faePXa2 )zdm-Y$#L!tlErLcm^nlQ4r;PArh(t5' );
define( 'LOGGED_IN_KEY',    '7n4.*{:L(:.D8dk6![s!u1`_!|m}{,D`4*Z[s1]s@r/O ~+9`DZ0v7_]k}eFX;`?' );
define( 'NONCE_KEY',        'TmX%y1PY|Ns3[jLSuWhry}c@el+ti l)&Wrq~4dDKbGw+i%P;_fr2B|X b^J a,-' );
define( 'AUTH_SALT',        '&TpoyhR5fvg)nUcM$YRQ2f/WfpoVN$;ty,n!Bxc{-a[FGn`aC2%FkW.1I3*[vJ}c' );
define( 'SECURE_AUTH_SALT', '/-!4}S%.*xWQucb{ 9XYbTb4Ibr1o%Qs3/#j2Kh ~/qB^}j[3`uWOy9L/G0Z.J~5' );
define( 'LOGGED_IN_SALT',   '5Uqt|r]6?Hs}JU&~^~@/)-3AAC+Xd,D]H_~^^8~/Yi=mk?EE>dc=T:Ohn4;Oa$D]' );
define( 'NONCE_SALT',       'qV&6t]TQmGGpS=tCug8OEBltknIF+ v|t!XF8 sq_gcp~=>_P01<S/rEHOghhY5 ' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
