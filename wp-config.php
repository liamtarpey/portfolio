<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'liamtarp_portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '+HRWqfNJY(V#|F|J|c[!)Z5Ju^-dHSG?gp}%}eq}n[k7W,uNMHJE7y+Uum&iD.X]');
define('SECURE_AUTH_KEY',  '2%+M7sd}i<2eB85+! H>I~m{ C)BNFo.Z](sExu2#D#7[:NW<|-:M5@WZlww_t7r');
define('LOGGED_IN_KEY',    ' `e`2tR04Eo0*D41epRm)Yp8v@u?u8::+,*sh[JHjt#EUA-T(eW+Wr -Z3Q4-d3%');
define('NONCE_KEY',        'f!?Sx3|bvX576Q[?uy!S5mWeX*;,1-K7D8>%gq4 EIwl?,0n#~-9kd9/=Jw{gM/?');
define('AUTH_SALT',        'Z`sB_-K5/cP?udHUJRoGn,2-&su?l:rI%[Slij3Rc*] }l;-SNq9 +ti>f::P@|l');
define('SECURE_AUTH_SALT', '^NOp,MyzuGb6so`MlTa>9qK9;Vni+OBqenbgy$?q]T?.]G~Uq8IBP;t20nze1I1W');
define('LOGGED_IN_SALT',   'hYAEqd-!5M(Ppvbth-lDPVqyZMX>udE}4/8?+@;4]?Zdk|Vv >U;Qc+S[1)CZ.5F');
define('NONCE_SALT',       'N$jg|+wy;cMr5]2UgbcK:ZI8+JBjQ&0}L.!7bFf>+[KjsFgM}+fpvAJ%OG]Gz|@T');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
