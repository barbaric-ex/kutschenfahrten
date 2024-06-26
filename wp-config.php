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
define( 'DB_NAME', 'kutschenfahrten' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ')MG)n@jL{t8dEKI)wxa.`>Gbs?`GllkE{l[[sZX|jMqND5d*FR~]1)7b4hdO}h|U' );
define( 'SECURE_AUTH_KEY',  'l-7b8dSR_RdR$Hg@4iP<Q(d/.$*J2B/.Nav)!#Ydz%J9#NVx3:_oW6+,w4 62]$&' );
define( 'LOGGED_IN_KEY',    'L;up-<J;=ZIU[3;I|gfyMr>jw4ISe8E}|]:(:?#v82RC`C=|U7, J#.AuM%Kd:Bc' );
define( 'NONCE_KEY',        '(A<G[_*8AeRSO,a5dFXDdUJ|TX-R5()x=YZ[`V:7)9*W76+pe~Vy#KSW#]JyoD.i' );
define( 'AUTH_SALT',        '(FG,g*d2kk{K-712#oA,UdGJb8#X/y`6.x9nSt@D&^VI2YamDE7/%JtE-aKd-`or' );
define( 'SECURE_AUTH_SALT', '}&K#Y@{;A_Fd D <!4F~XV{iH^1_ZRs/[$, bE*F^|95$Wx96Y~Ck%}Uu,8#/=gY' );
define( 'LOGGED_IN_SALT',   'JDWpA(q)|B!CrK0kQ7,~9GM9sF$Q2A{]:Iz}?Xmlz,e$,N`8cuj4BNhr3{0}gNL5' );
define( 'NONCE_SALT',       '1YD?^UuG<xXpeB?y7Dr*)3ayF=z,{!$I.qePxZwcl:;,`<FO+i+v= WXe+F_<QAQ' );

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
