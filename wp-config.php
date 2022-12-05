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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'EA,x< );s3R(Y$P(PI{v0FM6dMJjod>:oWs52rkZ.<KMIR4.b91xB2]s_JGjZ|q@' );
define( 'SECURE_AUTH_KEY',  'a(AZ~Yo3*;_YyS9@9?=^4glW&0&J 6+[ymv0NTlXPl29&Xsm2(TCRdczrJfhL>*1' );
define( 'LOGGED_IN_KEY',    'ay [[)=88wo>8(lJ{<q[o(BHW2o|GkOxx!zO`.To2TS=GP;xVAtQh9o#GGLXyB7J' );
define( 'NONCE_KEY',        'biwj (lOIW3{j}&PQ%G$U;G|P[Xe}we~@h!t%h`$cgRE&upf=;Ti6-SXdp=qNbZl' );
define( 'AUTH_SALT',        'REBtV+(}86oUJeZ#PbBj>Je8_1T8`cZ->,Y?Jry.Nj]W+W!uX4/D*_4>Y}#?52v9' );
define( 'SECURE_AUTH_SALT', '{kjYV&&eJ*O`zjsPpN~w8 uM;013|2OJlay!sVH|oC D;zfyWJ&+..qE?NVnT57I' );
define( 'LOGGED_IN_SALT',   'CX)(-K)8ac}KC{9-R*T)!]%Z2faXVKzS]jw%<F9gjFj5fZ7i66#F}m%w-@+ixE0[' );
define( 'NONCE_SALT',       'pC83pKqXg~}QzLg%1F`DO%Q64BwI<!,>sKZWnBUx31jD_GqE!mB;0,xfbT:(P_!R' );

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
