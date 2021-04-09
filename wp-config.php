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
define( 'DB_NAME', 'getgroup' );

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
define( 'AUTH_KEY',         '7z{8Q]GC,W`W0fU]7!%u-[?I1KHuQ[RtENmwioW(?pSVCl&boKxc+8~-a>vX9i5o' );
define( 'SECURE_AUTH_KEY',  'tNHO*$<v+DGO`:LYdh69Vt?4oHqUhJk18Zj;)3N.9~{EWz,sct@iR#b1NO8&6aH^' );
define( 'LOGGED_IN_KEY',    '9+@i%M+`D[xIdnVHUWZ_~%=E6$[tlbD>5Ry%J0Qh;b}Ibkla8{_Dc,Gr/un3(G^C' );
define( 'NONCE_KEY',        'V17D-3q:N0oi.F[B(.#<vGu^-5rLAxc@@nud*<`OE[s$HoVu%0d[B8lhOXI-r_Eo' );
define( 'AUTH_SALT',        'LIjwkQ6-~};J>u8@$J&f&E]OZhvp*=Yo42)6]+EEJF]wA.wm]CgJ]FGef()f@Lz.' );
define( 'SECURE_AUTH_SALT', '$&7?p/@D-j9Eo[2g4ZL[R_ (:5,bOkPmwK&#HcRA*iWP5Ax-DQ/ B3qWtbWN(R5M' );
define( 'LOGGED_IN_SALT',   'U8W x5;Q=8]f}kv0PPUyi4.ml4gNKtFp$X esi&0)9z8&re.Y}QlTrZ-ea,yCROZ' );
define( 'NONCE_SALT',       'DQz*yu E>%|6{;QDrMWBN)`COe~{FXI:CRFjix1F~@lGwZC6UWzP@#pHLITb b7.' );

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
