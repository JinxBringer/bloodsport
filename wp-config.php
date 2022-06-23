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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'spqr' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'Z`WXW#cZEb*a?Z_~*&pghRvWX5J0[0j1&z >o6sX-vd`W!IC9>#; uI%I]OI@5F#' );
define( 'SECURE_AUTH_KEY',  '|8lI5#uMPlDe^jb3&6%@i:,8)vABUwLP~om Du{hy[u~TU<VH2,,jvs4J[/vFGAg' );
define( 'LOGGED_IN_KEY',    '1O2g;$WS&K#t~.8T+woKi_-7Xb(m;gluEsEr/=%=VU#/R9*R4Xeuwll>9!`gWKp=' );
define( 'NONCE_KEY',        'GyEjxS>TM(oXy]SkC=o_AGA~/Wo#hH,[D?8+&^r@RP$h-Bldy B&ZDnO6SD `pAY' );
define( 'AUTH_SALT',        '{4[1&.QY!nCfiMu7CBs!kNpiIhl+bU&TugO8 l5%5*){7eW@|H?5XPd,K:&-XK@P' );
define( 'SECURE_AUTH_SALT', 'qSva:4v3O&]3E@)z20yzT!mhP~G-CIZ.?K9.EWm_2O,!H&jV(B+0MaBu(HZA=/!x' );
define( 'LOGGED_IN_SALT',   'Q~{Y4Uvxdn5OnX0UM-bhhIA:q?qZv6K`zn~{}j!Vv%:hI0qrk3zK_tyL98HNj#V8' );
define( 'NONCE_SALT',       '7?@k!S/`/z^6c:[aq1t<a nzjOde}7ll2p>a!8BRu&9m>P>B}iQzSy%[Z$#GFMl`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lsef_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
