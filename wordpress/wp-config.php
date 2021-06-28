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
define( 'DB_NAME', 'store' );

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
define( 'AUTH_KEY',         'Sz8C@8Qrg6+8aQ-ZYpLXKj=T,Lhz!UG8wv$.vpiKY#K^#_n4|Ix=sv$>p$3Z-XV5' );
define( 'SECURE_AUTH_KEY',  'i;)-I??)e{=0|#UY<qmbR<w9GIBtHn!=jq:X1yllPmK{A8]BJ=FZiQ-Iw}5Dp+n%' );
define( 'LOGGED_IN_KEY',    'X_5!-}kjXa[KT0{E;f7s$)oa Hw`&db3*C`ohaVea8A#_&7V5oAyu4eJ#r/1r$0V' );
define( 'NONCE_KEY',        'We%4HoUy{JO{TtG?+_@{;+_~e3Qt&F(wDxu 0<X*kj`w!5sSty9CB{ef/{t,Sr#N' );
define( 'AUTH_SALT',        'AVXguGNH)43EfAfPnm}bXk(DF[K17G#k{d{D9p^gImQ:}F sP|=gbVuOpAO]$tF9' );
define( 'SECURE_AUTH_SALT', 'd03rW~tm)%XUaM{#aElz/TcHyUsNl~|e;6Od;Ok FEa]467;L[y $Zbw*w~YT=ch' );
define( 'LOGGED_IN_SALT',   '[oOROw%&,HH{YHKyCd;E$FTpr9]heO6]dhm:xUX0!+p&_IVTZC[$NrlDR={q2Qi5' );
define( 'NONCE_SALT',       '*tyGD>R0JVD6JOluywU8e_) {Z+&|W.U7znheS#bolX9X8S#AGRZM0+G(=&Qb4FS' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_studyou';

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
