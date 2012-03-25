<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'roceats');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '$1}j>ZH}Ac}9)lE6u`0;n(C~jb88Z0uRQ1pMNt|&{rS8hYjQO=xcwg>4On$MqY_p');
define('SECURE_AUTH_KEY',  'e-P-7*|Vb`id;y[dV&ncB+6C+RI195fg.KiD*$--rP[fapZA%N|8eVT{%N+M`$}o');
define('LOGGED_IN_KEY',    '`=nHgEI>BAJ/qIm(Vm%6v2FbR|pz s{2(ZK>oftflRZgVM-~:Ai68JBiyG46]D2x');
define('NONCE_KEY',        '//Zx5EbPczy7|AV-t$vt`q$N30+&Pu[<9fe-KHaW^I(J1KN>1U,&N f|Ls/Ah`-&');
define('AUTH_SALT',        'j-&6N|Y-{`,N<M5XhagD9+k5qNp8CA^~7i(|F,O5*0;+c{U$aSj|Vv{wSPD#s{*t');
define('SECURE_AUTH_SALT', 'vxu1V}(;q:YVj:!y#b@r5Xn)=(oU&Ma)r]Lm!##L!p+pGX|-MJ #.t)&omX@X}+M');
define('LOGGED_IN_SALT',   'rEjpG!wvzsD/t+l@gx-jiC<9=)AODJ#_Rp5.;g^8.&7H?b+76GT|Ojk$Ueo?RX9a');
define('NONCE_SALT',       '1,Adg+q2yUOMxw_}>N=[$LJ=bLA?@z.-*$-]dO6dI;af| ]_3)]:_:|pY/d-.VIE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
