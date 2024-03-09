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


define('AUTH_KEY',         'MrbEaoZGGfj2679G28uaOJwCVMStkmmqgdyh5M9iAI2B4jsOs9n/1vAVkt1Lnq8/nRwf09tL2M73Hgd9dY9SSA==');
define('SECURE_AUTH_KEY',  'ySUi9RJEDUx1Gw5Z1U1mO4NYDV90sX2WLH4QngQAYqvL+o5M/6I+U/fDsgJsGpa6S0U6Y0QWwsa0OkSww6dv/A==');
define('LOGGED_IN_KEY',    'DLW1LufQqkBHtmZJyx/ZpmhzwX00xi8nWKwgbkVC6jaRVRM9GnpENaNxf4cwDAbiinyKU1qss6znPAtVG/Fm7A==');
define('NONCE_KEY',        'PozmVEa65m/D6G4TzLlkPIfT3Dsb9y9Up9P6VVJ0GsBwFeI/Fqw8aLielGzjWhHNVt4CIEa0Ch+wX9FLK4Q3Ag==');
define('AUTH_SALT',        'ixsK1o2zD2DAkp8m+m7lGm5ZBMUgsxflvi5k2lAOYDTpKADweL5gNPTx3C59tz7mEbQclHEBJfBzMwogpqnr3A==');
define('SECURE_AUTH_SALT', 'FMvKmm20WfTNt2t0+29nVviqM6L0ti95xJw4lPJypPvV2l8UwOmwTGa3WixJ1i1nH4uYJ6aOUNqcleZNgq+92A==');
define('LOGGED_IN_SALT',   '4/J2JuzAddInMg6yrFM721obEZiqaIUl7h/Z7sBVu6YQzKU8sNNHc8medj+ocQN4UGEgwyEns5a5Vb6LcwaaWA==');
define('NONCE_SALT',       'AUV2izxmrG0XGeeEiJ7lUjk/vLoDozfM3MKIy8LE8XFZA62XO1xvsv7nqQmlvWG8Fnw4nOSCyw+RaQ9Cor1Qnw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
