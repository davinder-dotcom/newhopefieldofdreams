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
define('AUTH_KEY',         '/fV+h5wumqABR/Jh+DvlqN+jmC5YWVMWR5V5Tztk6D1/QsNylqCMVRRhOoUtUwbLC9C8/Qs6/B6w8eSfSs3U/A==');
define('SECURE_AUTH_KEY',  '9tlt6RfT8lbZRQCRU7ndPFCuoQKBtRYHde/8Oou3iFTPtfTfuv9uQ+2RtuhczAsv5UNrHFAbRmKCSykBYCXOBA==');
define('LOGGED_IN_KEY',    'y6seRmMeexsmbGva3OU5txyzLvNbjnlXZN0o/A+q++G9y0cVNxZq/iWzbCF4+5StXNoBs5M+E8joAnCW4ezzbg==');
define('NONCE_KEY',        'GFNvR1VnkYwF/1TS9Yg2+/pAN+WWPt9+KRCqN4w8a+ggZYMmUcfgtmr2EB8RfH3n9lNE3ozBeqBnMZB3pwDwaw==');
define('AUTH_SALT',        '7xCPW4B+x298iujuOJqjosAzoloU0yIbXmQUi8bZNv7KF7BZu7U/9ql+CChVN4MuwTK5kaUrvZn6RTbch78+ZQ==');
define('SECURE_AUTH_SALT', 'c12D/3u0rswc0jCzOYn4uOceVAdf69hwYtCNTXvItBsC+hrnVnpWzlNjn4JPYJkcwEoJYruw47erVeoeZ0R+Jw==');
define('LOGGED_IN_SALT',   'pRwHoieSjiz1mA+zCq7tXnafgjsFeJLbP0mojNq29VF84uKh7mGhXpn8MxvX4DWuSNXOGUZAJN60f+KK3JxAhA==');
define('NONCE_SALT',       'AJcG6Wi45vrFexUlZwVC4USitHQlP5VgWP1RObKA/ogoAOxbh24+poE9ydyDrHE3Bbs1dlYCIjAjxSX9uTQQnQ==');

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
