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
define( 'DB_NAME', 'wptestdb2' );

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
define( 'AUTH_KEY',         ';^v_-X<vpJumFLU5M]^Y/gd=/5gL5b]sBh7`Ur8+calCc{eMJ}`;](GIC[uvGn>M' );
define( 'SECURE_AUTH_KEY',  '{7Kdl?}DU5XT[*q>-|1}/#v0<IigHAJRUHx8QnrIkyOd`la#N=_{BM1C mw%Q3%d' );
define( 'LOGGED_IN_KEY',    ' {F8!E=/>e3&9W4)=o*51%];=%qoEc}?ehH *g=;EF%J6#~:~K4g6PP*X02Bw]N@' );
define( 'NONCE_KEY',        '@xL|,}SL_I*S2?,[@9A9t0SYiq:8q{(tCiRf=xDk[f&Za0RXw7&kXg|p&}FGd$Qh' );
define( 'AUTH_SALT',        '?0dOq% NuMUOg0q ^eyAsQFP!@Fo8K.+g5uG5^Ky=:fe2u)lC!#ev^bs=b`+3rPd' );
define( 'SECURE_AUTH_SALT', '2opf3gWhy3O}w2+m|i:!z< o!:3]LU0]=PW==Y1gm/8x~.e+dR+[(D=Yjy#wR22d' );
define( 'LOGGED_IN_SALT',   'Q!L/MdyDkSP- )5&[)wakWi=`>.X3C(Rc<gR[05IR_$R-Zs.-rdNsu#(jW^fdX)4' );
define( 'NONCE_SALT',       '2W&4j`.2%{lrGY0V$!V}{5wrCME{R<OAQW=^?tqbq=e(vdrM|2Q7BOg2Jo2IO6ZU' );

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
