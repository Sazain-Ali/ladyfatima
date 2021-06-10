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
define( 'DB_NAME', 'ladyfatima' );

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
define( 'AUTH_KEY',         'I|lP].3U.ZfwH}GhYR^Ws*MuDN/3%N/^MDF^#^T{))OFcvrX9tY&=J!hMCio6jNp' );
define( 'SECURE_AUTH_KEY',  '[Y*Ta}T?+88b$f:UnL^=:e-8*%?bV,Cx<^jL:Up1&;k|.ko&!h<B+f!r^[}1sNCA' );
define( 'LOGGED_IN_KEY',    '@-}pm0X,E>}0x8-Zj<?@n|SJdDT~{u>YjP>aV-lf}mx{}ANL7*/*Tth9HH<&B0b(' );
define( 'NONCE_KEY',        'BS0]yKrZw[7VOOI>|owiro;k#AF2C&g&aP%NwYY>E6 k8.aG296.<~i6FwH`h 33' );
define( 'AUTH_SALT',        'ngU(ZvhB :nTOD-4}onq>K_y@cLTxixwz8[MdTu,Wepz/CO<8>Lm!Vea>:Ef/[tI' );
define( 'SECURE_AUTH_SALT', '^wwl{wN)hsosv1MaWCi{g:98_;1I*Rp;>Q]e$lMBDxPrtHv#g#>zOho8ki]i9XxZ' );
define( 'LOGGED_IN_SALT',   'pZV2d36([9#h;4Hi5_SjN%R&.X7FjUt,TAq=0T#H#?Q)Sm}44Z3>oNzY ng/((^]' );
define( 'NONCE_SALT',       '@8rWZQquY#pq4G6wccqJ^AY3[md |XM/y>qd(eO}#9ixEw-UUT+qekZ39r@LT:%R' );

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
