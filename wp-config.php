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
define( 'DB_NAME', 'drone_id' );

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

define( 'FS_METHOD', 'direct' );

define( 'upload_max_size' , '256M' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'S6$M}pUA(,OV.NmOm5^qE|ZF7xeb_~8MwBK!TUcp^m3)>%X7GaV{8TY[C7BHy8(6' );
define( 'SECURE_AUTH_KEY',  'TC&;76N N?pI3 gHiiXJ1m:A0BUE)49X /9tY4Lb}m|m@e)gd-Ii37E{yE9F2^#]' );
define( 'LOGGED_IN_KEY',    'B}vSe9|>m)H31A9aeiF},swYG5XPNW2P@IyZlTYcNi[M/n6sW>)}V:/0Tw[iC*x^' );
define( 'NONCE_KEY',        'V)bT> s*l`!I6:%<4KTHg(Wo#hxfpM}x&cT?6w`(CP4iMb%#ztTMDN3gZaD;=yq,' );
define( 'AUTH_SALT',        'TU:#yHYH}&1r;/}/AQE_Dtc}X^W4h#lHe=;:]E={U K{&15nxfQ*MAJ5|+6}.[EN' );
define( 'SECURE_AUTH_SALT', 'Q{<99;:]#x]_<u&tDWc?9c+aKx6}SKI0it9/^zB)Tihwu{p:%nHs,{Q>#1v=%#u1' );
define( 'LOGGED_IN_SALT',   '`2C,_J@5|fDALO3##)w]^w[mp|~B^pI2lTNcU:L)?Jt90`5)kZ*,p%u*E7O4`3C?' );
define( 'NONCE_SALT',       ']FOLy *ZbN ^tvfF5jRi;>Wfi-tV!CjEVm/|s,U#z(&8p6<UskayLYou0v,mB#zi' );

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