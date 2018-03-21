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
define('AUTH_KEY',         '8X2gNYBqDhio1XpGBzOGCg0PFDj7hYWz0KYOKpK9zRTrI7HOWDWAyJ79KRIelLvkFEA31WV4DicOEyh30NvBSg==');
define('SECURE_AUTH_KEY',  'jTFo3TALKtKe/2lFNHvN29VgMzgxus5ryfDNuWFxNRZ7Rf4p8sW3yR6nfgtFsdrFH1aRyg+65eeGOdte5XdJpA==');
define('LOGGED_IN_KEY',    '9aqbz7iFdc6hWAOYrDgVY7UkreCJNuMeSO7woUZdRI11o9qI4Lwb/g0trfMVNCeKYwPY2ib+Dk24GPm5u7F+IA==');
define('NONCE_KEY',        'T9If4a1ye9uSA8Y4tI5FEaJo09wp5CsMdNohkUvQJdETwGK7nqsLAtQLwatCb8+LWx7+sQ62oKwGE8nIQl2gnw==');
define('AUTH_SALT',        'KeODoi/w+V/U5p6XBDrSN0KpmRyHpseegSNdJ+ZVVSZu9jW1AiVcCtqxjf7p3gUBmo6yopvpXytuUhysFz8lsw==');
define('SECURE_AUTH_SALT', 'xiwbkhTZ5o2fDMZZ6Omkr2Sqhg+AGJZmlLErsG0g/3PbhixCIi6cM+CkTt5RyCDdnIfsH3P4G40HMyRWfVJJ4g==');
define('LOGGED_IN_SALT',   'gqVZdd0RflS9B7GZcpUwOCuQONbMUq+w00crxZnwe/TYg81nwHJ1rrRbNC8HUXmXtfvFWp78G1VJHnDtFN0AIg==');
define('NONCE_SALT',       'TkWNwXrE5utDDUyOiQGa+ImVbqlg2nOxmwGDc1MyqmBmCscDunSAdsKq9RI3lXgnzsiGSOEkuh+dSNIRwdCYZQ==');

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
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
