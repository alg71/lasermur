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
define( 'DB_NAME', 'lasermur' );

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
define( 'AUTH_KEY',         '#b;WEPSS>woaI$(Hm+Z[Lkfo%]>7}q>F~.zD0Zb)pdpudIntJH7oR_in$KRSB_]p' );
define( 'SECURE_AUTH_KEY',  'F+15%y[zX6&3PN}`e:ju&H$,$Ivi[kK34XpAoVD2J8o$GuF0~?s)fiI-8Djp,+^C' );
define( 'LOGGED_IN_KEY',    '9^$RJL!`k|k8?Xyr><v!KJFE 8a5V!t1<r06F+G}9[F2tZScpBXr.AbL!Sdm$521' );
define( 'NONCE_KEY',        '?vg V.69y&4KVDsRmm_tIhTgRdRT[rfu7i>Y r`9;+LZ7/ie=kVnN:aLxL+b6i`]' );
define( 'AUTH_SALT',        'sZm)jR$f`9gurQnWyF8-jo}3e7x`JJ5xiUCH_^vBq~`CD)>LM`0(WL$@7v@dV@8=' );
define( 'SECURE_AUTH_SALT', 'N q*2&DOz9D^O*?_[c-E<gj-r?J(R(_$<Hv$`Upja!GsN4Qo?*ndVLCZ7d@kbp*Q' );
define( 'LOGGED_IN_SALT',   'LeC >T?Q?:5/IA`aGpdXy:Tv._@-O`f?KoI`V wdhxJSBIa_;myIt:2V0XMH]m6C' );
define( 'NONCE_SALT',       '.QEYXfn3TY=2NSl1K?ZLrmc<^A^}BN9{vq?e19pV$%v2[&S13cYMVG84;Y/@:-K,' );

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
