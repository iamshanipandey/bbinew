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
define( 'DB_NAME', 'bbinew_db' );

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
define( 'AUTH_KEY',         '9](JDAiXxA2!-E!.{^c6HP]gW6q39)$-zvU7=DgE7R!bHPQ&{(#e#?vm*40c]gTb' );
define( 'SECURE_AUTH_KEY',  'G>(Cq!74v6H(?Fe7p={BeDruwi2V-82G/@v4Hr [,&vaD ky /if[Oiwh]+9]!63' );
define( 'LOGGED_IN_KEY',    '0O&QESQP($Ex-:1=JX0#fm$&%`PvT)NOi?r?$&qg(V/V,hrg^r:aJCu44(CZCDzL' );
define( 'NONCE_KEY',        '** V:W8dO%{[h`{=:><N]`G VR}$8lzOLpS4o:Y__{m44,~$JJ l_bPPmI4]Vh@O' );
define( 'AUTH_SALT',        's9v_@Z)7K)VjnbCN$5wf3l$N~LoBae1?+mqGaK;]Jq4e4W&_GFmo%*0_)F6/.Z3Z' );
define( 'SECURE_AUTH_SALT', 'E#M=rkbrNpWe6`pohMq0VN!y&j{G)]^vY(ku1fOl&w}$G|@+17o;6@hd*(XiB(Lv' );
define( 'LOGGED_IN_SALT',   'GxmAwO#W&`)Pb)pJT(T3%SlI|/C/ TG{Mi,O-(:^T!A&w%h&x2aVshd(}yut0%`^' );
define( 'NONCE_SALT',       'xk7=XP?hnEx2+Q]CZeVu.|&vY)rIuvF}5YF(^WXX3(3LdcB4KuI.<F7qC#5/RM<.' );

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
