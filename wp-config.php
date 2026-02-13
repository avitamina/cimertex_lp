<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/* // The name of the database for WordPress
define( 'DB_NAME', 'avitamina_cimertex' );

// Database username
define( 'DB_USER', 'avitamina_ribas' );

// Database password
define( 'DB_PASSWORD', 'avitamina?2018' ); */

define('DB_NAME', 'cimertex_lp');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

// Database hostname
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'ij$H^ VG;#t//[74+f2r)[gP&h+l;xpf#c%79wkS5<WubAq)Isf(dhy[62^kO|$p');
define('SECURE_AUTH_KEY', '6Usa6x(c)#I:3VL>LT&Vc1mS,9%]Lt,dXDPa2CZoq8Pi8!<#t`2!,0~y}|+uAiMl');
define('LOGGED_IN_KEY', '[an])kYR@/@n7.@X>|HX(|&cWrk236+~tDT*RQH5UyGV{ qk{_g^cE^k Vn}JTD_');
define('NONCE_KEY', 'XMH&SkmJ18JT@IUD!%ua9V?/6YUX%J|eD#?BXvK6U&E0Y>9X[H2|h Xu#TW{qe}+');
define('AUTH_SALT', '0JNgP<vd)S_I?oPVnt3lj>L,`=Xa= F K|X]y@D>de^=X$bNV^|:Q?(g%zIa96J`');
define('SECURE_AUTH_SALT', '@I;gAl<]F~Vb*_{u/|*#i&opC_JU??LWjp1[rp1O@Cq9Oa(0+u*o1X|`&v6&|9NE');
define('LOGGED_IN_SALT', 'NETETdat{Aw`VRxv[%lBCno&r[~OhsT<d9n29C^gF0m9/L7WE8]vxxvEYQ27QSt(');
define('NONCE_SALT', 'q5d5#7dfXjIe4e&2|cF4zyKZbs1O1blJrK4{IG<t11|pU?sIv$NkQ6{8lWZzD28s');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
  define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
