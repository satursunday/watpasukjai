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
define('DB_NAME', 'admin_wordpress');

/** MySQL database username */
define('DB_USER', 'admin_wp');

/** MySQL database password */
define('DB_PASSWORD', 'goH9g;pN8v,');

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
define('AUTH_KEY',         'i@rPvzz&N2kSCjAqrwB0T/0[8b^ZNLPzTIMm_Qc44k1o$$6Sn&2wNp7>Ee6iqjVe');
define('SECURE_AUTH_KEY',  'ISMpZa6`yL@^=r2_u=r%/M%6OcX>3Af+=wwsuNo1:3{6p-TUhBrSZNGYvr6K9;g+');
define('LOGGED_IN_KEY',    'V0sSz^2BX66P!}BryARow<@Whr-AZhbkPBhW~.V3KiB-:FhF dV&z{mqcgaYeJS*');
define('NONCE_KEY',        '?<I2h]i ,,doR@m9W9lxR#FdV#P%r[i7},iOeVrASlt9N@#+kW4`PcvJfvd~sFI+');
define('AUTH_SALT',        'QPT>6!xKPrLI U6>D d7lz!;yE6vM=UoM-wEQU=[w@;w)0WH[{fZ<J[xzCUfR>-@');
define('SECURE_AUTH_SALT', '!DwQcML! W~J`L-G|(yR&3I4UYCu?y7I7Fr.ibz*F?IlrcPj^h%7dj%e^iW[$R(&');
define('LOGGED_IN_SALT',   'u84:&^Iu88Fu.v%i1O70c?wX5o,,9=l?,uzAUt&fNzZ:_GIry_xz49&Z9~#P$E6?');
define('NONCE_SALT',       'SfOK<dE#zLa$V~@Qd;{0{(,Y/Pa*l@AL:LL3(SJkqKudi7Xb*$X1_dKncSn_h4I<');

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
