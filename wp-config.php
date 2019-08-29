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
define( 'DB_NAME', 'breakaway' );

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
define( 'AUTH_KEY',         '?i`(A5SBaJ-3k;XP=)[UG.#K-|S:9Ps=D;*]@7/j;wR<J#IEtZ[#1g@e-Otb6#vR' );
define( 'SECURE_AUTH_KEY',  '+ af7qO&?k:}V/s6N?z^j<17V-0mO%z)w10H;`(uGBc{Xlz`6H)/kV%Pz/Qf0<MD' );
define( 'LOGGED_IN_KEY',    '*#S;M.KGU5DS^C(J*IC.[]DqB*e{C!G08n@G?jtf9P,t [=d#=%C_-BUH^^c U#b' );
define( 'NONCE_KEY',        'ggGF1;JI;Yog0[}jMl~ACSK.IGVs^3q$Sk34{]}ATHza2<e?CmI:fo`v+f@%dP^G' );
define( 'AUTH_SALT',        'eMsrXyQd?[}E4xC;-{*UgQdqM@I3L0ErL7p`Fi_}:(^M}M5U3Ak(E;?(ht ;2@Jl' );
define( 'SECURE_AUTH_SALT', ';/7tVOP^{ZyuWA`.80y:KoE[,Zub>B(#CthWXJ6_*dx2mZpC6r^(wWp%WEuP*M,O' );
define( 'LOGGED_IN_SALT',   '~}-rLo[mM[]8LlTv#}1*UOg{fv5B>.4)%_5UF&f)3hL}TIpgi3D}F3XgOn<RgD;5' );
define( 'NONCE_SALT',       ']{Izt!(B%`g@C,xl/wQydg&udPK[;Z#kWq)5O6:i/r_Tr*H|T@3a%IvCZD(^[Qvb' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
