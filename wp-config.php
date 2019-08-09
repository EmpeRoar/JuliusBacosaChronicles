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
define( 'DB_NAME', 'julfaith_juliusbacosachronicles' );

/** MySQL database username */
define( 'DB_USER', 'julfaith_jbc' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xAdmin$*88x' );

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
define( 'AUTH_KEY',         'G,]x1jg9sWhDtAc`Cyy%!Geb)<th`^:/mT&=<;:GAJoxAY6szBxAUPr2zD#[h5@/' );
define( 'SECURE_AUTH_KEY',  'K*Z+uWID%eUpw<IPvW9+XW)92r:Fj2[c->D*~)-18z,giDB&wj s*hU`1}_`!5mL' );
define( 'LOGGED_IN_KEY',    '8 H^Cp!|wcA)5te}tvLe|myg,wZ9N1/k)l!v%Y6*[p*qGs3]<IrtwwCw#&p6U<no' );
define( 'NONCE_KEY',        'wPG_K&wH:28LYpLcC/~syIX>uCCGOftwEY(+Z!|jKR92s>:yYwmMT43kd{j2nFWf' );
define( 'AUTH_SALT',        '}J`9n~gqVQ*u*7RaB6ue-]i}[7kh!]ij56lhwIkiF9cO-FZWDS9Yxk-q<ouo[-yx' );
define( 'SECURE_AUTH_SALT', ')ugj4!Cwc`WO4ffD&sy0tSos6h6QzIzktHNhNWI7mqr|M _!xqkeS,k)#sr7(1Vf' );
define( 'LOGGED_IN_SALT',   'Iit^FS_MqA[VT+Z`K%QSnGu_1(T6i[#*t464zA;M}3gA:Z/#0biKW$VNx5Usq-Ia' );
define( 'NONCE_SALT',       '@Na!Soi;m3/0p>Pu]F]-&=5FFk2ew(Srl%p/Fbx%&EoojmwIb.v^JxgQFzrkhg&c' );

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
