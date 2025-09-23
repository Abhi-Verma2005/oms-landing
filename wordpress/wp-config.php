<?php
/**
 * WordPress Configuration File
 * 
 * This file contains the basic WordPress configuration settings.
 * 
 * @package Stellar
 * @since 1.0.0
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'stellar_wordpress');

/** MySQL database username */
define('DB_USER', 'stellar_user');

/** MySQL database password */
define('DB_PASSWORD', 'stellar_password');

/** MySQL hostname */
define('DB_HOST', 'db');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

/**#@-*/

/**
 * WordPress Database Table prefix.
 * 
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * WordPress URLs - Force HTTP for local development
 */
define('WP_HOME', 'http://localhost:8080');
define('WP_SITEURL', 'http://localhost:8080');

// Force HTTP for local development
$_SERVER['HTTPS'] = 'off';
$_SERVER['SERVER_PORT'] = '8080';

// Additional HTTPS prevention
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTP_X_FORWARDED_PROTO'] = 'http';
}
if (isset($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] === 'on') {
    $_SERVER['HTTP_X_FORWARDED_SSL'] = 'off';
}

// Force WordPress to use HTTP (moved to mu-plugin)

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
define('WP_DEBUG', false);

/**
 * Security Enhancements
 */

// Disable file editing from admin
define('DISALLOW_FILE_EDIT', true);

// Disable plugin and theme installation from admin
define('DISALLOW_FILE_MODS', false);

// Set memory limit
define('WP_MEMORY_LIMIT', '256M');

// Increase max execution time
define('WP_MAX_EXECUTION_TIME', 300);

/**
 * Performance Optimizations
 */

// Enable WordPress cache
define('WP_CACHE', true);

// Compress WordPress output
define('COMPRESS_CSS', true);
define('COMPRESS_SCRIPTS', true);
define('ENFORCE_GZIP', true);

// Disable XML-RPC
define('XMLRPC_ENABLED', false);

// Disable pingbacks
define('AUTOSAVE_INTERVAL', 300);

/**
 * SSL and Security
 */

// Force SSL for admin and login (disabled for local development)
define('FORCE_SSL_ADMIN', false);

// Set cookie domain
// define('COOKIE_DOMAIN', '.yourdomain.com');

// Set cookie path
// define('COOKIEPATH', '/');

// Set site URL and home URL (uncomment and modify as needed)
// define('WP_HOME', 'https://yourdomain.com');
// define('WP_SITEURL', 'https://yourdomain.com');

/**
 * WordPress Multisite (if needed)
 */

// define('WP_ALLOW_MULTISITE', true);

/**
 * WordPress Cron
 */

// Disable WordPress cron (use server cron instead for better performance)
// define('DISABLE_WP_CRON', true);

/**
 * WordPress Updates
 */

// Disable automatic updates
define('WP_AUTO_UPDATE_CORE', false);

// Disable plugin and theme auto-updates
define('AUTOMATIC_UPDATER_DISABLED', true);

/**
 * WordPress File Permissions
 */

// Set proper file permissions
define('FS_METHOD', 'direct');

/**
 * WordPress Cache
 */

// Enable object cache (if available)
// define('WP_CACHE_KEY_SALT', 'yourdomain.com');

/**
 * WordPress Multisite Configuration
 */

// define('MULTISITE', true);
// define('SUBDOMAIN_INSTALL', false);
// define('DOMAIN_CURRENT_SITE', 'yourdomain.com');
// define('PATH_CURRENT_SITE', '/');
// define('SITE_ID_CURRENT_SITE', 1);
// define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
