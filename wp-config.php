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
define( 'DB_NAME', 'wellness' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'Ju,.OaJpUlx$)3FAaY<GU,rrPOHd3<m0VK@JS5Ld0oCYq@kVTLIm`;q|&}UVSeB_' );
define( 'SECURE_AUTH_KEY',  'Yj-= ]~W*Ai#lT>~kt{TQBrM(<alZ6>|IwH--x:MPz4%F0V@9]&m}c%^U%(tf`R+' );
define( 'LOGGED_IN_KEY',    'C+xH%p:+j>9ok}L,5f?L>A58p9!@VR(~TJ[<M|{o%Mvp6) @[ZA)H5;k{Nyxag}C' );
define( 'NONCE_KEY',        '*=+[+!]Q-3a11=!$Ozw_.+XV]?)CT5UPMHfZK)bAGty7d?},3b[9=rj3)[?7KdLe' );
define( 'AUTH_SALT',        'A(<kxnR8C/JWX*d`,UpZ&0f6A6A);L5^PA;i?e!(L;J`*G9/z3k`Rf]U1W3]01a!' );
define( 'SECURE_AUTH_SALT', 'gK*Cf}HT#`0jMl]vI+6G2qA0WlOurK.<y+OY.CY[v9IH`5eo` acK- %6W}l?q_W' );
define( 'LOGGED_IN_SALT',   'kmv}y(1dgsc8EIMM4&zc.``HaOU6DeBp-ZY{%cYPw9@}2~3/Ul3Nc#Y<),<.kqGf' );
define( 'NONCE_SALT',       '<Q4gV`$>[a,;Q/kf7-EB-9&tr%Q$/16325i-e[G_IZza+Db4taT `^kS;OhrI}^_' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
