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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'PD[<%vI>VB=*+jK:Esm!er3,chH)ksZI.[hZ9o.8xfr^%g&3VH>b`F5HblL7!D6{' );
define( 'SECURE_AUTH_KEY',  'Jri2FXk0_NO_TZ@j{?nLt2v6jJ?[/*?O5eLA?%9E_ABev#m.C~W@i,|f[IRrQc|+' );
define( 'LOGGED_IN_KEY',    '|BrEyQzMz?<*!]?4^T%kYbs4SOTb{wi82p]@MI!~RExJ/4x]5[y<J _@S:f$w^t4' );
define( 'NONCE_KEY',        '>7GJ`G)$TO3kTp]ImcpXG9eTze 3SN2uI~BOBu[tV!aD(M}BU1uCYU3[zV,oX$Fz' );
define( 'AUTH_SALT',        '2yROw%dSb9rA>@GzOHH7{!;Y7;E6E )cE<gh|;1:KXx&hbp<=DJjyC[TM-IpTw9u' );
define( 'SECURE_AUTH_SALT', 'G0LFJfl;=S{D;N+Muj;#]$(X $7hv3h{XD~[kll#K]b:cmc-=7ZW<}(/XA=c(E0y' );
define( 'LOGGED_IN_SALT',   'h!gx4F475-6EqLHYYv*&cmLUh0I^HaS[!QEHKm-4~U_IbNANqIhQ0(EbOVs$O282' );
define( 'NONCE_SALT',       'TQf%z02O[)yU6|l> K*}&.#@4gn_EI2P]g)a*FSM9l|kL9zMVtKK8t.(dY.*mshu' );

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
