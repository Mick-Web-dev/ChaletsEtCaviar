<?php

define('FS_METHOD', 'direct');
define('FORCE_SSL_ADMIN', true);

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
define( 'DB_NAME', 'dbs1003552' );

/** MySQL database username */
define( 'DB_USER', 'dbu1406890' );

/** MySQL database password */
define( 'DB_PASSWORD', 'WpKvuxbzCrSOoRaxmQVz' );

/** MySQL hostname */
define( 'DB_HOST', 'db5001175500.hosting-data.io' );

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
define( 'AUTH_KEY',          '}b}Do&[Wm/y)yD}r8RA1@CG;8AF;^p*X+9(2TLDm*b7qZK%KKcrjTr5|6jstT)!Y' );
define( 'SECURE_AUTH_KEY',   'u5cdGeE]J{qrA9f7$r]s7NIUpMO1?C+Vg}-Q)bv|06o*+oVl`wA}eT+U(z&KdMiR' );
define( 'LOGGED_IN_KEY',     'x(zmE=[%I-u6[W~4o9X`AmV39sdKwQ&+f$_qf!r]/PPzLWx|$!j9UH5l2C4+Y/wG' );
define( 'NONCE_KEY',         '<=x;njG=KKV)Zfo8$A~S{FpoQl|%6(kkvr^.L2RmHjyQy^u#,)}vkR,mRWd%I)Kg' );
define( 'AUTH_SALT',         '-1v=l]|ruqr|s 4 .E9zIFLTrt+EXW*MI3VnCB9v?Z8uOZd7AR6kr%Tn&Sj%c2<E' );
define( 'SECURE_AUTH_SALT',  'OeE#l=?hjS*!TW.D5?z}AS[Z(*1h/fqPtF{[oduNe(!ciwgX^iZRe1!F5M(%J!3x' );
define( 'LOGGED_IN_SALT',    'tQ?{uDZx8Nr`ICiu|Reh3VP/hLo^8c,pK;5J$df12rkgHVE<!/)6@Laye,dwq(om' );
define( 'NONCE_SALT',        'n`AC;67D#~@ OKyQx%cd&D.|6kKhTa,hlKC0;/!LtVz;q<4ZX)K8<Uz!Xe<kYYf#' );
define( 'WP_CACHE_KEY_SALT', 'rpNqa^<|{+e3s19$a@&8BwW><E,3wEMQf7m8 <+P.XrR@7p$?yt6X(L.A}ks.q/A' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'UbngdtIm';




define( 'WP_CACHE', true ); // Added by Hummingbird
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
