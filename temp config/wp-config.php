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
define( 'DB_NAME', 'striptin_78f8' );


/** MySQL database username */
define( 'DB_USER', 'striptin_78f8' );


/** MySQL database password */
define( 'DB_PASSWORD', '9jucmlamr6pxx3yv' );


/** MySQL hostname */
define( 'DB_HOST', '10.169.0.247' );


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
define( 'AUTH_KEY',         'qBy:cy^y+dPN!%4e=*TewK1;B~n2=Ixoj3nW<L0lx1$sr<{T5#733yj2af<]|mji' );

define( 'SECURE_AUTH_KEY',  '(u#3zak@GH}G?pWsPco%4PFh 7aq}x1rHY))~6z 6SIlRI4?C>tpP*2o?Tx7T>5?' );

define( 'LOGGED_IN_KEY',    '(#GO^^eIm6l72>4B70X6(9q<MLlMDvRN.|/xd~#52%#^hD2=$jw4Qwiy$dcy).Cd' );

define( 'NONCE_KEY',        '7b/kj1 >Zv%B@.`Sv]3[.0%J3[NqdSc:D><ph:l[!6ti/T.-+l5<SG,Twzo{2-V6' );

define( 'AUTH_SALT',        'z]|3=QC?#cRl@x3Slb@pSHfigqmi(sn`HLH87d&]IBi| JK:!(?nt6dAM4:=1a?x' );

define( 'SECURE_AUTH_SALT', '<E#n0,=OQQQt8=!ZLOgv(l1hlf6<Ev7V^B}v4?i[52xDADVk==9Q(@OTzPiSQpdB' );

define( 'LOGGED_IN_SALT',   '*:&$H^i-z?1C)j}Rq#AueB:v5T<VtAPKpm}<zb_cpaG&GqV=/o$,fb$LwZ$Lw) <' );

define( 'NONCE_SALT',       'LyE;5lNKi+VA-mBJe2[2s|+#rr(I`5IGFQ0wj#Y~vk^xTm^|bF+DK/j~1&I=p4dd' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'invest_';


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

define( 'WP_DEBUG', false );