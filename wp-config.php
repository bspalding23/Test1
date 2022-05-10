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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'prac5' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'C!wY{,xnkHQ)kt^Zj~6hl(0>I41jQvJM%(R)uZh6|~Wkk^v+;jS}+J+:xFYoF/V}' );
define( 'SECURE_AUTH_KEY',  'V%4qQ^r[s.0l*lf@G2qN}vQ/i7os7!mS*(E?C`^f(GnLcP#yBQhcYnWh[BBFzJ%Q' );
define( 'LOGGED_IN_KEY',    're*IVAqZY#VPjCfIUd-R:v.o#xt|$c_Ine03>77gx3+VU;bD5g>XFa1^KfA/p#x?' );
define( 'NONCE_KEY',        '|Z*cG$Iz+g)mjpnSMYV7=]6DO%FNE7WFxdL%@cnSjKVD<9dskb1)m$|Ay[yNh>w[' );
define( 'AUTH_SALT',        ' rp_dxJB;`CVYh6rL4g[#h8Wt@J!8kyKJ0y;]?FkZij6zuQ*TIyVdp(.<OO[y[8$' );
define( 'SECURE_AUTH_SALT', ':pB}RM:kdpZk*,>:bN(<o.WZ^uwOTW7*q;2}J, ME1;dFG*Y}hWZfwjD[/4~/37W' );
define( 'LOGGED_IN_SALT',   'M }Zw;1 ZZcZf-+7 {w_/q%/fvF#w2p8E[Qg3_IfGlB1G0%! ..Fwx.ZI/b;i4Kj' );
define( 'NONCE_SALT',       '#qs&8RYi+BA?-M,^2>M])ADC(0x,SUEH&X;*B%E}IPSM^Fc5PV-UZHB.!Xr&p_XA' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
