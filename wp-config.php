<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'diegjimenezs_ecommerce' );

/** Database username */
define( 'DB_USER', 'diegjimenezs_ecommerce' );

/** Database password */
define( 'DB_PASSWORD', 'Cadin2418' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '~RL7jT^rzejKtg moQN,I,kTQ4G2_HeTKjVFN`4nQDx{HKf?4 AIF*q/!+FT6a`T' );
define( 'SECURE_AUTH_KEY',  '5k[~.zcvf7WR8&{@_IkHG`:r%cj>OeQ0caCf.^1u%jc^e[{KR34I`ix10#^RN|5$' );
define( 'LOGGED_IN_KEY',    '*,+y+d4a*5d$pQtLoU{-%xO>C8o<5JbAcuHf&<*H!Q5*=W.AO@t$*2%UM^k$5|(`' );
define( 'NONCE_KEY',        'Q:}$k>5aQDa~>On27b]uw=x}c5W%(_nM})F[g~L)[<m}Hc(`D1Hg5aocOL^#zx/)' );
define( 'AUTH_SALT',        '{zprAFSo /OLLQYDmrLby.W0bR2*.QsT<rv$MG7>;dz$&<Ye-_`uM43)%,zu3<q3' );
define( 'SECURE_AUTH_SALT', '5&IoEwp)RR3Xec!a>LVJGITz:fi&,@R1v3$U[dZ!ZV5;I4kMM:6)N/>z?ZNsN8=l' );
define( 'LOGGED_IN_SALT',   '<:GxX>wSUjC2zxz5sze2lRWc}cV+(<{e>^>K6-~wDfJ6)3^+VToye]u*k_N5Jl#R' );
define( 'NONCE_SALT',       'RV#h@I@T NtH{TQa:k<:4-m` gtgCCiq=bVBo~XJ>:Poz<SX._b?!<~:V93C#1{C' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
