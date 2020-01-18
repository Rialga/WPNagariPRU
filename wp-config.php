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
define( 'DB_NAME', 'pru' );

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
define( 'AUTH_KEY',         'L-@]v03!KVUEMz0zr+/H1i9I9X)cVWY:$YHB+PitzzofYo6q|>752UAVCLgh7Hcj' );
define( 'SECURE_AUTH_KEY',  'ONUM)mJ3tpw$f%c3DLUl+S#n)8lXX$6gw]DELyM=Yh>)+F>JP5S9u]GJ>ScB]@hO' );
define( 'LOGGED_IN_KEY',    ']ydf(.~:<Ik*_et$s;Fo,J{y{M&p&ib7nj?m1Ki@oDE5xq|Y7T*d{%7PB,tR)Tv7' );
define( 'NONCE_KEY',        '.g]Nwh<>}V[ATY>2PB1Df%_a9oPde6=&.G<Lq+KBnFt~lGr:T}UG.Bt]9}0m)s_9' );
define( 'AUTH_SALT',        'W!h(&;)0a`%CeJ&%_7 #3dh9/O`/k-a%vJwz=us#jz?[#]{e;<hWaeYkhOE1zf=`' );
define( 'SECURE_AUTH_SALT', 'vX}V9FV^bOrk$&[!:zRG&+w|rx:+oCfYFFhVYWIC3  k09K!<>HhZw&)1p)-<=6{' );
define( 'LOGGED_IN_SALT',   'm?Es]A ZSDI(?]rXC.qO_PVtbm|y.3Sxw+bvqdftwJ.c>po{68<h91~+,B#%b/[5' );
define( 'NONCE_SALT',       '9ysQkT67NjqqlaU;s-{%YZYJwi?k0f_10H:TMDpn%4gt^NQ`H<Y~eWV65PdAc&3R' );

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
# Increasing memory allocated to PHP
define('WP_MEMORY_LIMIT', '256M');

