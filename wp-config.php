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
define('DB_NAME', 'myblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'C/ZIgN9nuC0|oCOsr3L=;a=tH G^KVnGva$8z[J}:n{&PSb[7#OGmk!WvhNPirWi');
define('SECURE_AUTH_KEY',  '5Zcamx@P,bfO@&LSz3@b~)(RiT$uy|_8hN@YzR{Tx)OfEL% )vZ)_9*B+aJ:hJj-');
define('LOGGED_IN_KEY',    's5[0t[?0!887FAk}U!X_i3HjBD&g>/qty} G9?Zb*k]moiJ[)Th |o:(deXu{*(l');
define('NONCE_KEY',        ',_e1O>UpXN@IYC}BI}G~;w/D@g,mwWu9ZQXo=qw5J>im8|k {@ap]$b%Q,|4XLKN');
define('AUTH_SALT',        'u1/{.G7kB>lfLv$ e}l%*~N5~3r* (fr/zWdAsUcE,W`6yzTkrP}Bd(v;0fF4c8r');
define('SECURE_AUTH_SALT', 'CeNhy=.O2+[{<*@%iRTT7vyjNEZ`]OrhHKb;^[bB-o#&Y:y#bLJ)nt;*{b=o/qzp');
define('LOGGED_IN_SALT',   '``0<Y>]qXO&w8*BlwsJfDkif+7OtT]+U)#ss0[T{B#VI%aZVC2!:H7BJ_~tiCc;x');
define('NONCE_SALT',       ';p-uoM mf$oS+W:G`@P2P~P9>r2p2xa!unf%@zaDB+aBhk?aRKKI)A6za@EYqA!@');

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
