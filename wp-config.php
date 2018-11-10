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
define('DB_NAME', 'fund');

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
define('AUTH_KEY',         'a}qvc}L68OJ7]G(bWd|A.8<_?fV*_}xnGG/$mWYN9ryEYeZ8Pk+ `.&SN>:}@TWh');
define('SECURE_AUTH_KEY',  'Hv|XdLJA~N-.%QDbrXmw(kLbP@x5$=XKx^NU[pFaQr`F20lce0yg*%LUG}4x.Tb ');
define('LOGGED_IN_KEY',    'sA_RXBRx :I$9SlI6tKN-K#xDUHHyu)::30xA?>;vF,M-I<P(49-yx;:je{aDmkm');
define('NONCE_KEY',        '0U+1|v|7nB.+~09I~lCa4tah5TcTr- )TPt@E$C71nJ-yI<k.z<b~mZA8`z}1w=Y');
define('AUTH_SALT',        'L!{M}*he+GC=2Tff;i~~UeGHul&EUB2n?n=$sHutJh-#x<:lsxstd<{ACPg@3QKg');
define('SECURE_AUTH_SALT', ']#vL2>|&=>%A~U&mB@gKTF&s$*2wGb^^~&2<SF}coRByZYN:B1m6bbIQw?O*?*g=');
define('LOGGED_IN_SALT',   '}^{o,{cT^P;`p2RUahg8!i#Y&7oQ> IHE]XQC!gh9Bm9tY-hNZqA:gjrz3bEb*A#');
define('NONCE_SALT',       'BfV`[O:oWc<FKge_z@+ B3V@{3Qua$.#446-;?>jTY^5f :xYZf@(<PxAvLI`Z0t');

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
