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
define('DB_NAME', 'abcde');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'iprosoft1');

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
define('AUTH_KEY',         'Lh<R5N-LakP;J8%O&HN2L4Fl8Mp*`$y0rJWO}XPT3Am2|PRS2.F;qT%w/$)^o_|-');
define('SECURE_AUTH_KEY',  'KsjMrz*Tt,xD[XnO1GD~+ %*gU_dstY`TEJZIX8 hw*]_6%J:)8e-2(c37ctSSa7');
define('LOGGED_IN_KEY',    'Kvl8Bd>31r/!pqkFvWq>cKr3WR|f7I*0dX(;wEs_{kZDF-9I{0fS1:!-=u&{L`D|');
define('NONCE_KEY',        'E%By*5bOE++J!>iqI+,bF~Yqz~Jzr)*c2{Kg-OB9!18cj+c{P<*GLi}-eid$qr(#');
define('AUTH_SALT',        'NBCVM7,ZWR1b#PS[u)`(Lh!W>{xBV/b,fIKK+>Q$Q[+k{DBw-vHQ2B&0,IM}bbpb');
define('SECURE_AUTH_SALT', '&poo*,t7:[<!qP[=Fg6w$*,E9F[#U+tc;x(r?&*iTO/6Sl~be8zjMLz nbmKiUq7');
define('LOGGED_IN_SALT',   'jBzbT|&)Gha)VgL)7DhL:@oXm7d|Gf)7R(mf@_!!UZT-m8nM?:o9-(_slJP)r;++');
define('NONCE_SALT',       'Iw${rz|hK-2QQ<q<`/Ykv+0M+lp^sj-nNbp2/5xugk/X(XNq}/ol.uu4B(IX>T!a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
