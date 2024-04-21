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
define( 'DB_NAME', 'coolcacti_db' );

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
define( 'AUTH_KEY',         '/sgwj#2xv9=oKS(xG3cPS<)-3PO&m:~P6xX1sB~.v9gyPz`T]rfLHq};] Tj{O]_' );
define( 'SECURE_AUTH_KEY',  ',=d(]e&<t Z_e/D_o:Bv9WjBF3>V}[:=Q>HRFJYn|DEif3#H4r?02pw3gMwz%L2Z' );
define( 'LOGGED_IN_KEY',    '@m&cTKwpukBH-Yo9(:nf=B0-)CYe2Go! TJE3HWd<[92#Ld7^$R[g]PLlUwqn&[9' );
define( 'NONCE_KEY',        '(KP?Q)1Me&xgj@<&8Tkr[HZAxgMnFT@&v=6Xv}I-2)`[;nrT2:&egP7O&#ZHC(h.' );
define( 'AUTH_SALT',        'KI`9EEXO3cv`iUKfC#(PY=T]nMi [80 t}<v[}P,-oLm.#,|3H(Kl##)@ND@~Ew:' );
define( 'SECURE_AUTH_SALT', 'Vuc[w(g]!Q^%*bo/yaqa2Fl)H[#OwiC^@.g; 8Vz:?fsGi925hm{*Cso>sjC=1w;' );
define( 'LOGGED_IN_SALT',   '6;xIn4Hi aU%4RVQM^5]xKMJR%1j)~Jj|$*e~D@X/dne7Kx /l7e8=zXdAPy,P9?' );
define( 'NONCE_SALT',       'bl4mQ:|/Z!J=ku#q&#=zWRhj91D!<k}? gY(jI9d9pPcUS]LXE Vi7DpTDZ+=I*8' );

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
