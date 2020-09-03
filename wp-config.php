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

//memory limit for picture
define( 'WP_MEMORY_LIMIT', '1024M' );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'memory_preblog' );

/** MySQL database username */
define( 'DB_USER', 'mvdbpreblog' );

/** MySQL database password */
define( 'DB_PASSWORD', 'EcbBA+7b+2vtBUFG' );

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
define( 'AUTH_KEY',         '*V]Ex-dJso^e1,po.Afm;!v5x+huZbpp(B.NoCh* byI&+U7}$@~)&DLbmxkqU0e' );
define( 'SECURE_AUTH_KEY',  '`yUGLK~S&Ea[a@G4PQ2!o!{%>{Ezws${E1wh,Ns!W#B,K;L,dhku<0$_J-29_vT7' );
define( 'LOGGED_IN_KEY',    'ln6&xj3S}]!?lvArQuVtr,#2v6yT,5C7^-EZpyi[<+?y|&e(be]hUD-y)K:PWQF4' );
define( 'NONCE_KEY',        '|_mMcPL1L(J!>]bUU3&g!){Gv.IBEif @dh2L$.q^>e1]W$x(=&Fa?~JVY|5q$1&' );
define( 'AUTH_SALT',        '$>d&;62,u8#9q!r{H6hwMpvVVtd6c .)h1o)Q4t3aYItb7ea7gF<??cSW9M[zI^|' );
define( 'SECURE_AUTH_SALT', 'yG.yQ:<_dO{9B9rPwJy#T8Lz.=`zC%rS]b$HY}QU+{h~Xo+i#P(r^!&sU*<|vL~j' );
define( 'LOGGED_IN_SALT',   'US[~=JX(2;}b(8-b_EZ*f]K*!Az|Mrh4)4W2v79^aqS`$YYJIy[VGl_Fc+^OtOzh' );
define( 'NONCE_SALT',       '(joy%<rp5_gEd3`h}x)i @P2jL]o!;sU_Lg,:wz44*K}>DsGS/i#o_n>%MILZA>n' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mv_';

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
