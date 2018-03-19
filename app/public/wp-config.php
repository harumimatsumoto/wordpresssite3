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
define('AUTH_KEY',         'ZS/4jkmsbl5toNaxo27QCqvN62h1OnSaE5F2fSu2bHMQpbQ94xrwTVpRSqn0Yk8eqZ/g4KvYw80FN0hVauZ6LA==');
define('SECURE_AUTH_KEY',  'pzQROePVVKFQgcbytfxFG4CGvTLbIONvL+8a55sd9fXOnuGgTrUiCt+mspjJQSk7IoEvaNptv/YDqlHLZQ6Qxg==');
define('LOGGED_IN_KEY',    'mLYHldygfCUnorMGHS1rS0h66QKCesj5NZKsaonZtx0AXDB1QBG3IQzh5ntO1m0V+PDZfM0J8+IWK+LkIH/p0A==');
define('NONCE_KEY',        'HIMmPMykVtvAcapCkwO1R2JCcnDg2C4VNiUl90uO0tqn4rocJ751sEWUda1EVfRFzcWN99+nIvC54tjnQPrOEA==');
define('AUTH_SALT',        '8tvBro2Fak59mPTK2kYy5cl1Q9sbFsiDNs0xtp+0kE08bJsEh2i4EC0UVRSh8bDn9Fr+6g7/Tet/JOMQAUD+YQ==');
define('SECURE_AUTH_SALT', 'MFdDz+Gl5E8TLXSyRxK7jTTi7EuiZfvI9BBR2BdVqvoQkB0cRptjMvSON8AoadwPG0oeKboS5PtxWZdqSfgmUg==');
define('LOGGED_IN_SALT',   'do8Fl+5groGQVmuwZzw2Fe6xHhxBG1Q/aPPWcKTsivS4WkTvuoCDsFm1OYHQrlsssSbZRzkd3llAZbLm82SvoA==');
define('NONCE_SALT',       'OThxtA/5l3XylTvMZbsXbbBrN4WAyeVwYD0DBA+zWVTJow+jyaIjh8/iNDem7VozpY4ElLFklVj69GxZREasGw==');

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
