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


define('AUTH_KEY',         'uNjPwoFgzjMnkI/nQF78O02HpWX5XBYhX5NFfFOcSRKlzfsItIPQiQ70hm/9GDdGFPlLw0BqEnep5b/qmbeOFg==');
define('SECURE_AUTH_KEY',  'lbe59aaQb45Rb3pJ0AIsfCEIyls1zVNgRaOOJqir/iku++yZb7jp5pZ5FRhv+UFgvF8yWBPB2N3laGYVi/9OJA==');
define('LOGGED_IN_KEY',    'hNv+iNQtcaAeoe8UN9GDkFnjovrykT2Gkv7PyjbYq9EXGac1SV/ZXvfF4NTzIGQ6fIJ/pZvhQGQVBAz9vMVKYA==');
define('NONCE_KEY',        '7tBwL5AVPD3YOv9Hq7NcudS1fJHJQ3ajg4DJqwZ103JaFuzPn3X3IRq28jcYHxBxtd0sCSVwAzTkOX3/lcQVBA==');
define('AUTH_SALT',        'vB5CVzOLvMUmZwBDxqsJCCH2WwvadbmLNJAYnOjNb8qPZ01QG/kSqjopC+Chaonrdy2SmpBMI6RT+QKqjhRYkA==');
define('SECURE_AUTH_SALT', 'LiuBjHZd5LDBV6nMwZ5X2eJnyeY+jhsxB/ob1eqB/P32nxttvIbSQd7P2MkwOLOlck8LKr17zMVCnPQAEziW4Q==');
define('LOGGED_IN_SALT',   '6GFqb++wULtE9OMO2SZ0PDnCvk9CtEvvrmMP9Jq7Ffzp+Ma4sCwIo0RBq0AisRujVsvfrnX0Ts26hUY2IiFcEw==');
define('NONCE_SALT',       'HrnE4GoJou7uzgPb17+gHCXUfDkK2KhxkfGGTy1CwHyx7C0mhPZv2dbAgNzSV6SU0dD22K0RbiOK5m6IlztmEg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
