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
define( 'DB_NAME', 'demo1' );

/** Database username */
define( 'DB_USER', 'demo1' );

/** Database password */
define( 'DB_PASSWORD', 'demo1' );

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
define( 'AUTH_KEY',         '5{ !Z;O6v>UoauS227Kn>aa8Iv_Kl/.WnQ@`/5zk%*}s<^ |.8vND!]%C4:Zhn($' );
define( 'SECURE_AUTH_KEY',  'Up16#9`3_K(c5IomV=YPV~LY0Kov]guN$JZiD%G+0i[HyxX4$P=xj[L|_rRI.HT<' );
define( 'LOGGED_IN_KEY',    'iIc)$0jVK{YtGQTWPL|*FM$gx@tg=X^inU;vem7Y|p={IeYmu6rPzbOPip[tc[ q' );
define( 'NONCE_KEY',        '#0pR~uR}?3D#oed=+VVkkC1{&4zwNf,JBQ%4bRjKMa@{[P5[b,C!UAp>5pa>K@(R' );
define( 'AUTH_SALT',        'pa)I$eUa]zRAhBi~ ku=c1Xf,5itUmI%]Xg:ixzI&~[{[W{@?5%taPVpwFolB@r5' );
define( 'SECURE_AUTH_SALT', ' 3}#q8q3#s2`KD~O2kJbH K[^tZ1u8wASFP=8Cy7I!fR?]0?spdT;nRO9kmo=3!>' );
define( 'LOGGED_IN_SALT',   'ePGF=N$IK[iXgxhYW35=c/Z-,JhY@4C<5Cmsv]i)r~tt3bw$m2}!idobs0Di5&f=' );
define( 'NONCE_SALT',       'VApR5C0KdNKgy6m4]jwW y)XxJu*^4*GVEu *..J-`uiZ/[;16:NcR`{F:&SR)MW' );

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
