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
/** */

/** The name of the database for WordPress */
define('DB_NAME', 'web1');

/** MySQL database username */
define('DB_USER', 'pd_web1');

/** MySQL database password */
define('DB_PASSWORD', 'passpass');

/** MySQL hostname */
define('DB_HOST', 'wp_mariadb');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'uKyIr+l3tt^j8F=qUx][[42q:9PI br bj5V>1Dn9f]aZ?G0c0:olYK=,m]1-Tud');
define('SECURE_AUTH_KEY',  '9|%SS{}G{%<,}uw452e$+?OoP9.zNo}L*|UAeUnnVA&z2K^(=miVYiwP oGUkG-4');
define('LOGGED_IN_KEY',    'HkJcaXy]*LOif|VeP!oiX[zk(aAzIbX@Pzn@N_!U6xrD_a>}z6/s(uzL?|E:W0<@');
define('NONCE_KEY',        ',o3>VNS*%Z]M@1;xhucI#KY`^7R796yxUS~R~n^o:FfS`LrBJkd0p#tWM7;<8/74');
define('AUTH_SALT',        'R3tncZ;iecNetaVe&#j7`N|hl@WUKq4cM 4(c<*-aS@$v?IUh`/Knnny5tjb2+i(');
define('SECURE_AUTH_SALT', 'f]0AFA#zyC-_9B3Pk>?[wk=2bl]r^1={b~OrM]?A`M8*/1!f_#Pb~?<sNiCRG=_G');
define('LOGGED_IN_SALT',   'aM[=0d8O@t{.5=rU5$}h{Q(*wqV%zDt_;=Xl:GSnrM<FJmTAf!GgBK{W9V!RM%ZG');
define('NONCE_SALT',       '5;0l]EETv1@Vj6]{Oi`(;OM0s?oF9jAP^5Ck`<>oL$643nXrf^8t_3e9a^x#RgNw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
