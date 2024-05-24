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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '[`A59p2nC<V`<>-vfp8oPaL_>X;NZ~<J0L0:6%=qz? +F)2KTn/.J&Ph/+eqWr+$' );
define( 'SECURE_AUTH_KEY',   'VpVrB%MlqIe5#71C1PL* tXA6V1 asN<B3oARHb29pbMVw;j$w#?(UBj*ncBY<~3' );
define( 'LOGGED_IN_KEY',     'a[ui0P%8 L$RPJ7@qosKMji*0GuKboO!>4><])ZK-/bED}?0Zz&h-Qy:purMITa2' );
define( 'NONCE_KEY',         'ze54DyNT9nk1=x2oayDu<,Kz7i+A7E_ md}VO/HJ^XI)E5M}<;<4o*lH*?qr7iJ~' );
define( 'AUTH_SALT',         '0-P;[PNc>aK4JJy:AeM.pre4/;N*~r+TNHZS{_%A`>1>W=I][>=)YGgMPSXz_FZf' );
define( 'SECURE_AUTH_SALT',  '*Cm-TDEyJi5,<X(4eL;j*1Mm9TN^PVH3s_<IQxE+g|:<(VnJs4`0W?(yo!ge7^f7' );
define( 'LOGGED_IN_SALT',    'Ooh-J1n{Cq*AkBQq8Ds#jG#d2fiFUt|hlmh5[,EpLNww%^&lV.47!XG@}H58]l9S' );
define( 'NONCE_SALT',        'e}F`2uzzeWj~Re*mN0^HtQZS.=(?CBB{[sVq_gL5w`eu`rV,Fpl4S]$TXTujnf .' );
define( 'WP_CACHE_KEY_SALT', '$U2,`=BS-G7e]j!q4;PfiY,pd&q!u~t=+%xD0U#$+CO_Sm@K]D-5KjA-Vqq9GZH_' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
