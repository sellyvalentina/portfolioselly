<?php
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
define( 'DB_NAME', 'SellyValentinaVernandaRista' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'ukALWRAuVw9bHtakF6CwSFHw187JBqMljkfriCFS66iIzRLv1JBHZLG74aGW3pM6' );
define( 'SECURE_AUTH_KEY',  'aCqGxG0YVGX1bUtlysyzrCb971rILj8IzwzXleZoei45ANOAOf73HsWVTwCKiKC8' );
define( 'LOGGED_IN_KEY',    'WKu55jjTXOfp3Z5lxZ2eniW8GdbRMlpErzYuCtnF0iniRBnwpMibCraNVFW5HRwJ' );
define( 'NONCE_KEY',        'u4bXNqAkDlNFvw2YnGCihRy86ssWBW2vpdVo90p84M5vd5OCslXZ0SzbeMWRjUIW' );
define( 'AUTH_SALT',        'UBqOHEsFNfkAxcw5OKIIiTF6avAe9ejEWsBLI9QW2gkJeWM5KIM8csfuq1gM9cJJ' );
define( 'SECURE_AUTH_SALT', 'l0FFBSj1WaSvzS1agPO9jUM5fzIwFvCOtHg8i8hKZLAWfOKw45Afg4WNBeBHXuKx' );
define( 'LOGGED_IN_SALT',   'xlBLWSj92t7cz1oW93k9CRVEPjoevTSHT1ZmssbRRjxT2RyiMj8PLvLhdBMN2AHP' );
define( 'NONCE_SALT',       'pXHmFr1GezzpJKGNtNsTZardTVt7SwaNZvZqVx0vMnqPxXKBcofppz4dY3XuuRLk' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
