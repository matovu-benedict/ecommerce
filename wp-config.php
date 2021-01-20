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
define( 'DB_NAME', 'tunda-online-website' );

/** MySQL database username */
define( 'DB_USER', 'benedict' );

/** MySQL database password */
define( 'DB_PASSWORD', '1994' );

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
define( 'AUTH_KEY',         '6)~H-w4Ur(YjDHczDF]a#NVPH<<^cW~#)<X0R;|qDwMn12[G}z?lqa@]UJ*z ?|%' );
define( 'SECURE_AUTH_KEY',  'TL~cL]#/rwxn*7fmg<t%quI|YqkTu&p5dU)731N+8S&nmOYk{G`NSyF#&|$3E1)Y' );
define( 'LOGGED_IN_KEY',    ':N&-!_QI*[Wu.?C:a5PHM51 $uc7&@%!&rI,:@,,&r]63jMksZEct]6Ho:AzglkB' );
define( 'NONCE_KEY',        'wTFvqrd:!Z4b&(Y5s|BZFn9@^rQ0XhS*AYy0/n&=(KNPY;W5`JD;rlUkR5m}Ao,B' );
define( 'AUTH_SALT',        'c.>YVOw?2QB}~iwAH6;lY9]q@2.->Hl lGEStbN5yNaV,({|{V-]O>@eJXMPGv|e' );
define( 'SECURE_AUTH_SALT', ')E*e2u[m5AeFA!_7CN_fW-2_[m(n$<#]!xaD*8kGEG&I#Si`FzpA03)7tzy~#aS5' );
define( 'LOGGED_IN_SALT',   'C}W`(;=yn&r^fLJQIgRp^5i8W/n/TX]l;{u%},?P**8x9~8S+EXuK0wx05cct=f?' );
define( 'NONCE_SALT',       '1|_pO]</X&jc 6U/chNQUyEq@%-i@jKY#X.g``Bc8f<`, %KQs8L({p`q{>hY/8B' );

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
