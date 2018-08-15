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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'kM9UaGW29EAs2n9R1zd6gxN29K45tu7qChgNe+VBs8C17QUSBPSqAEK5CzbMXv2qmLJPfnodSzFcP93whxPm4w==');
define('SECURE_AUTH_KEY',  'ZjTvkFyEbYnXE46UkxrQQZEg11YQG6Q4gO7A71XqkSYvtgCf4lDH5L0hg2b3NycRciYFWefB/nDSx1Wv6DxUxg==');
define('LOGGED_IN_KEY',    'qEzRIageGNX1QMqIC/+lKMm83Zbm6iicaR3qIDVuo6HRLLZ2ar2R+uYtZ5KryMBjZd3HO8Q5lcyIQuQpc0XGeQ==');
define('NONCE_KEY',        'f6uSilWYXLsIYpQDR6cd8MDsYfSHYLh073S1I7DazaHUMrSsYWtEUiyQYbFkrWoC7JeTmm94hiJTPDCXvv6IdA==');
define('AUTH_SALT',        'V1jp3AtI7gMabETlzfdqEJyo1DV/NcNoQ43w+jyN3ZiYqIX4j+QkXj0PhLQazRSxWOw1QwQtBqVx5j76D8DqEw==');
define('SECURE_AUTH_SALT', '+8demlm1usOXZH5rGratsGjsJHCW2x7mM6ElXHYgUKEUo4E1T7j1ja759ZovZ1ddStqd/WxG/UfWFlreZ5EV7w==');
define('LOGGED_IN_SALT',   '1CwCiSyigxODpnZ8GFyDL25B54oLkdL2LNAq72G6Zz2DqHuSMpO3zIheoC4A6sKtl22uNB9VrxhOYB365dVyqA==');
define('NONCE_SALT',       'ilQTi9ejhnySjx3+E6SvPEjwaqjcbxsXeQ0pdid4ZZdAR4gvs1vdnmh1DcxG6UEiIGRcZG2DXXkYzXx4R7C0Fw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
