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
define( 'DB_NAME', 'elearning' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '7b6_K?F<hVnqJs+b|0m*jm=kd:{7Mr,pw-mv&nPnlG)G#}/&Mt#yL}zn?+&NukgO' );
define( 'SECURE_AUTH_KEY',  'F,F9RD%JifB2xhU=UM,+Z7e?mo>pK9{2CMe{HUYgAv7=DF~TN [)>gRyEdC3Y~Kk' );
define( 'LOGGED_IN_KEY',    '<V2KJr+p>?fCUUX>)/Mc5m|&/1UHA#P7B`HnzK3rGEpa8_{JvFs>*%3xP6oG0j80' );
define( 'NONCE_KEY',        'VL(dX.$f&_{[q$hF*`^/-b:G]`]!U{n(<<c}a?S9oQL,4u`p8#d~!E}@5.#]2X!t' );
define( 'AUTH_SALT',        'l2=ad|/7;mQk9]-DJ` L:B9ch_2!uGM#a}i{#jl*,L9>~1oNoApLxl9g*YvjW/mW' );
define( 'SECURE_AUTH_SALT', 'FSbsbWe 31n4?!4wj:gs[Y8HPhUc@m#YBC/M)q)s-d]wy7D}[Bv*&OSW~% ;+O2#' );
define( 'LOGGED_IN_SALT',   'rO&Iaa)c]_7wU69I[902c~A<e:Hl]`,E D1tI&KX=!/~por},`H*u&Nl|=+[ T!Q' );
define( 'NONCE_SALT',       '@Ro(6w3bb8mNxvo4HowJ%G;cIin2ZnJdG7FneanX9[?=+;4-GSeAu Hhr$dbH{_e' );

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
