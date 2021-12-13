<?php
define( 'WP_CACHE', true /* Modified by NitroPack */ );

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
define( 'DB_NAME', 'serwer49633_9997' );
/** MySQL database username */
define( 'DB_USER', 'serwer49633_9997' );
/** MySQL database password */
define( 'DB_PASSWORD', 'Stawpol1' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
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
define('AUTH_KEY',         'QX/Ml*<k[,O#SYXN6VLyH@W-2s|L*tY=u+;vpp#4njlc3(UL}8BOiF2B>7$HM,a0');
define('SECURE_AUTH_KEY',  'WX ad<]sj@USKpSc0a&,=@KDa]pj*ZZ0fi~ta^.;gF;YO5 E{FJ$tY`NEWK1qL=.');
define('LOGGED_IN_KEY',    '..}oqn+y{P|`%m{;r/[;wRyC61^*5.gwr KnIVdD*X<w`6Er{nEN61&d3QV#Z$u5');
define('NONCE_KEY',        'pc^FQMz]Ov7;Xw$0 PG/APBryKTKoD+_@J+j5#Wih}4&s0vE/FHY{O|Uukp*LgJv');
define('AUTH_SALT',        'nX#DH(`-B-+J:UPi:+%NoeCO-&5L8J0{{tYw9k^--WCMYuO*+tyCH??1* -ojW#<');
define('SECURE_AUTH_SALT', ')73P@%l8A`n)DJ7!Q84T)Xj#CB]iAgj-_<ol+~q68`M8.n`3XOLvrC}QFL9r%=fq');
define('LOGGED_IN_SALT',   'duQYonF?b&I.Q`t?c|7mx<QTQEs-G1gd.{gg|dM%+7-g8s~z(!bu:hR|J biOmZ4');
define('NONCE_SALT',       '$S=.|3Bx+),#/9=f9Z?w`l3Yecj3:!l/RGvD=~dw3TA_Sz<[G>mvs}C+COrHLMZ?');
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
// Enable WP_DEBUG mode
define( 'WP_DEBUG', false );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );