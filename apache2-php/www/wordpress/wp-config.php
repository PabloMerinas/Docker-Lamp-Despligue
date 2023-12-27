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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '=M-E^zmm9A.(aw$zagGwW1NH^m2t3]dkYxy8@,E](Ny~8}~2L!:>h:oZwA6~7E<.' );
define( 'SECURE_AUTH_KEY',  'nly5zyL*rOeb=/1-*!M7PWn{$D/fM]$?cQ|aVdZ*<?IR9m,>*{:g,(w+5~,~5fB(' );
define( 'LOGGED_IN_KEY',    'C,vsJmc`SXH:J40i[hCL/Njv%83m{-r~UwfdIb7p*P>m*(7y}q?R8BRswc9[9c(@' );
define( 'NONCE_KEY',        '=3e$<mjG5sqY7AYKK?^ftH6MQwDZ-v-q`(-]ObEkf8I}8M1j/D:f1vD,fW68<MDC' );
define( 'AUTH_SALT',        'z9 @g>y7,#8hGlW16o]}>de#.Mm+KM47l6f`(F1@p5V[^aaox=t-.iH/kcse=+K`' );
define( 'SECURE_AUTH_SALT', 'y|<nJ*DhS>qeSWqdr(Z:iWeeu,ijEMMS7S2tZj7Wr9t2lD~pzhwYM<+m2 qt}{#9' );
define( 'LOGGED_IN_SALT',   '0V,<EliY[{^/&riMl`EJIwu#E .}v!*E)(Oz(TTZg7~Og8=O?Ibd(eV@^})(;ceM' );
define( 'NONCE_SALT',       ';.[p#43ASU4Ie32,Ir{<2ir~PmP&0ulR14S&YT(^+LZ5 a@M:J,Q#K+`%)HBb/h2' );

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
