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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wsi' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'N3Jk[$9KK-&pW~)sF{Hn`8o#tq1~NT.DgJrmT6AfrbDqm3l%$,(o2`1G6 V^C.11' );
define( 'SECURE_AUTH_KEY',  '@}U$*dOzNRjf#y%7s3rm1b AeRM @6i#CaC~# E@mu,qIM8x44=rnfHE`lRjyC,j' );
define( 'LOGGED_IN_KEY',    'zR+=Y{^s{HctCm]gG9k*!p:TIj?GCK4S{Tz=-9F,5fd@ypbOJ=$nHZO!{?ilRe1J' );
define( 'NONCE_KEY',        ')vm^97lnFCy{iu?2h-Mt$ `PC/32J0JY)Pbb)4%t+#4d^3Hy*k0B_}DGC4u}tdW ' );
define( 'AUTH_SALT',        '<eA|^v&-8ytv^T/n;lHp%E4LUt0uqY4C-1&/#Njt*mk5uG:L^N{~;@&J.Ac h-Re' );
define( 'SECURE_AUTH_SALT', 'Kk/n/&9l l[ANjCNORk7p2wF1i^tsIoQU$akYw5%SSD2:OC?<gB=J5zd(hia=&rb' );
define( 'LOGGED_IN_SALT',   ';yDA9PbVw]eKEKw]6H3f@y>[n@iN-Iayf-R?vt80<pIYC^s6^fRL@ < bw5Ui[U*' );
define( 'NONCE_SALT',       'P.1Ug8y|B&Bsx}t~f zn?Z%,M:0F{Cqu|%Q$>){((E<X4#6Wa*w/#].gn|Yhvz^K' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
