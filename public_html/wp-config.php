<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'certodev_wp1' );

/** Database username */
define( 'DB_USER', 'certodev_wp1' );

/** Database password */
define( 'DB_PASSWORD', 'N.Fa2ER01TmszemReeh81' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mMhPB8KTllL2v6NiVrA1OzskL4MaMTSnjUsWdUfWB6rgQqa26yQp7qcsQ3JSp7DQ');
define('SECURE_AUTH_KEY',  'wtjnTlwApL68Hgu6Aw33LP1cciZUCAazvrTw9o6DgfY5jgIy9PuGC93WJZGL0pWa');
define('LOGGED_IN_KEY',    'Re5YVi3r7PN7rIdqqO9son94SNGMGUQGQWpsphdE7YS5ENQNMeSYNN2rtR3TSCmr');
define('NONCE_KEY',        '2y08snrlOu9swCqYwXBg5hfeDnE1tAZpsLuZN5iigKqEmJkOg6X68gjudnqBtecn');
define('AUTH_SALT',        '14EkqWtFNya3DIQCDndqbVpUaHGZq5zyLLAdMRvHqlU24Q84erwojQ3aeXsONieu');
define('SECURE_AUTH_SALT', 'K1Lo6Rf88H4ZLRbn5J77oI20ZZpqeF5ZtqlXpt2qVKs4MTFtiymIIA1zFX4A2C04');
define('LOGGED_IN_SALT',   'PI5BUpEm1b6EAWj69lJlBPTnvXVCZyjE2YiXlezg9Xcnd9p4RVO3WwXd1eCig2Yg');
define('NONCE_SALT',       'DgLEZRoJ5Ddc6Gy10aaEuXrnO2nPgmXHiSp7fZ1ILQQbst2U4QV9IHm6YGDL0tUk');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
