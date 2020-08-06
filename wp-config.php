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
define( 'DB_NAME', 'oceano' );

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
define( 'AUTH_KEY',         '21TBNbm@2;%nef;Yq)X$PtVrR)p,U&|P[B,PG48A5~Cn#7wm6}5txa$lkl~=>>+}' );
define( 'SECURE_AUTH_KEY',  '<9(LX2PhprkD`t{(e:Jj]YaAU(OfPn%r<svI~@tVZm.Ge(^t9N|KlI5UJQ`w,za_' );
define( 'LOGGED_IN_KEY',    '?ydnrK]OO]O+r &z,fVJkt ReQ6gr)Z8%1mv[^0N+9>*LZ/QDcT`0+p73(7H>h$>' );
define( 'NONCE_KEY',        '{UzMK#G:av,Nl0.aD_n==`)$.;5WXN[GxFM`M@d^={)J;hHRR0f7:t$yiM]?VYAu' );
define( 'AUTH_SALT',        'zg}.fE9,:aF!U:[tN%cof^:gX)?Vu8?u!y)&NmBoztK IS1u.wNvnKOnrEIW3VJ2' );
define( 'SECURE_AUTH_SALT', '_p39UPb,} TL1-| uR[FkpO0%vjw,/8Ar;mNt^/^#:bL0Wa,&)k[JzJAwRWYP)?{' );
define( 'LOGGED_IN_SALT',   '!U0-4-yFx_.^V;tysBd1}K051@2&.!HrN 1-}7{1nBjvK7y{(Zq<5h4btxp3ssaQ' );
define( 'NONCE_SALT',       'a@EE!_{GUAz7fi?gd@E5npUp>g[(0cb4KbHVO!#6:6r>Uj<Cx#l8s/qRF_WOQf2b' );

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
