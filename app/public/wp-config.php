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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '>/ZJAAJ)qE*7wuoqpA~4-t./Iz#N!iiwZCM#jZ?PGH{iy+g3BKWy_giE3+lL@0tW' );
define( 'SECURE_AUTH_KEY',   '`#R$#mrl9E_)3t|i!HP3_WKPZqj^O^Kps`4?O-l{Ph=,E^*3_pSEzS6dV8$ftR)C' );
define( 'LOGGED_IN_KEY',     'ku]R)aRXfK@f9w/8=-w_l!ipAc ygjfOfYt~=4Q/]b6q(9Nghpt~NE-HSiKKT4SL' );
define( 'NONCE_KEY',         '%RD*tBK6^E~7[1{27Li3SXsD3=kWN&MXgMq~>/kw7|I}_|7CSUk+mq#H1#ub%x}8' );
define( 'AUTH_SALT',         '*3mIzdou<&`lb$8j2sHr?ZGOrAy+5GEPw2lJB&#{Rz.8Fk{Ao)SztN]JP+Sl73Jf' );
define( 'SECURE_AUTH_SALT',  'L+U~xg-4mb3oZ%=q3~x/;Libj7TKxwXCYDB@TKHD1Dvg ja0Qaj`v$WCG:GW4^6B' );
define( 'LOGGED_IN_SALT',    'Cw3$rWM%=kj` ML}o<;qf{RA)u^X}N&I:[#KCpoC#iB]K*o)+kfYOcr|xZ7 NG2X' );
define( 'NONCE_SALT',        'm?i=>lv+$K1~XZ>Vc^@w`~Y<*t^rF*T[^3XD6%t*Z?-Jo$ve&trA-}*R1+.ft=LU' );
define( 'WP_CACHE_KEY_SALT', '@+Wpd$qewY/Yci1-|ZQvn6Dn6|/ey)z]Q#,=/+V9~-V;9yg +4AU7iBOc<8WbGGS' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
