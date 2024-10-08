<?php 
# BEGIN WP_ENCRYPTION_COOKIES
@ini_set('session.cookie_httponly', true);
@ini_set('session.use_only_cookies', true);
@ini_set('session.cookie_secure', true);
# END WP_ENCRYPTION_COOKIES

define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'future' );

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
define( 'AUTH_KEY',         'vs . (v!Ucyq:/5>Uz2tb<(u3s/AW+%#i~j]O[7;-,^9:h{2=kI7DpYfkc7hk0X+' );
define( 'SECURE_AUTH_KEY',  'x[tr-IwUs`v[|_$?~D^I.G@-|W5  sHz][Jb;rs[8p&qeEAs$O2.q{N53vX^XfV_' );
define( 'LOGGED_IN_KEY',    'G%f)i(<d+ oKh3Zq&Z}r%^2fo;?;]:]mFjXK$s7D02dLw>J~/E/@?N4M!51WImCb' );
define( 'NONCE_KEY',        '!OBWP4yF3`@WT_%jXV9V[?>#54c5{b@ORD(|42@v6|dk>(Re(L6MIa7kyQp!thv.' );
define( 'AUTH_SALT',        'Y0[$ps5N|G1F,,:9}Kq+!Ns|Qf-l,0Wv`D73bo`DB[6ZLwV0eU>Q;X86e!,G}u2t' );
define( 'SECURE_AUTH_SALT', '#rJywoBesipZ$+Ar2tHVhp#h=2]q4fW X<%F0H6NH=/fL1WXEk]e2TSDX1>m ^*H' );
define( 'LOGGED_IN_SALT',   '[_HKj9X@~r@~<fMYWZ?iaR6x_}I[d>7%E|RuP23U8yFuy7wuU`(qe~Q<EP%iFDLO' );
define( 'NONCE_SALT',       'L4~}-gI.M7bl&DUqcB@KotPVLAG^O.@6E2VhCex]?xV<2+E@(MlHxUw{~d6ZdRV)' );

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
