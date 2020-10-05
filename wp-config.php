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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'prueba6' );

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
define( 'AUTH_KEY',         '(qVC#)j_EneBFMUh=e7I}=r@WS_COVO[f}#GEs8,QgievwNo LKc,]kF:}%CwWP9' );
define( 'SECURE_AUTH_KEY',  '8*GMCD9osrU&xl{]R`dwAnaf*I7]7[o2y(Nlj7tRss:d=38DJWd?k%B+85x-NNs ' );
define( 'LOGGED_IN_KEY',    't${qmATL%em:@  u;<|$=]gvs]0$Bv/vLAzujBDj3aj~N{_I!^R_-P#G$}K0T?W3' );
define( 'NONCE_KEY',        'K]kWoo_a>ox^R~Ko mPo{IZz.tKj~j==m7ee,&;sm^93X]<,%]@@zba4b K[_,(k' );
define( 'AUTH_SALT',        'QP_=lHAAu7M!}|uoqmtkV P`FOgaSN!n0W@R*M~L+#Dh6rmO>l)lf|(yIoDVnPtz' );
define( 'SECURE_AUTH_SALT', '*B}}#B~u@h$?L;+1~Lt@W/m<=;/gSq/R#X3gvP,SSk=7..bM-+N{b~lOIN,%JMVy' );
define( 'LOGGED_IN_SALT',   'b9`3<p.)h)<K]F!u((Vu3`AL1*a6i)_L<f!,-7hmN%/V+;5+`X%F8|EUStG:{G~(' );
define( 'NONCE_SALT',       '($uMlH;kPgjA7m4.jk_L72cInbK$)VDhZy:rAplL03/iERt#cBwO291(Z-L871i{' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
