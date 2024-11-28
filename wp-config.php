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
/** The name of the database for WordPress */
define( 'DB_NAME', 'web-praktikum-karis' );

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
define( 'AUTH_KEY',         'Ww8p&:1Uc**T@Qv-$7>B[hF%kwX*AdEBC8-k0)3RT2sVaDU$vu*`c75kM=CF>lPd' );
define( 'SECURE_AUTH_KEY',  'b+19kdu7QY3.Kc<Gh0X!(5O;C[u&Gij8m:B1LV6_ksg1^Va7A#w]^FzDWhWEj*8I' );
define( 'LOGGED_IN_KEY',    '  e0L/d3xmX[6*@6tVjk]b@NE}L)i /63|qIwNo(mwZN#yHk&DZ@t4P^e$>=yT 5' );
define( 'NONCE_KEY',        '^ 3DWq+s5m|^T0w]cZ5D>u0*:ahrm*`w&4rtIHa$lcJJ5n61u6S]%E}%p:Ll6{s|' );
define( 'AUTH_SALT',        '/12g{QRD4cn9eT{)DC:GcgFU#(vWU!S**e*POrWpAo>#:c7CE$<ut]>DX^(yw~ 7' );
define( 'SECURE_AUTH_SALT', 'gr%ZHlz^7%rF<s!hK77swXmeQ8l{.]^M2On`NR,Q{pNz!lfTf#i&p|PBjo&fPAkE' );
define( 'LOGGED_IN_SALT',   ':C|No Ky|6^{)aoPra..rTQi.Qi}%;=[%n9h7FjiXTdh[~][KyV/b2qnB3Ycm3e&' );
define( 'NONCE_SALT',       'b>/ja9=D3f~ Wk0z~eX9ZJ$uH{[^wUBEpfa?J6{8h:5 Cf<>JH^Yo6Qik>z^%ZH}' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
