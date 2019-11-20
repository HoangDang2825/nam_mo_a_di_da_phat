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
define( 'DB_NAME', 'banhang' );

/** MySQL database username */
define( 'DB_USER', 'banhang' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '9oSB>DekY?Sxf`M!?~gfYl``N<Wo;F*/JF[^~.6/.UPTL^J!*:nAzQ:g8?]lIm`q' );
define( 'SECURE_AUTH_KEY',  'd_->ce~[&U:(7~f;+%V(Yurek.^kjww$z-Y%]F~p}Hp`C:[;|GsWJ,+.DXsib~C&' );
define( 'LOGGED_IN_KEY',    'bkNZ-+7k_/EEEj3|AyyI|5NzOD)qF~1{Cs?#:dykv)cB-9k{<h++Nt36G.tG^Nty' );
define( 'NONCE_KEY',        '_7#]RiY7V 0q93z]ML0L@` gGg</_e&Zr!S,q2pSsqh2iO7,^A3u*0`!D*K=cOmg' );
define( 'AUTH_SALT',        'h[t[F$KVw*+&$<aembNVp2Th~@@Z_W8)J_=Y26A(vv$P}`iD-e8z2DW.sHQdtkD|' );
define( 'SECURE_AUTH_SALT', '(cW.<m$g3EX[c /BNtLL|u>reEOoJmps0$!+d=saiRk2~1LREsTI5.F$C$sQO&Tb' );
define( 'LOGGED_IN_SALT',   'j%b }Zu[byOTWQ%hyb_Eh1L[?y5|Z?*>vizd|e^sqi%;z#E{ExuetA^BRy[cIwot' );
define( 'NONCE_SALT',       'lD$n+,S-l 9{irqBIYA9V0NP6=0tlH}f9>snu4,}TKZWyBw$)-1G>[Or%UWA]#_{' );

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
