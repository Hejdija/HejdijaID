<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', '9C2CTC8vgwJaOO' );
/** MySQL database username */
define( 'DB_USER', '9C2CTC8vgwJaOO' );
/** MySQL database password */
define( 'DB_PASSWORD', 'ZRGGGOHDtDMcAF' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ').LVq3!xd{x]Q;C1jv|]ImaE*Wk%s>mYx;Nn<cP}/ ?{nP2:q@aK>aA&V4ikj1&e' );
define( 'SECURE_AUTH_KEY',   'vznGsJix9`I^]+R$~.hsq|^@:1&wd{L+:V&(V0-% #,?.83(9{`gJkizI/:ocb3x' );
define( 'LOGGED_IN_KEY',     'j[CI*11ESM?M/{L4sT7!%1hN6KdHw,IO%Hm#},*W`vwejc7+!ZBRPqa!Ilx@|z]{' );
define( 'NONCE_KEY',         'l3#NDt4)gjH)aX|z-; &g2*RmR4j*4C&,`u-!WOHg^.ca!JUx_%|l}*,:K{/v#Jj' );
define( 'AUTH_SALT',         '1T=@<~0)LlM+0^MwoU`/8B`IJ!]61O[mqDx.SF|r#8,2bx}FyJcAif y8&4[ae<g' );
define( 'SECURE_AUTH_SALT',  '-qg5~{`>:1NimqkR4S$%[Yl,n`dG#pT59`IQAAyxrGc|8=?YE_119Qoo<%L|a~8#' );
define( 'LOGGED_IN_SALT',    'o:X7O(s{Y;,C=2APc:dVdT7-(l_=)aQ<D[vPWKj86;Pg&j#R8@0u6<rp9Q!1<iP}' );
define( 'NONCE_SALT',        '*w.z28,Mcv(b1 ;M?REO@pW{7L?o1&y}fwQ+fO2Ui>Y,@=f8r9YQud1:klCi7O:a' );
define( 'WP_CACHE_KEY_SALT', 'CW%m$AJ`{D$I&;j:.SVb?,g3cl>!NRS)&kfK7?dr,d{|{R^V%+S!+AEC]{7aQYL(' );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
