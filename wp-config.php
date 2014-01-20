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

define('DB_NAME', 'shl');

if ($_SERVER['SERVER_NAME'] == "local.silverheritage.com") {
	define('WP_HOME', 'http://local.silverheritage.com');
	define('WP_SITEURL', 'http://local.silverheritage.com/');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'root');
	define('DB_HOST', 'localhost');
	
} else if ($_SERVER['SERVER_NAME'] == "staging.shlworld.com"){
	
	define('WP_HOME', 'http://staging.shlworld.com');
	define('WP_SITEURL', 'http://staging.shlworld.com/');
	define('DB_USER', 'web_user');
	define('DB_PASSWORD', 'srstag3');
	define('DB_HOST', 'localhost');

} else if ($_SERVER['SERVER_NAME'] == "www.silverheritagegroup.com"){
	
	define('WP_HOME', 'http://www.silverheritagegroup.com');
	define('WP_SITEURL', 'http://www.silverheritagegroup.com');
	define('DB_USER', 'usr');
	define('DB_PASSWORD', 'U5r12345.99');
	define('DB_HOST', 'shlgroup.ipowermysql.com');
}

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('DISALLOW_FILE_EDIT', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ']O|[&!sxyQc1-fB=|-]+Z8]#z-Gk<?(Ygg&eD7oF4fHsGv~!mbsNqGLQAI?(<tXc');
define('SECURE_AUTH_KEY',  '$]`]bKnV#};(/;V.-bco5qiI~:0(mFhy][G,mmtON9U$|,bf[`Ge(Y*tW_~/7qLO');
define('LOGGED_IN_KEY',    '36U{CzQ,Mf*dI-EZA`E1Z_CJ.86o-VqW,I%;2ie}!?ear}(95+rcH$YX%KQ^Bx)`');
define('NONCE_KEY',        'K|^&|@3y3`*}n*.TfiE0FM3r1Wf*cQ_1e1vv*T;D~#JbB4;k])j2`yB&E{FhHE9w');
define('AUTH_SALT',        '$-9::C/AqfMD|l2%f=R|*_@R*0HOy)HzZzSe-P&i7+1D&btL{p&m#9(i=t/T te(');
define('SECURE_AUTH_SALT', '3+L. $d||L7cizTvk_!o{X{D`jXb4|J<a<SW&bJ[oQzH9gv0W~s3fzZ;j^`x-t||');
define('LOGGED_IN_SALT',   ',R|3:]c$Yw-->3]^?hM.R_(0^#Vx(J?#l+S/M+-kqH]|Rm.r0`yhz+*/cl+,C+x*');
define('NONCE_SALT',       'of>Hl12i%XV2)-+}GQ%<6(-ZWA|J8erYm6E.Tw)c0]J<?n*0N6CbrL-2e+ m}1<A');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'shl_';

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
