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
define('DB_NAME', 'reimagined_wordpress');

/** MySQL database username */
define('DB_USER', 'reimagined');

/** MySQL database password */
define('DB_PASSWORD', 'Harley85');

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
define('AUTH_KEY',         '$!ocU~r5o@{#,H%.*hDZCPD%yr_oh~t-X))vvc{GPne*$)+;L7&Xl6N~tM-tStD+');
define('SECURE_AUTH_KEY',  'qV17=N$e8.*G __Uk;OA&hJdfH^HEW-]2JM<F2B&~Tj);_P5$QRKy_SI-Y9FR:/S');
define('LOGGED_IN_KEY',    '_WGCeP0B;#&*knayWOpEx6rkoC<2/JYRO!h{em0s8=Zg~LC?tc_GKB.ljE2VQKxC');
define('NONCE_KEY',        '!*z9+ X{Bk9Fu7#1]4{{8SN7lUyV@mghg8pL{bUEE00g3Y%`m>$-,FuHo+#]4,8I');
define('AUTH_SALT',        'c`Nqtsjxx/(uGM.fwhpDO;(4pDc9YC+zea+nW_E2nr31+AE1zTjwLgs*FF7R-4!(');
define('SECURE_AUTH_SALT', '`OYqEkQAmR*1>AvJbSD!Ej5V$9U*PKTRHNExA&0V<*>i~P1dhlM=h#`Do*7=Tf{d');
define('LOGGED_IN_SALT',   'L%ewzTkJ6$On4=EN|)>:4Y`Ex@wNzO9ki+J=#Urbvn1d)?Nd*BrV7cqe5o0*/i7|');
define('NONCE_SALT',       'EB_I3kc[aZ}i`G3ttf1nV?~gT{D%-9%B~C> vawWij>Y0N}R/&YSV`^P%eT03!7o');

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
