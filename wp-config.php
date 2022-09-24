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
define( 'DB_NAME', 'dropshipping' );

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
define( 'AUTH_KEY',         '=,ggvECd+Cjx^^.-0f}v4O!uy=1U]/:3YUb5NnR_7q=IT@FtVIEI8uLpqpCs[ZWS' );
define( 'SECURE_AUTH_KEY',  'Y{~kd?%5Z<apzZw4?C~=vGMm@gtx*NaJ:q%Bf_$WhSNL@,q!6tE}s&N>DC#bw(`0' );
define( 'LOGGED_IN_KEY',    'mMB!fGflV/`ML1/I:rEpc$+Rg_5!e%%}R8xiB^eCTV|0]jMURs|^*i~j]eb[J3LL' );
define( 'NONCE_KEY',        ' []4|cY9+N ~0R/1:C]5ZcU;/6TUXP{%f@HZD%nJBw T7;hZsLkpYo{ZE oCoFRQ' );
define( 'AUTH_SALT',        'UUlsG#;zDCOq=23#@|pa +;8rn)$*E/ Z*tW1KJD(?^AN@]C%cu.SYEg#W<OZQCQ' );
define( 'SECURE_AUTH_SALT', '0A]C<r}eJV4Ju,&V0f(/LP$LMr-*,iUiX=2yv; p,#JX j)=Gr6ya2^Nx4#[.Ps;' );
define( 'LOGGED_IN_SALT',   'nebHN-P>qqi5/y#6Q:hS4je0,?b-<%t<]BS&zM};a5L= !0}.9u;[x`ClV7st%s+' );
define( 'NONCE_SALT',       '$f^L;H5_66eha>ve?JFDE*M+7%VfF!|qO(H[W3;K^R$#I*75p iJ)<zAxHpCyL@;' );

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
