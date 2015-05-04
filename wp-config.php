<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bitnami_wordpress');

/** MySQL database username */
define('DB_USER', 'bn_wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'bdcb3d9739');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6a201c3941ce2eb1559c2673c4e5fbdd3ff017d2ce84a7607663496f9402c06e');
define('SECURE_AUTH_KEY',  '51ab08066ba71b651e28d08ae18c7bb321cf6331a9e5de55560e106e994837de');
define('LOGGED_IN_KEY',    'ca02927ae9a1b5556e209836225be6f66e4a2b7a116a9c6dc544252596eb51a1');
define('NONCE_KEY',        'b4e08904861953060c62382db229a00384a4e8c5ef95b2dd356eb55aba420440');
define('AUTH_SALT',        '9bfe0bd7ea70e1d879a587f6304a851df4cca06f81df29889c4b66b20660f75c');
define('SECURE_AUTH_SALT', '82688a50bb007c299980802684f1c89034495b00477c67bfc4f7b914be0d4631');
define('LOGGED_IN_SALT',   '9cdc64d846a46e0ecae5edf538d2e92f12d884599c752d103cf4fc04b7fa0aa5');
define('NONCE_SALT',       'a37d89e3f1f1e1aa00965a8efe2aa3a14e164d1cfd9bda77c8bc0afdcf5f3722');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', 'C:\Bitnami\wordpress-4.2.1-0/apps/wordpress/tmp');

