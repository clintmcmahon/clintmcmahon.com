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
define('DB_NAME', 'clintmcm_WPB2S');

/** MySQL database username */
define('DB_USER', 'clintmcm_WPB2S');

/** MySQL database password */
define('DB_PASSWORD', 'B:KMQ@Cj2&qRnwOYu');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'fed7b6789ddca52fa2696e99e8178a4896d50a6e5f38bbea4ceec6d2fd2b9506');
define('SECURE_AUTH_KEY', 'e3a91b708bcfe56c1f6852034537c267e1c307dc1e89efd10afc2ad5c9229ffe');
define('LOGGED_IN_KEY', '944ee8c071335ef1e4a48e076d686a3e88eac4c449e57f378d8e75901c5d8884');
define('NONCE_KEY', '884b64ae8a2cce2aea2aa76f2f2f9f4fd5ba9ee9bb5a5fb3e43ef1008c29e15c');
define('AUTH_SALT', '74c0c910f77e8dd802b7fd50fe64faceb30298409df0d5bb0259efb5abfe9302');
define('SECURE_AUTH_SALT', 'd55fa92bf221e3391164e4f5b26bfa0124970f81dadf10b7fc405e2c4238884b');
define('LOGGED_IN_SALT', '9594673adb9966f0328f73d2d7be43257f7fa904a00bb07ada0b454fdf17f3d0');
define('NONCE_SALT', '120ad8e7b0b1d3df446ffb972342377555b7f139fc4b2f89d1d428d77f8e154c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'U45_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
