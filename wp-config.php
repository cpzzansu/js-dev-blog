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
define( 'DB_NAME', 'js_dev_blog' );

/** Database username */
define( 'DB_USER', 'junsu' );

/** Database password */
define( 'DB_PASSWORD', 'skswkstn!2' );

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
define( 'AUTH_KEY',         'l`Z`}1ig=]C|Y&AVRqT`)e6yo`M6dbvko9L_#ukj_kqa2<aa<#hH>Lwc8]O%~HMX' );
define( 'SECURE_AUTH_KEY',  '0e]0irJ1-{)FjIK]QMm*EsOGDp#a#>D&0*B1e0$8~ ^rU&gTxld{pS5!}F&Gu5kK' );
define( 'LOGGED_IN_KEY',    'JY?]g;V4U]B@?hQE5aQ:1Y=8b~@s9,ude@XE29G$C!,4x>HbFrM=&H&`AcoORNjQ' );
define( 'NONCE_KEY',        'zodr$N#.f==Sx3HPG2-]^SIj*U<^<el45mBe{FLs)|T(S/tQ1w4[&XnL&u -v/v-' );
define( 'AUTH_SALT',        '->DzDBmG{p:Tf8@:Y?+`OfnK.S]kYLCr|J9`8&!1] GH%nl!AO~L9ey)S0*3+z_N' );
define( 'SECURE_AUTH_SALT', '$_VB:BjE?H=9_yCP;)wFZSES&kR7~v4&$K?OHb!Io>nY?<pDTfW+KDwTMoWZ0v#2' );
define( 'LOGGED_IN_SALT',   '<9||p=;u`*C R^]uIKh0}zMXgnCjOs3uN#yE:_U#ccoy|~37c)st/o/)K<,@-(bv' );
define( 'NONCE_SALT',       '|!NtOh7SxWR]];Ky{m%cu[*VI!  )+huOh9ur[=w4[F<=ZM}4=e9YpqLm;|hOCG/' );

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
define('DISALLOW_FILE_EDIT', true);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
