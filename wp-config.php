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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'home_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'I;^!b*pxQTPnV0~#fm<G9KY.K0`sY.]~g!1`,.1*E@=TG@SpZRDKFtvD7zf`mBuB' );
define( 'SECURE_AUTH_KEY',  'nl@EC)3~}2,Pthc><P]L-F6W^LjS]=0H`6G2d|E!t]%.oZ2<J&aGN~)j}sEUkmC*' );
define( 'LOGGED_IN_KEY',    'VQzD6lkx!jE~JTD{vG?vmM]M=z@QHRnrI79elUl8EAQf}<xD)EV9Cu^+VbAtRk8@' );
define( 'NONCE_KEY',        '8(_%u4q`?8MfyHqmOs>ptl`]K,|RR#s90f:|s^H)$F51pW1}UTwQE]3aD0-&~@N]' );
define( 'AUTH_SALT',        '|Ma?59&|,vk|KYe]j9k4z`McBDI($^,}0Y$ylX[zTbR#2<2x  B<wt~2YHW4%4tF' );
define( 'SECURE_AUTH_SALT', 'w-ORqg#E<58&SDpS `@&)F^xR(zp+cP=P!+2+]T[`@Ka*=D N?@b/FySj@~co(OR' );
define( 'LOGGED_IN_SALT',   'blbRwe9+^qTf4l}XUG0Y8=m&>{.TEge=V29(%`RvN7+W(IihR=8D#cg}$.$MQ!u.' );
define( 'NONCE_SALT',       'ppyD0I@QvQvx=hYd$+2JIELnKl 0Y~L^XeklVyfgR-juc8MtfioqE[*$uxi@e yt' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
