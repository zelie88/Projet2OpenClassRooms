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
define( 'DB_NAME', "dbs182502" );

/** MySQL database username */
define( 'DB_USER', "dbu390242" );

/** MySQL database password */
define( 'DB_PASSWORD', "9KQEzVoj%" );

/** MySQL hostname */
define( 'DB_HOST', "db5000187618.hosting-data.io" );

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
define('AUTH_KEY',         'bXV+ohT5DdOdNCT6E1NZWwFKVr7JVaOAI3CRCW9LWfbuhdfx88a+mYZHHBOu9i/GbxwjDes445mCLisdWocCfw==');
define('SECURE_AUTH_KEY',  'IvuQXUxhL52tDLAaVhEfSgNveVZVfwFEpWZhcbwtxOpebS1A8JRTrR9ActGSujp/NJ5YeVlnmSA3SuaBCErZUw==');
define('LOGGED_IN_KEY',    'cDeu1CG6pXTNxD5vsKWPWemNd5vT9rB0OtIMupt5mU8/JRw0e7ztxssiM+9mvphpcQRM9sGHHfGIytaiZVIHPg==');
define('NONCE_KEY',        'Lfht4b/ov0ASULf/JJA6k+6inC3+TE/Nw7L40aHgK/xpWOoz4lwVsyuIQLm/XLDSntgU68FwDxCJxUO5dcN0pQ==');
define('AUTH_SALT',        '4sw2Hu3Chz/idW8ERG/XIFFNHrXog2k9xQbKMJaUPZwkcQBJMfokzQpTak8nTbIebRTQxoPWShWaLYn27yMaLg==');
define('SECURE_AUTH_SALT', '92irkcGDxhZ/wY6n0y1FBd23NU/LiGQ6npqCa/7IoKgjaA96HNMtuj9+oge7Vt3eCEYcWCeF9O8gKi5WiITXtQ==');
define('LOGGED_IN_SALT',   '+uPuoHYRz0NvKj2e2N8bMsIg7zqMGjPW1IJICP/rhnsmhrbgYs5N0CHcX65oAQOj8Mk/s+piA5XPZuPGIEN1sw==');
define('NONCE_SALT',       'FglwZWMHjG6xUX6IJkYwwzOtW94SQz8xuyxnujMD32ZGzmFX954N3gPMopcp/lOnUyR73+9cGK7D3NBexfmTDQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
