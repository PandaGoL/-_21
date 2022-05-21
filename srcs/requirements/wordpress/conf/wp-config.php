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
define( 'WP_CACHE_KEY_SALT', 'cjothos.42.fr');

define( 'WP_CACHE', true);

define( 'DB_NAME', MYSQL_DATABASE);

/** MySQL database username */
define( 'DB_USER', MYSQL_USER);

/** MySQL database password */
define( 'DB_PASSWORD', MYSQL_PASSWORD);

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
define('AUTH_KEY',         ':,X]]FEx=_x8<F7^t(p=hgE,`oJdyv+wkaVQ6l%h%m{`]#TZz`L]Fr`WdJ%Q# /g');
define('SECURE_AUTH_KEY',  '.f`:%325(//F!u)H>[+Gk!oa:BUWyU nAiBws[5m>>BzO>b+q,1JEs78QO]DQd~q');
define('LOGGED_IN_KEY',    'cb=wq],u^()[ZG.[|*1,{>tv/zyH+V|Wo7b55X*l&dx&8TR usfp|zQez6v(>)9+');
define('NONCE_KEY',        '7&E6qMyFlP0P>hL+7@!@t(Z8TGLvvuBybTM^=vyFEh#n-uV>pDGX#WH}(alH`4;z');
define('AUTH_SALT',        '(CP1+Mq]rLHSU,],/J*u|EkEOjT8AL$]v=ZzkhGsVG1jWUt>Pp<2SQkm6SUTi f8');
define('SECURE_AUTH_SALT', 'MC?<gJ[jrDMdfw2>5l}+uBKu00J8Z)upD-S_HKE<[[H.GpC/Z]x%w|06Ewu)6{}8');
define('LOGGED_IN_SALT',   'W|`Z+fU<(ZSH,Tw!L:BM9vZnd1>^dOqeYY-/u0@L=M&ZtEZk+?@QOTBR2>`|H9i;');
define('NONCE_SALT',       'xB#P+A7Ve&WA(72xk15xmB1 ES0G w}[EV8.Wy&hETIo<3<&5FH*wiVi&eQ$-SYU');

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