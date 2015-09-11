<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'waterford_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|+|.F>}|ss#<1>;vcp37ekY3KDsNJAhT <UxRi=]s~4$JEiElZYYpuey_u8ryp-~');
define('SECURE_AUTH_KEY',  '~kZfMLi-_g-[WU@sEXgl+&^-WRw~4P&3uJ|wTyZ%jY]}+oX8ZXHSAV6DK(Lv99MO');
define('LOGGED_IN_KEY',    'd8+?{y-D@QX/lD0A{fRw|l$?+K$|,Yc}-M82+THRa6ro)!o YG?^;fH9Pt20)w;~');
define('NONCE_KEY',        '&0%X1n2kSH[|CNN3+4.~l~s8P.p#_kGJ!f3X@R{3c@W9W?]@>g?2eJ04Y[v>aX5g');
define('AUTH_SALT',        '>FBxgC)Y[oXlcTDVCGlr9w^c+c>Zo@9]ds]:_Gzm#yl2,0ZiYcH_+/U4GxyMs_s_');
define('SECURE_AUTH_SALT', 'X-n>X.5xD/gsnp(au+BM0haz}y69+D} +|0Pogtnn2[>?0&CmAN(]{*+mQ{tIF0t');
define('LOGGED_IN_SALT',   '(sWG[2DPv-H*+N>u,K V4Sq,h^aSgAchf`2,uc2K1w(N<e21Rh+!MJ.Cs}S1lvPM');
define('NONCE_SALT',       'ZtGCjCB$j$I`q]Y<*v)@`Vi>?4I}4,,W~YwmEtqaH>[|4-I.]:8}6hLg+|MoPa27');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wf_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
