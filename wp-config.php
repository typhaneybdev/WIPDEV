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
define('DB_NAME', 'womenpm_org');

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
define('AUTH_KEY',         'u.1nL12^u7At?L%/]YLMB9}@,Oune7<[21B=#!:H~4}~i@t`_L9B8Wf6E>a5!+_B');
define('SECURE_AUTH_KEY',  'Qf=]|MHlXNh|;lDM,R[KH1c|$/I._19EC]|Y/QQ(DO.q{3]X<#T]MYV=B!O5;!id');
define('LOGGED_IN_KEY',    '3fBJ1kcx5.p*!dI/0(nKRb@ws#qa2p80yV3&|sX/`//yL7FZH:3<7oCj<j4C28#U');
define('NONCE_KEY',        '~;0NTy%hIjMor*M&xNdW)+SU&ar}qtP_5g0a)&#q/BQ &w)_RITcceSq$|=w7_g(');
define('AUTH_SALT',        'E<@$?j%g;F~RPLa>/5vq,y]~X3?83!cc40r&0d=5.=%I~Cu^>>wI4iFc-ZnQ  ~o');
define('SECURE_AUTH_SALT', 'R#5-EM+(q`L8kwV,%rprZr+[R;}q&sy}n~o=0j=F.3k b&S6mxXWFW>e)vW2$|l$');
define('LOGGED_IN_SALT',   '2*CwUirUn#0k0 :yhY:S~4xe=Z{v kY6$RGEJXpCR@at?13/cp%w*r`0^Kc~w!qW');
define('NONCE_SALT',       'qR%Q2wBbM<L>>9jn.?ZJ6kO|fx}Dtx3}>t?YC:<NaS(E4kpgxLZVMX81;.XO0c|w');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pm_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
