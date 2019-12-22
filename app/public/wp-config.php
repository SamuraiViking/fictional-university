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
define('AUTH_KEY',         'aZ0AFETPDE0QI+Ba0GUuCNVGaDE0Gwf/t43FBbE7//K9Xa3kpcy3n1+cYPzYbXyfGSaANRfrDmXjNkRzuyAImg==');
define('SECURE_AUTH_KEY',  'aUU2HINSiByDiv9KGCyX9KHEuRIQfU1mUWuYZn9RGxY1XAmn0qct10OXuIhB38nNBhtWGqDYiAIUju4K1wdhQA==');
define('LOGGED_IN_KEY',    'HawL29Gw+0AlwsJQc9Uhoy1W6oozOqlsgpaPmOjpnQNeateUWSgsHM/X8BJtcrJGs4rEZbXOfnV533FjcsQgJw==');
define('NONCE_KEY',        'Msc+SuqqS476LBeMK9nazwZtzFXqrSUS9KsoIwEX9tkMoiQqKX9MANOngBltByT4DQWGVrWg/L6AVvVbtuz0uA==');
define('AUTH_SALT',        'zKMxOmLgEBXjlXFWx65I023FCYgDkbLd7lwBtJZNjfKctO8JHvyKpPVD6uaQQIE+0QnbdVmneI4c0CFJ0g8YBA==');
define('SECURE_AUTH_SALT', '88xJpfJbuknqRlNOto7AUvdEnNUH1yOH2FbyXnYFX/DcQ5mTBEo16wClIesPW/tmTc30nk+MBVwlCUzqZUHe/w==');
define('LOGGED_IN_SALT',   'mfe5rl+xeKNugeiJXMCnMgPoH1cLUT5R85Eo0FKkVa3nvH2p6b2SKtdkugcQPgz9X/a2Fz0pficvl2I168bBsw==');
define('NONCE_SALT',       'tFZJ6sJKorm3yRaDOI/yh2vQgsPZVA9h4nvyBe3n4Y/Yu75ImlVogZGgnAUKEg8OyeRoJzqgWIKVFjL0Ia7C5g==');

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
