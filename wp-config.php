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
define( 'DB_NAME', 'workshop_cms' );

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
define( 'AUTH_KEY',         '.CE(LY$@vM>3Y`F/QZE$7a6zx;.jdcH/)ji%vK>m8cF6))c4&%wY9x/+{,WfPN}9' );
define( 'SECURE_AUTH_KEY',  '6&.=]=kJb~+@%0CZ-Wanfs(of>Y:h7Zf)8`fVH9s]n<6CZR5H+ThRKG@4tdI99)t' );
define( 'LOGGED_IN_KEY',    '}oF@:R(bDwifYn/}I(U37J p0p45uV~-~m|-#B&-NHO9L=;@%<|ekI)SDl&l(pmo' );
define( 'NONCE_KEY',        '<;rwUGiIc6/5,?lXwqMsN;Y}2hSy{%Td.ZH>Wf4|%a%m)*l]7SofCl(WFQ0tpe)e' );
define( 'AUTH_SALT',        'G(E%*;9nsyBM(N3%>CU_?~C3IZJGc:35x`zszz *l(7+.1Q$xz+`Tw/+ +UY$?[M' );
define( 'SECURE_AUTH_SALT', 'Auv?e^seVRp*Z!OELFCHdYDDMV$fq-VlgMa+|%ar+@tG5jS0@6YajvkHLT+OE,mO' );
define( 'LOGGED_IN_SALT',   '?E)*+WQbw7C4iFJBGyv)$kb!;nm@Q>G*5_||@(YE EuQGeZp*IaA$+#DOE>X<*d<' );
define( 'NONCE_SALT',       'X_[&:3P{N1o9@uf40u;Ra*m`jS]0cN)cmec3%P?9J?k2-BJQDcwO.6?,X`+lr-Y!' );

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
