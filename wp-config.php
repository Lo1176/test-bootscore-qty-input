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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bootqty' );

/** Database username */
define( 'DB_USER', 'laurentbinder' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'f>@qpy+3vixR}PwKhx5<lVL3fe8++2=U!8 ZiJ/9wzAR*v^WRc<.OdT{<2J:]9;y' );
define( 'SECURE_AUTH_KEY',  'Jb@tR|$i}F@644kJnp$)WbK1>W96$?~/QlH8;3u:;>q81Nvf5>%,C)@T#&--[FGZ' );
define( 'LOGGED_IN_KEY',    'k*~:gos^PqmYpt>W9}wD{Ne_]+b~rXmbV}8*xS+@y3gBaK=G9YOUy|5>ri*vLtIS' );
define( 'NONCE_KEY',        'bG,1x-;]C?h!h9*OAbfJ3A&q)nZI~9tu5;.VL1zF5[n7:8`L3Bc%4@?Cqqh86I39' );
define( 'AUTH_SALT',        ']C+Oohst%v670V+-VgU_Tb$.k,ng)lU$MwX15_3419PI:$^ T1/3xd*#U?JO6HJM' );
define( 'SECURE_AUTH_SALT', '4X`cd=](*%fTN+b~#2:0k]{b^_nWI(3R;^=n}QQj)VyGM|,UBsd362(76zlD?-SM' );
define( 'LOGGED_IN_SALT',   '~6m9w+DyjB0v/n@*z3{-AzJzQl!!vX~/1[5wM+h%f=VWOnul4GNY6]Jrj8Q+r}2Q' );
define( 'NONCE_SALT',       ')dxCH8VAQWxdkD#^T93PQEIs-%zx!yQ;ob,,x)_w4;xQJh;tDM6.rw6DjU#bV#vj' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '1fgh8_';

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

/** scssphp compiles on every pageload */ 
define('WP_ENVIRONMENT_TYPE', 'development');
