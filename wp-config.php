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
define( 'DB_NAME', 'TestWordPress_db' );

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
define( 'AUTH_KEY',         'shgo^R6zJSn$sJW@Egk1Wv5Ic/i<@4y{bNZ[_>L5weuk9p[+auG-]2TT/~zIuN#|' );
define( 'SECURE_AUTH_KEY',  '6Yy a9[Rs!rphzaQY;3Ys7(T{th@pKfQp33}d1#>gZUtb*DHqaV2ziAD2BUsvU?>' );
define( 'LOGGED_IN_KEY',    '4.Rxgt6lvNw5_eH{Nz(ox:>[Od X;j|?~E5v1+AnfRaKh3;5N[-R8n(U$!]JOVw+' );
define( 'NONCE_KEY',        'Vfmpd~8>e1-&5L-3X5$7.-E8jZxL#_4_?9?j$/[ibj2>Xl?gI1)OF)2jF55yk]9_' );
define( 'AUTH_SALT',        ';?~/p~<VoZk#5R*nXLvi@1]_uu_1,Vo=N&9^A9s(|`-nD`Eq`Fk=i56=P4d%O`z0' );
define( 'SECURE_AUTH_SALT', '|?g:9[j}2h6Chnp:a8iRkMaK3odHtfBZqg7i8P>`Ost7X[kjr3`n[,?X69Bi~e6|' );
define( 'LOGGED_IN_SALT',   'uA9#.PlIsR4I-W8{P}|/2rg,4:/TXL]-?{n&uFnCY|%7!3^:|j):8#tB.5~9<%o(' );
define( 'NONCE_SALT',       'GWqCyOKb>j5PkE[OT(3}@O4 YreE)9T}|@ /PmDLi(B/5$[nCZ/A HEv~E-I|7.s' );

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
