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
define( 'DB_NAME', 'wp-plugin' );

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
define( 'AUTH_KEY',         'qo-%tE7?[bi?n#O^Eknn~ofnYg9tu+pvY>EeVHx{3a*zn], UkvK{7G40a=C%.k@' );
define( 'SECURE_AUTH_KEY',  '36Zk>EzK&kHt=$9sJH?)~dPtU%D)2UKW#1%O1rZ,vDBAB&b9}1-0Ddya@%.9#QDC' );
define( 'LOGGED_IN_KEY',    'm|Kx855%j&[~QSdn #2LkX/*x:=dD|`E:f9rqb3mZZqij8y%*=H]oWNLHU1.e$X]' );
define( 'NONCE_KEY',        '0bK>zh0M=:xgV8Va=:^W^XG-k,yI )V{aAfgrPfDG+|F^{=X7T C*f^SjdHZWBlA' );
define( 'AUTH_SALT',        'gvRogKW*l=_y-i%P@J0*+.{Vulc*EIAGRvY#Vo{27 S!jp>GIPNFp[JoR32gzG$X' );
define( 'SECURE_AUTH_SALT', 'Z8W)c=WN}_wH7fhrXm-N2~K((unllBF&SxQ46p2zs@JcY]epg -kK8i3kn*Umd 6' );
define( 'LOGGED_IN_SALT',   'bypr}lH]96}cHIBsN/b#DK<liC)G]+5I/J-is(:?mz6N.V<$%o}hw[hqo>,#8e<_' );
define( 'NONCE_SALT',       '.zEx$VYLLg1`8:}-U/MKE(HFD!0-!WrC0j=FH2}H69*@ma?mbEU}6iv<&]Cc*G+@' );

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
