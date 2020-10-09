<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
define( 'FORCE_SSL_ADMIN', true ); // Redirect All HTTP Page Requests to HTTPS - Security > Settings > Secure Socket Layers (SSL) > SSL for Dashboard
// END iThemes Security - Do not modify or remove this line

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'iamigvcl_wp730' );

/** MySQL database username */
define( 'DB_USER', 'iamigvcl_wp730' );

/** MySQL database password */
define( 'DB_PASSWORD', '7[p.6p[S.OwR4W' );

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
define( 'AUTH_KEY',         'a1hntr3mexrqyv8cxzlj8ckssi44olwpmoztchpmdvalk9disxstcfj7yeky5kpo' );
define( 'SECURE_AUTH_KEY',  'p1mjvhpjcvhzsuhpkapo8euscpkv54lynvaqfih52uz0erjposkq9a6me6cqpphz' );
define( 'LOGGED_IN_KEY',    'iw45rac7dk7oyv3wib5xtuhsefgfjl5wcms34dwetgnzvh3iidqbjwni1cnhgy0l' );
define( 'NONCE_KEY',        'lz01azkqoxt0kgb8tmrqtxfykdjz67vqsfk81c5cc6fohh4o3ko9rrwge14oqh32' );
define( 'AUTH_SALT',        'xa9aiwrldvr57gr7fkwoxn5ftkipn24gq15vipuw7xxnejr1kaxt7czhoqjxtamr' );
define( 'SECURE_AUTH_SALT', 'zs83modk5i3o4ozxr6hsdqa0iyhxmbc5etbxzwnouqenbmh26z0kz0rgf5hw2grd' );
define( 'LOGGED_IN_SALT',   'kffxvhuxh3jtpja7kdkbvvvqdoyttl7sa77pnzueh1iy7ym9599rflzwxagzjemh' );
define( 'NONCE_SALT',       'cmk2c2odxkgmryl4vcxl98lqfonzzl9bs32c0kq3j0wqgqeqpwwzbjsbxkagp6vt' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpm7_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
