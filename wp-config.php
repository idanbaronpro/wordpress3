<?php // Modified for Hebrew translation
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
define('DB_NAME', 'wordpress_sandbox');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'amsterdam99');

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
define('AUTH_KEY',         'Y-oee_!>|]KnaQ.Tym5_w&N{Y`mLn^Jid/J4z>?G*cc}1aO`D)*K3qXa~+Lm-,zo');
define('SECURE_AUTH_KEY',  'cH9={M$,=v9rAj%~|34]n?|}tz(iUQrc6HS%l7!N,Ac6DW*:=a[*M>y~-c$[=:tE');
define('LOGGED_IN_KEY',    'P|H$VkA+ADK~6+nhtCRi>lNxFC-fLk@8W^b{3;Y%Ty(*]YIYv)+|csO5iAT#K.s}');
define('NONCE_KEY',        'p]Sg,B{+59E!YvnPu4fq2GCEF/vIOw^erHEGsR&U[P.*o<^plnrYo7RB(r}@AC+g');
define('AUTH_SALT',        ':zw9rV]cwA2M-zQ(A1_( ?sOSD z+[X3lbM_nr0f[{RU(Zgoqv}HsMhfj|=JN&PD');
define('SECURE_AUTH_SALT', 'aS3Dxu%OD}RN`Q15*9T-WZ{dir@jNVDbU@*rz|hNpHehjD_kZx9Pb.db#-<q0Hx-');
define('LOGGED_IN_SALT',   '*So<Wz&V*/$-+0XW)8J|$>K97z5J*&<U}V)E+)d^RmWNMG$L6?(n#1D-PahB;UuY');
define('NONCE_SALT',       ')Va1OQW62r=Z<s=1=BuJ!hj|B,.%+^8G|{[V4wv8:,4hZ$rPH#?P0wU}dzqS::0v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_sandbox_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 * By default, the Hebrew locale is used.
 */
define('WPLANG', 'he_IL');

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
