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
define( 'DB_NAME', 'nsuschos_wp674' );

/** MySQL database username */
define( 'DB_USER', 'nsuschos_wp674' );

/** MySQL database password */
define( 'DB_PASSWORD', 'S23F!8(pS1' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'wlp7ump1aohjgazdnipvrcvwrsslazuutd26qxyra5fomqaielirx1ahzmuwvdwn' );
define( 'SECURE_AUTH_KEY',  'u6mqpacmgd7fanyhn3jfpxjmzl4pfxtgxvjnxczlymp7plx2w12d3conk2tbzp4x' );
define( 'LOGGED_IN_KEY',    'pwca4wysmqgzbjq57c2vob8nhhq5xzfdzsza8cjlqbfvhqn40r0hxvwauoavazko' );
define( 'NONCE_KEY',        'zzsdjnseo0evn7q71zz04mswy2wkvhxwi4lsxl1mkaco1e1xjsitgmp8zpce3d0l' );
define( 'AUTH_SALT',        'tokviu2ii89fkb3zmd5067gfhont7wehbbuw1qymx8gi4utyfafekcbv2ilbmquj' );
define( 'SECURE_AUTH_SALT', 'ahq2j9ugzvcoc4fvy3knbxife7uogr6k7i2lehhw4bpu85uzan9ochchr9y34eaq' );
define( 'LOGGED_IN_SALT',   '0ljbsalkhujejodtxehghbbspeoavwteyq5gqpr9kwx6a36blidtf0iezvxwfcay' );
define( 'NONCE_SALT',       'c9rlk90tubhm8ooohs3zw1epvoyyybzo8hmhoufhfwvrs2ycbev9cq3losy4uydv' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpce_';

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
