<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         't5mszaos90p5enoexzffxnonml22zvw3zkrogbn5faeedwfmxpjqdmiwo7mlketf' );
define( 'SECURE_AUTH_KEY',  'udimy0tzoxvcrdpmr1alcxcdmk6ggaavan9maufdzx7uem4htiammpeabomtuepl' );
define( 'LOGGED_IN_KEY',    'pohfkfln1qnmqg1juyqhtpklvjn89yztatdfhigrptyd1sl5q4xlhpx05ipmpqtu' );
define( 'NONCE_KEY',        'f8ioni8q1wqdleal1qcv4xuny87zfdnho74qjxr9vl1fsdudpjfvmudna6hkrtod' );
define( 'AUTH_SALT',        'rc7wxfvrjlxqqolbhk9eqsxagxavnev4yawk5uiugzep0lbi1jh8csacfep7vv7j' );
define( 'SECURE_AUTH_SALT', 'bpwsijm4jkpdwiejzytlxemeyjgctjsbklob2el7lswz7h2oqor1gqgs0o3npmsh' );
define( 'LOGGED_IN_SALT',   'ml0l9dent909qfgltacisntzfvfcxi53qxuihxefzgemfndxybzbsuqkqibtso0y' );
define( 'NONCE_SALT',       'uqj3qrs8mfmzd8nfzdynvrhnvi315vchkzcbgitp80f4ashgdznbtncnsnwhbkq7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp0y_';

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



define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
