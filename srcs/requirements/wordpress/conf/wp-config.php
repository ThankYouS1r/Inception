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
define( 'DB_NAME', 'rDb_name' );

/** MySQL database username */
define( 'DB_USER', 'rDb_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rDb_password' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'G]-_L-:*fLA|. +gzq_f%N(@+D.oi#40OdUMui7C{T) RgjS*KRtUsub+Pvtq@y.');
define('SECURE_AUTH_KEY',  'DHO>IC_|d>j+H0FlsboaEDYnj6g3)3Uz-1kC<Fbd?<ZQX81u>y(T8w7Mqw*KBNg)');
define('LOGGED_IN_KEY',    '}2IoDL-+Z78`_6}120_ndV2 jB.^]_Jy7_x/V4pX[{1KaF!P+SgnRZJU7,ms&/UO');
define('NONCE_KEY',        'T1hged_E=-fa/n+Ky|iN2X9,<X:*0DpAKy6G+O3)U=ry|f51Fpt{r7Y[I-RfAcD|');
define('AUTH_SALT',        'a9G5N)-H7+6pK Kz Qp]+*=Bewwbw4WM-DF`xlGT8 Mo .bK&>(5n`_#P>^sX)v7');
define('SECURE_AUTH_SALT', '^iNvI_t/gu~=4Ro;KY`fD-e2Rr+XVf<V@&%_Flx4{}x?<{$sN^T5e}+6*zdaSD2U');
define('LOGGED_IN_SALT',   '/-<pT2tcYxps@+ Ntd3dFqbJ~BWQE38a;&-W^2We%XSh|+S|+5E9=o@>G&ooJtR!');
define('NONCE_SALT',       ';ZA3|dk5([&#+lK0%dhLRb2-[)ptk/30@,J-;++h#+}tz-FMy2*e8(6L dj6-,ek');

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

// $_SERVER['HTTPS'] = 'on';

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>