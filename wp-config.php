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
define( 'DB_NAME', 'testalpha_db' );

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
define( 'AUTH_KEY',         'O K,uVX5l.lt&r.XE:Lt+!Mj!;rC8W0Vda4N6@QBKb~Hg-:> huF/ZqCu1vVvm3^' );
define( 'SECURE_AUTH_KEY',  '6Q!V?wYzg@Q2t-TJW<Am)ybIq+/,H]qKo?@JIlF^5CuA!_00J;m)XO_ LBTY,`fL' );
define( 'LOGGED_IN_KEY',    'R.%jK=ETzEX^xE-.du(3#Xw7|H9HV98}6Jy>?!1k-=L[c0%HH}AJS8dqE~qy>B(@' );
define( 'NONCE_KEY',        '23T}!( )US3B}x0T#$4+pNLRa%abGs;(We}Q6lBwQU0)Yn-1h}JuZ-He^I(KD]FP' );
define( 'AUTH_SALT',        'fXbK8}62jI%,dv}KJ}`;JJ#LtM}Y@66F_Z!=q ;+k;]C%CBTU,Ua}VsF%b*)nu:e' );
define( 'SECURE_AUTH_SALT', '$`jld$ N9ezwN3W8bO|gaC2%vVsX.Mq^nlTyeHoKmCN2HPo^+,Me6ltxb0rsV&i+' );
define( 'LOGGED_IN_SALT',   '3=;,!ekfZcDp!8WO4KRCG@s&P>U[7J)T@)H79:SSDHo5-,pKyz5e.ye1IGA1Ynem' );
define( 'NONCE_SALT',       '}n_sVdpX2k|FusPt=V~!jb3~?>Lf6e:ph[opMeffp+[VL73U6KD<C9y:Kh4/#T?3' );

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
