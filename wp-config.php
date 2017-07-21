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
define('DB_NAME', 'custom-wp');

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
define('AUTH_KEY',         'BEnHg! VF w.F,O:U1gmit.|EZ**g8@EbmE74*OO,.e6xeO!PN45m/3X:ZI*j}w8');
define('SECURE_AUTH_KEY',  ' U=*v1/E`*=t92^T_-xBL00eeTkNAQB#m-Bm03.;cdhWL@otyydE!tafLEKZgB-8');
define('LOGGED_IN_KEY',    '@0+Pa65<Y&L~lyqlR[!dFh cP<Vw)I2f;;o-8|w]GV<AUhDT$[4sTckY6SuU8~Bg');
define('NONCE_KEY',        'X%@`J3{/Kb]w.{a=`33kRiX|uNud-4QE,G!/m97v?ci%Z(#;pSU=y+yGq&n^i1s`');
define('AUTH_SALT',        '6*_&c:jI(A*8awPQeu$^dyiA4M,9y/U k(o}.SMp/PK/!.!qZ^4%t#(}p`)OxF]!');
define('SECURE_AUTH_SALT', '2(>Nv@R GVUn0[e=GYv)W9=^Q>RAF ]vLcd8y~]+<t[:9T`.Xg+s177gQuLJbq:}');
define('LOGGED_IN_SALT',   '=$R3J=Dz.;Y0J5@?9  yAUrPpWlHNnRA W0l:>c8e;_2kA&XK~Xd0<i_$IUb*4[|');
define('NONCE_SALT',       'DO%z/-~T#5i3QDCM>n!((-JI)m%n6wIUp#(S[%}n(be*qpKo1Q}HXpCtmV_qBxNi');

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
