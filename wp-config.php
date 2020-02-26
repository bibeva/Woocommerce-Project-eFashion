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
define( 'DB_NAME', 'efashion' );

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
define( 'AUTH_KEY',         'f)b>1b)u/m0xC0mcx~3$^84uL&~^dK@ <Pfo3q#y0<Ewn6I&ubc!(*laX;2*Qaz!' );
define( 'SECURE_AUTH_KEY',  'CumBF9V? ~%8I*IQ%aK7{zeE%vj(~q1|<r+H-9-|,6:2:|+w|{D:jCOvs6Jls_;]' );
define( 'LOGGED_IN_KEY',    'P3 7AN@>m&,zx<I!YX#r|X@_>&8K(;i~6yEU1joit$q ]QlLGmW8}jz;b0LuZ5%F' );
define( 'NONCE_KEY',        ')!A8Yl<vW!Dzql0JjY,F{XTv8m$pLA)YBl>J+b:jbcQ-9`-Zw|5}{.9`WXd>JJB1' );
define( 'AUTH_SALT',        'b#FnRv[_EPietvaewR0H,Z8<XXe G+ZtCc~1ec3$Q^5A`c4VCGH!pAg*b*7z-%RD' );
define( 'SECURE_AUTH_SALT', '(~%5e3i/!6Q}$V2T_9i6JpQW[gUJ}2Yl]}~Mfb9.(Zs%b4 bM1_pyYE$ Hr%Mpuw' );
define( 'LOGGED_IN_SALT',   '1LL![sV-Rw06$U+*VTA<_7u_cG|~&q=LJGQ,Ro#-$gHBE@s:M.F9re8&`i{|YQCc' );
define( 'NONCE_SALT',       'E+9?(_6n}*@SlCpAD;NoX_k*&:S[sLmqV9rhmRk7Fjda$zr(e}jj!>6_j*JM74QH' );

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
