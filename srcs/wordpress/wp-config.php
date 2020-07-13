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
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0W?dw^ATK1-q`yL9@sXNks@/E_+-J?-AP-z%}N351+O^qhFBESHX;ED$>/e*zf_7');
define('SECURE_AUTH_KEY',  'gYT#,/]JkW2Wqul?d|foFe1ZAwm^)J[D=FC4xx-5#vla 7P|ZHX.Gz>XuxW{Tlh/');
define('LOGGED_IN_KEY',    'QU*isH/I50(K!P/-cg S|=U[6g+S|`eIX,qaD{ta)-s-@:tSx2h@SA!]LhNc{:Bo');
define('NONCE_KEY',        'T:MJ7/q?%|3(Q|2(zwonT^U4Tl-y2@i4s/QW7:J$-^hvBb>tJR<E6AMdI9q;N5MU');
define('AUTH_SALT',        'oTguGn?`88x[&-~nD3|/JXbmQN5e71F%~OlJG}Q1=!ZA)/1GHNJ7lBQ9qr_,/qoB');
define('SECURE_AUTH_SALT', 'b.oosZPTX^0E+V`WM^rj,5`NJ}R~,+P+j]|q~ot~Ui1`e~(/-<PQSO*jSQdx[dm2');
define('LOGGED_IN_SALT',   '4s}`ZULcAhJlVQOk%N  ^D&%@XM;Y-PKik0YTgl%quh$8-|vW?6^R7Iv.c30`P--');
define('NONCE_SALT',       'Y=R_e#IM:v,]g^/I!6)&?[E?($Zw!Oqfqg6ty9Ac}q-9:Dh>+nDH;SS2tFQ8+R^m');

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
