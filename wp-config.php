<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'skillbridge' );

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
define( 'AUTH_KEY',         'hgfu+<Radfh5x$uXKJXj)^W0ZI)^@Ysrp{%d%2,:a~2++>0+10xZbB E-Jhi~3q@' );
define( 'SECURE_AUTH_KEY',  '1;+15|bKeu.:=Js,!XaS$1oyb4`,ed<Am%dcMDLW&jpdi,9]Q@)KI8IeK*K`)b_;' );
define( 'LOGGED_IN_KEY',    'H.xg!K>s_MKBYb:)|5nC~zO^PG?6*ibXtl7C6@Ij3IMW_{>yPb -WRbNPuk*b/>l' );
define( 'NONCE_KEY',        'Q57ZNVx mKYu.4$*BJ|Jr&E!u55MVU!9|PHs.5@~KX{P47k:~>0,}~tUd{+s22{b' );
define( 'AUTH_SALT',        'l*80i!Byrb<7h>`F{Cec*G5,<~FiMb^DgOc|Ennt][^-iVnbX~/=l]xT</ kL{uz' );
define( 'SECURE_AUTH_SALT', '0a$<H]q8x-l_M3^|W=/45z_wgdJy yz:U_HYO(}%d)CBIuIDa5O`wB5|0Y|u>Kz!' );
define( 'LOGGED_IN_SALT',   '+.jS8?6=v;fxr[XH@FTreFHb>N:Ob1c,SdBY4!.RCw`?s@<# ;E!Apr1-#XeJw,{' );
define( 'NONCE_SALT',       '8-vk?uUjp8ioD=0G)us4y>LPW+79p2@G2#`N+@oMOsG~RAXIbEy#ncP#.1wGc!h0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
