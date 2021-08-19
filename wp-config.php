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
define( 'DB_NAME', 'intiliyb_wp186' );

/** MySQL database username */
define( 'DB_USER', 'intelptg_110' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pToLB9cMuoNs' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'arhqhtbisrfzgyv59yd9hjbib5hgsa0tsmjtn2qzgkie2chgswm0y44gzzsz8euu' );
define( 'SECURE_AUTH_KEY',  'ffyoqutidlistxxgm4xqz6kekotuyc4uechjvmxsqecfmres7kqcaqdmzhkrlmvv' );
define( 'LOGGED_IN_KEY',    'wviulax9a9m4kjnfvk8eedoblfglqtopbvakaa4kwkoyvdtgv9qkyalfgtjxvnjy' );
define( 'NONCE_KEY',        'hlzes1ckykc8tnmxg9ey1opjxwwhtsr4c4qcnoy7y3x71s1ejl7mu70svll53qkw' );
define( 'AUTH_SALT',        '4fxegq4zvmomdeeiha7pktvat4ry3ptbtyygnmsknqfy2v7ffzqp9yr4ufs8rz6i' );
define( 'SECURE_AUTH_SALT', 'dkily29vflnogrijetbw75xqldjuzcmr2ixpa74vxzzlgbmkbwylazo1qdfgwpwx' );
define( 'LOGGED_IN_SALT',   'onm3c1duh6fdqq9lvv3ylqvtzavkyi8gs5d11yuey1eniheb6tld3hrn0tppmizf' );
define( 'NONCE_SALT',       'wp2lwc6ccskvk9lppojk274zgpczynrxcryil6h9ho52fbhvfkzdorope5hpxg9h' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpgf_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
