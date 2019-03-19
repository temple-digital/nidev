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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nidev_dev' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '-}<&f8ZG5wsL/0?k0<}QX9Hp|OCq _S$tsN{_#ZVYJCh+.[H$9jTRIB):M i^[sJ' );
define( 'SECURE_AUTH_KEY',  'LQj#F_%8r3E8-*25Y$klSxf,vzmb?-K??hRUV.##Uqs<n6K0d|fp-1 AV=]lmZL=' );
define( 'LOGGED_IN_KEY',    '(.)lZ=Pc]#FChaoxGM`o2kT3*{x*N=BB`51@TwX~|x04rTFXnG|i)3c}Z05{nhAq' );
define( 'NONCE_KEY',        '6H>nJ KW;tP]+DO/*5dj&hMfoSz+|U#X2[N]L=l|)0AGK=`+IH9_r^2[2)KWUV9C' );
define( 'AUTH_SALT',        ')tYIfO=MU]R*)6@SOj6_zxX_=<sS2ZL/bYY)qu`Vr1:4q8m-P -tkDQ?fLD+a*id' );
define( 'SECURE_AUTH_SALT', 'Na`IEG!`P8Yr?a9o5/^9j1x6L]V0#rJx:h#I@GchiEUm/Zs(]+xz!q(;.t0kPnsn' );
define( 'LOGGED_IN_SALT',   'I(#KA9!=v#_?.if?Mhp(3=U5|;g]m{OoceC=LKiL~YlA]Yo3l{g#X^5!28=[+Rsx' );
define( 'NONCE_SALT',       'Xz+i Cb2,V-s>L&=Ls0)xcocC{*i%qq++tU[ D24cg,[#J]!&o:WZe%8{fF(L*Y<' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
