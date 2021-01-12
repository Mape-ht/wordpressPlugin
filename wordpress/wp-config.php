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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpplugin' );

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
define( 'AUTH_KEY',         'n]ezW3|xengH^7F|~stn/<WYZ2&4>C7]^vrr-X:Pd>;F7H87*p&6wg>X3CeANENr' );
define( 'SECURE_AUTH_KEY',  '0CA6Vtd.9/LJpHr58p)# Ba(tIVlKPbV%:V]i <}E(a;ype$q?t-c2~MM,0 RT]*' );
define( 'LOGGED_IN_KEY',    '^ 7IDTum.F7tQKk~F4[TA5bip0vqu|n4n>)`{s=nFRD5~(sRbbVP=fs&0eJ%8cG-' );
define( 'NONCE_KEY',        'pm@P._iG!;b}8qL|RdOsFYvUw2?8k*]y;l/(UrlX<H=FJ$BHmx^cZE6ZP6|Unpu(' );
define( 'AUTH_SALT',        '<$5%yfc;;Xh:U>=kOSW,:^g!6|eLk&gs_p;v;Uqsgb)+ximG}FTkIB!2:6Ce&);}' );
define( 'SECURE_AUTH_SALT', 'UHlY H?BE3uppLzIegZ>RDq><W-PKo}ItWcrmiVO1rZxf;wV24bN3IX eR/0O I`' );
define( 'LOGGED_IN_SALT',   '2r^LV@S6,TP~fT~b$1+mD+v[sO8v_RbRG] [HB0(H^=aD+|cl&BEkkDf;~_a>N4T' );
define( 'NONCE_SALT',       'A!6}axFD)UAiy~LU8EkKwPwt~-w3zba&mBb9Fq^&_5[Wf| #xYb(u5k0}T^Mosja' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
