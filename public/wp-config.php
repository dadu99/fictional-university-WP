<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'dSemqAXXkj/EhW9RBTerLDrbTf6yrATXdyGuXxaVV3cjgIYG3/tc0uO9lx1VhjHBauncWcw9CktEPQpxE5gMBQ==');
define('SECURE_AUTH_KEY',  'jdeczPvCX4UbFaa0CoC8qN/zRh2jLJHdYDg6icfpoa5QxoUdE/rl/M1ELl24FWcTQbDNr4BGqf6ldXAyJkV+/Q==');
define('LOGGED_IN_KEY',    '7C5s+gZVPpAbQL5e7WWC2uFt4vspwwClRgFOe2DfMK+5wkBHv+P9itIR8z1FXkNXYkCBwZwdqvpt9E3FKZdd4A==');
define('NONCE_KEY',        'jh8Eo3zyRio0+NReTUlPbRXSjOr13LpGbNk29RV7VzLuLpM4iiEgzcrhLVDMsEpw1MSKRSyD0gj+IGLFjKdLOQ==');
define('AUTH_SALT',        '5u6/KKb/FZ+SAnI1/MQNHOwoIkovV2NaIu4aDO4ofzZPmt78LW8geh9tl7L8FO66B+NZ2bJZG+/tzRfyHu3l4g==');
define('SECURE_AUTH_SALT', 'XsA4Q2JUwhadV8pVOOOhrvLzlRcdJcsjfoNEa+Sup1Egtq/N9wwpMpB7LO7EVsvInbiq23h39ow5Rg47UrNj0w==');
define('LOGGED_IN_SALT',   'IRWqfqJNPAJ540rCpE8NeRoWGxWQ9UMfrp56a+51DybzncEaC+uiJ2bc/v75S4dOiUKej7YErhNKXXrYcosaag==');
define('NONCE_SALT',       'xSTVpe/tzstxPnC/pVkSFGs/MculqwKqxNkEcR/XqVO4YuNwDnGKi6ic7AQfYtV61D9eZeT5CpI5mpMdgrs+2w==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
