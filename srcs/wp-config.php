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
define( 'DB_NAME', 'wp1' );

/** MySQL database username */
define( 'DB_USER', 'creator' );

/** MySQL database password */
define( 'DB_PASSWORD', 'creator1234' );

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
define('AUTH_KEY',         '3RP2Gwh/RH> }V{~5-<{>cEW>om}%&6D19R=J icib9kjO-,iLlVtff-9-8&%7M)');
define('SECURE_AUTH_KEY',  'gQSD&5?M/`{U]}<,:Y;O|cD%/|qp_>{HKEr;27s8=D2{|u^iaW-~{-?8;B+@kk0Y');
define('LOGGED_IN_KEY',    '=)BF]z|.+%0uS9?}![,ju95+#+5,`aFmt-R&k:IfrG~&*F~QZw#P=_GiFpsl>aG]');
define('NONCE_KEY',        '|IS x+XEm-pR{!]b?Hrw=Ml}&g|H;r|;w#i*QxLR0Uf@MXV`8R:uV;M6hq2e/g8w');
define('AUTH_SALT',        ' Xu}9#dFu-3|/y~C`.PT-Cs%$Wio;^t@j93c7d,sPONq/dJKm!BqiK?M34k30xOf');
define('SECURE_AUTH_SALT', '|X>Gva!|B;+0iW=k vyP62zlV$2t&o*+<#&<bYe:bJ[Q$bIKlO)e#3ew6~drD<[F');
define('LOGGED_IN_SALT',   '%rQ[-K1~vzsiprfT-dsh`0Z>~,V+bJ?62S$*ZQ53/u!XG0 uk-9(CRPizG>IMq8N');
define('NONCE_SALT',       '+tAr>4K4(Llc$U~;RTc}Yai59)uw;=hi,(EU;l#w>Xbs@?59{-qJ]ee$ZQ}km8S,');

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
