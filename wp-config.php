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
define( 'DB_NAME', 'wpTest' );

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
define( 'AUTH_KEY',         'mT8sk[ 3[)N}).U3+Qr!$76*@Q[@%R.Uezk+.7gL mv&F6R+O9stP&wpfVXU(C-9' );
define( 'SECURE_AUTH_KEY',  'YWnM]_>X.;v}LE?kboTA#)^]1Vj.bu8)>bCwrsR Ybt6!B{]c&i@Id7PTVBVoc;}' );
define( 'LOGGED_IN_KEY',    'YOgrQobHZJmJvgWOeCzXDA>Jx^pgZBwt3t?fxG*Kr|((Xv.caN/!f1MY!,%75<!R' );
define( 'NONCE_KEY',        'voi([ :l1%gfxh(Q@:ShxX4n[^y2(4mBOt SQ%7Z>bjg{3kd!t60q3esdy >_8bj' );
define( 'AUTH_SALT',        'mb+Mb+B8]Gm7.Jd^X}<S3|$F5QF3L(yi{O>:`Tj[4;0z?AQGtpIl.q3o6T=W|^ 4' );
define( 'SECURE_AUTH_SALT', '_b_i@C5{Mhr#Zi?_6SM#,5$@7Hfb.YZ-MT#x=@6oXBY.ng-eWKL2!D3%p^rfM,fg' );
define( 'LOGGED_IN_SALT',   ';d:%;vO6^$C@=GSg<E-#Zd:7nKZC-=XX3j.+BV.,PNFV,wZmhH17O+Z*]fz4Yw20' );
define( 'NONCE_SALT',       '~}M|PQB;=h[I![]sx@A*?/j(+abd oLU1&j+[nkM6RMoC)He8+>9p;#t=_*j.)aV' );

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
