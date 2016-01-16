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
define('DB_NAME', 'robbygro_wp749');

/** MySQL database username */
define('DB_USER', 'robbygro_wp749');

/** MySQL database password */
define('DB_PASSWORD', '-6WPS5Jm(7');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mlaqj4xtvbtkg4f8vkcorzgdi65y1xjtrxklspy05gcuimsv37q3ektchebblni8');
define('SECURE_AUTH_KEY',  'xzb66iwmqhlv1llpwfamxgmxpbj0b6lz0bag8s1eoxcpgxbwkbwifrq451othhlo');
define('LOGGED_IN_KEY',    'grroxnxtnoc075ubta62ilnpdokg7ftuqutd3g6b4kis1te8qwmxow0yfz7l0pam');
define('NONCE_KEY',        'hzqxz1kaolomn0f8k3s9ftlx5awfrirfghnb52xbqjhpw6uzpxkgdxvultxidh22');
define('AUTH_SALT',        'jelmiwhhei8bzzxtgqho7gowoqkb1zcpg8nimh92texjbfwnqypx4ryqoyxciorf');
define('SECURE_AUTH_SALT', 'ei7ry4oejfua7rnrjph9mdmwzvashpjybfnmqtnzketsmq7awrofxrnwojv68zfo');
define('LOGGED_IN_SALT',   'bb2tg9rxifua0fgreh2tljac9p6fhi5naxbqfefw827iphbjvo2cremft3naedm9');
define('NONCE_SALT',       'r0mdnmsa0oh9c3vz6tzxrwgasuvpxx1umykyqyemfbqss54nkqusacsssmel6srw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp89_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
