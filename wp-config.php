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
define('DB_NAME', 'baseDBao71j');

/** MySQL database username */
define('DB_USER', 'baseDBao71j');

/** MySQL database password */
define('DB_PASSWORD', 'FQLcWKIZTk');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         ',B,{YfIQMMU7Iu$fbjcjQY,}vrzy^nvB7F>AI{<bnQXXTbEM$.muqjrUf{3$y^');
define('SECURE_AUTH_KEY',  '9tiemmtWi;6*+_]1-#SaD9GGO5CpwtWdWhKS~+_ltt~hp519_:5C|:[VdGRRZC8Gs');
define('LOGGED_IN_KEY',    'MUbEMyu$fnfnUc>,}v$$>ryFBJ}3EM{3fmTbbjfIP$<qyqnuXf7^$,.{u^MU73A');
define('NONCE_KEY',        '<5D#;amPWWeaDLx_ltmipTa#2+._*#pxDP29GDK:5ltWSaZhOW_[#pwpxel195~#]');
define('AUTH_SALT',        'O_lt-|pwC9G[15C|:[VdGSKS519ltahhdlOW#:w~|![s-GN4CC8G[0goRZROV8Gw~');
define('SECURE_AUTH_SALT', '>zFN0}33B,0cjMJQJR7FrzvYggnUc>0}v@,y^MIQ3BEM{3fnUbUcYBIv$jrrybY');
define('LOGGED_IN_SALT',   'uHP2E6E<{XfMTTbXAIy*iqmt+em6D#;]]2+#SaDLHAH;6iqmPXWiLT*+.mt-#pxD');
define('NONCE_SALT',       '{$XQIAME62umfXbUMEI,$ujyqjbfA3{^6;<].eXPETLDHA+qiaimfXP<*yqu.+ui');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
