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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '2001lmp');

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
define('AUTH_KEY',         'CA[*!rryv&Q5ljY0,]51gMS[aE`+jvNkL:--#J/}>/YEr%WRBa(ib&IE--B)l<T,');
define('SECURE_AUTH_KEY',  ':`11o!VR#Yl1]Wxiyl&YHd+Jzf~2-vCgvU#+5>]Gyc}YwQ`YhK(:+1vN;zN7`]-=');
define('LOGGED_IN_KEY',    ':jT^]bb{lGzogNEMCk({3,~C)1DJq(t)48*y)2mx1;2rCVi`sk1G.y,{pKCw(~zS');
define('NONCE_KEY',        'vJx@eyznQx//mOIIS@x4Gq>Z>+O ggj>q;x-+}//wMDYyaq?:A%!Uk-G@>ToD&1D');
define('AUTH_SALT',        '**}g{w*YFm|^[>HPtmeyLeOy`Y|.P.~hLT{QLDPp<@$^DX1O,EF3qKQZw?^Nmvkx');
define('SECURE_AUTH_SALT', 'K3e?85gQ]315TLLEr+MCds<F%|A*SXm*Z[!#g=^oSiW&068TzkVw9:Q!OOy~DWxN');
define('LOGGED_IN_SALT',   '=h+<=YdfCmmB1cQ8UmDIgE/qsA{%q#h+m)$XmQIp =w(+p*|>p;Viu}+ratf4xmn');
define('NONCE_SALT',       ':i*1^>`@10-&GHd[8B93`~Kuc:+cPqk-@1T<HXNnPA%-SRA1;D5q!>n>d{f=1O=]');

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
