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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dLB/Ha/3PEFtvulGLtKz2HE1Py3xzeylc5ZVENAZSazY0D92V4n7isPkdyqQUTRnre94u3jrhCqK14IrEDE+JQ==');
define('SECURE_AUTH_KEY',  'qH2I8XbzUBaJl01YsEqEvDrCRDcppS/oN2/nZB9NfRXX6FNdNC8PopCljuyScVopBh0qqsItJePeiJQ2FcftXA==');
define('LOGGED_IN_KEY',    '95/kxIgY6nvA+FNNt9PhlvNi8iHCGN7segc8KxIlfZ4KxJ6RPFFA0FvIRsXIoytlz9b9V8Cud/8aRnvQPiRSHA==');
define('NONCE_KEY',        'c8PU3bTi8c76J0GpF9whUdKmbtIiG6bK2iXzfPL+7AfB74hZ6SCOmRjjYK0Nu0gBKDm2RwhuURkPvvSR7k6vKQ==');
define('AUTH_SALT',        'KKcPOAHkSZl6dE0X7+929G81o4ABELaa7U3X5/vzOPC/50aNz+5Xlknf971nw6lEQk+DRajjc1TBqcFpG9fz8g==');
define('SECURE_AUTH_SALT', 'ZkClpHFWiAOv3DR/3nCmoA0WY+tIDzJx5FfTgF+554kFmRDpQ304nEQj7bLMJFo2DpET65ndmV/gT9AA/ADamg==');
define('LOGGED_IN_SALT',   'zVd1o4iiM2uofK756RbesBN/LvTlm+DAeLklopgixIl0tBLaUkfGoH+2jmJJYrzHtC7BXrE/YyNbomUHBcW9xw==');
define('NONCE_SALT',       'f4eMmB7EgMVhsxcGy0v4pYyIXEKWPIqztV4OZVSESozrjw5bkOOtitX97yNUGcDBPuPli1MixHqT3XSYDlZ3GQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
