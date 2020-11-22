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
define('AUTH_KEY',         '9pX9WkGdTNBSBVO6vYY5AJh/V/j3gFbpd/4JVteSqjBB2PtHpfRReCRp/bdZJVQdpWOBTyOWySqgvKnrkqZFcA==');
define('SECURE_AUTH_KEY',  'FGjsPgiaHjq9iMr9sWnpdnhS9lxAMSffrL9AlvwVFep2//ZVteSMTh+Y/aFqtONysa18RJyPdQKlKkBNfrlyAQ==');
define('LOGGED_IN_KEY',    'hJgw/Jof/fMZM27sJv3DhQ+NzjbP2Wafo8MxvKxgUzq3m6aQmlwq0nlsT9mjg8Ms5i2dc673+iYVQdTC9fKzzw==');
define('NONCE_KEY',        'PU0BKf0Y+HoHT+a9nnjnY8zWfWPH+6YBBoJ23BLbjU1b538B4BPH8ZIqRglJCKCx6TpoRR2nHs7VCMpKrieZxw==');
define('AUTH_SALT',        'NBtBN4igYLIcbk6xW3Bz8IlI22yVnukSGo+/V5xMOC/hg/VAR0y3qveadDdZIaUdhk2zNBsCjt1OKuMHtHe0fQ==');
define('SECURE_AUTH_SALT', 'ihM/50MbuWaicXxIiokxFwkegZMQ2nFeCHin0AhEDnlSrzmT0Ez2rQyKDEaT472PGZ+Tdxj4LB4hgJjUy3OT+g==');
define('LOGGED_IN_SALT',   'o5c+t9iT3FIndVDhkWxMkUUhye/g6RNvFhU83dw8LZ10ZqJ0vNfARrMV9eSEUb7+CdUc0umyYErJdZWNJPiRsg==');
define('NONCE_SALT',       'exy4/IS2OVr521qM3GahJoswIi/YsVM85ELdhg1UbaXhUL9lit9rvesRn1yRxuVUoZ/hENgOV1RqWv2bolY79Q==');

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
