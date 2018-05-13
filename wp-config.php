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
define('DB_NAME', 'db_9fa77e_w483_1');

/** MySQL database username */
define('DB_USER', '9fa77e_w483_1');

/** MySQL database password */
define('DB_PASSWORD', 'Development1');

/** MySQL hostname */
define('DB_HOST', 'MYSQL5006.site4now.net');

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
define('AUTH_KEY',         '&qI4jN]M2`{8-s5m/Y$~H!R6iz<a]<>/hbkCJY@hT@;ryq+~z}JBl)bXRSF>|,>q');
define('SECURE_AUTH_KEY',  '7M~Iq8?39(LZvR5ZdKUjJ2kl$#_L9EcQ:?7Q0MLgZ<%2U9+PI[TrwxU^[CDjZ~.k');
define('LOGGED_IN_KEY',    'r*^.+vh9,?9uaO+-y)gmb~tH}SPJ|$YY^!ciAZ|lf&&9R5W ha}%Ej-opn~67qFg');
define('NONCE_KEY',        '[YIPK*^tmEB~P,!>!FAYKg~HqUR<jLHj.#E>-mmdQBwH`=A)&(lCd}52uXEQGUL$');
define('AUTH_SALT',        'CJZvz`z*cm jaEA3uKQDg5-3v2UQknsCyS)}<iH9n10s~G*{)l@m+gYH T1lXE(,');
define('SECURE_AUTH_SALT', '(lvBoMWiA1t(bH`I_eC];@1S!uB>K(4-xICKkJcsJNF:<8]R>Qcy^9ac^wvA.O+G');
define('LOGGED_IN_SALT',   '&e^jPTCCzB[N3-|qce_9]DWYWV_PLUVB8KpWZD z~T1*[5vTU5n4~!v+o;[h4;d*');
define('NONCE_SALT',       '[r5q|VhfQ((k;J9*>|*zb7!AbKcNXSQQ)]x;sYB?C`~U<rNh!kcW*gy_nLCtT_Cv');

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

/**define('WP_DEBUG', false);**/
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
