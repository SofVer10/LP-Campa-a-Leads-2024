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
define( 'DB_NAME', 'echotech' );

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
define( 'AUTH_KEY',         'y#dol^l)|UaJu/?}Rd8sY)e{y+GJ0,pD#>:CY.qRJZv~FsC(,fH4Zn~428<~/u:t' );
define( 'SECURE_AUTH_KEY',  'vl`ph58|0_^k%~h2`?yM~!DRS:5ehW9)g^blv,+p28 un}kB.6)6Rn0{_[#T)TGX' );
define( 'LOGGED_IN_KEY',    'd]%i*;05A6iSbs&qWe*X0Q<xx-gMdh8P~0S@]D2N}n<7k}rG:-^syY+RA589Fr`V' );
define( 'NONCE_KEY',        'DW_@VMa3Lgg|.]1U8S=~<t,T.D7a8Fu!b]nb%//r|i/0;X~2jbRgmrBcm!-anoL~' );
define( 'AUTH_SALT',        '%$<M>ixI{M_VTa8pOzv;TQOLXaJ*!J (L6] tSP^SbgHwE~1qTK49J,dt0-i6{R#' );
define( 'SECURE_AUTH_SALT', 'IVKg??=xQN!ZSH+G! CcuAy&$.C4!?7^S|/Qwp5~dP;*,;ZWwov1NZR]uwZO4gb,' );
define( 'LOGGED_IN_SALT',   '4h}2/vks#+:$X}kzzQ#6tDYM%xCa&^IT$s-;b>k .]fKcg9q@-*<tyq0t?={c1$d' );
define( 'NONCE_SALT',       '5>}?Q3t w1VP@>FDpd(cvz~QEld2mvC9j=svaFe8H@lP2I|8i&[m8wD9ja;2TF:b' );

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

define( 'WP_ALLOW_MULTISITE', true );

/* That's all, stop editing! Happy publishing. */ 

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
