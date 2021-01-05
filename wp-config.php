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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'shahriar778' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qwerty' );

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
define( 'AUTH_KEY',         'AU-Uk3>SdYo%x~^<:U-,5L.47><.QeO!=|L$ e*1e)YU;Vnq/f|!sjO`Rw-{aTE^' );
define( 'SECURE_AUTH_KEY',  'Qv$Vf^Y.wg9CK705@nsmJbf5U?0E,Ht33ll0?CxMNYb(9=ANL=(,*sz}KgZ2KSW;' );
define( 'LOGGED_IN_KEY',    '}@}UrzrSl;n,__u&#>|Z=.b<P#I:t%WRNOUehM G&++=:<ic/1R+!;l<w^Nf~80f' );
define( 'NONCE_KEY',        'q!U sFPHf;uE3)%CHqeA ggRBD{THniwV vZw^.~-nk%d``li9dkW5VIEId:ciR_' );
define( 'AUTH_SALT',        'uN7d}zsH1E6&|>b<*/tB{p3(1 Y|I3NUYUw@UqM%tl3]8U}1h@nLQ6 KXot)tDJ9' );
define( 'SECURE_AUTH_SALT', 'MESEsK!z;oz^IYY3)FyBc,V#:L)^%qunz9R:! kV{-9uC#g{]#OGu7/E1eM^L 9}' );
define( 'LOGGED_IN_SALT',   '0{t4h7[[9{m+TkySh2$Te%Pt)S9_#J+/DM[R4xycn-}J^<u$#4M+qCzjv#`luFOx' );
define( 'NONCE_SALT',       '97erBHHjSL!GkFyoRE{A?(#5+FTO6IzFL VB8<B88*5Y H%CnonVfU5)Dzh?.tC7' );

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
