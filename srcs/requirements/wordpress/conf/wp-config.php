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
define( 'DB_NAME', 'DB' );

/** MySQL database username */
define( 'DB_USER', 'press' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_ALLOW_REPAIR', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'cxWpe -zua5kCblv2RfjJ1:`Q#%,.37-L$g85j#!Y+nR.w]4_~B+Q2yYVYK F&MY');
define('SECURE_AUTH_KEY',  ']m~jEdt~O!Cu!%Cp*|RcM+=[8t>2FHESWbSsdSxg:|){56TM|k(AP>U]N2 XF5jp');
define('LOGGED_IN_KEY',    'cy:4(}7ut.>hElgndt/?gKYer:3lT8U,evVf:5fE]+K![>Sv--o/CRek!$!Yuv5l');
define('NONCE_KEY',        'e6{iC-V|{zW<+s)i7dS+<H@7Y[,S:0|4=9XbhL](f/i=f2jb=g+w*=(-~}huD]uh');
define('AUTH_SALT',        ',)vvl$gZ<h|Se%+0a6U3k:M1?x` .,6Vy$E^kJ7^i`EM-(9VljZbQ@;+B_I2-I30');
define('SECURE_AUTH_SALT', 'jg!B03a4Xl?Z5$q7{<z+)*=K3fHQe!gwO?n54SX<hQ+l-#DP!-jBHi|z2?g|rk:C');
define('LOGGED_IN_SALT',   'A3h:M^x;7{C=*sU^Imq(k L+[?d+AY)2<0[RpzbeS:x&k00oPIoK!g15zO*,6d#;');
define('NONCE_SALT',       'z_ ]|/3.*:Z]b;^SWJlxTr6#.olv+#tB!k3p;Yam!*8o&?#AO7dRdn/5>h]xaj93');

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>