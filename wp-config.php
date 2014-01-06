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
define('DB_NAME', 'wp_wm');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Bl00di3st');

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
define('AUTH_KEY',         'Hx=-?1S(KkyM$=1B|8xFVJ42).TtL<yrl ~{vC8IaCvCj.`9r+eizm),hHu)fKdi');
define('SECURE_AUTH_KEY',  'At-eRSlXZ/-0X+#+W/qIE9.)/dEkD6{jO4<PW!@U~c5H`c-yw@c8k+@-<U->+;:n');
define('LOGGED_IN_KEY',    'hy!%DJh<cc>!0wR,8 iU;7}J8,YIhL(D+VtW$tt*5y!C$r!GVIlE9l }u!L?,06 ');
define('NONCE_KEY',        ';Xp!IHN:vK2%)}NY#sdM->5QmSq+xd=&M=$(9,ar( bV1ztn?_+b0XVJ%fb*xl1>');
define('AUTH_SALT',        '#?|+(u}!4|#{z|>isOi3FU~}:V~q8kdKY0A^Cdf:QM 4*-(!7f%aY&iCbwVU8uT7');
define('SECURE_AUTH_SALT', 'fX;Lf_~%V/Cl_2~Efh&=rB}SKfW.O.v@VPyW8w|VFxp5(WZ=F,+n28[o%>wh/KJh');
define('LOGGED_IN_SALT',   'tR-mqnq|#l*tn|-{[ki*:gL|yN(nnwrV.|#$| P-|xG2+g150_Pde<,rllWI(Fxx');
define('NONCE_SALT',       'XfeTYjL6SAZRKZNmd7`x<5;Yep5Lu-yo{aj/|LB`q#Ovi)%<wmG*U64<XZ+?YWe?');

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
