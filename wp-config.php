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
define( 'DB_NAME', 'adventureexpadam' );

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
define( 'AUTH_KEY',         '>Db>~K0`FQjS2alp3{B#n:9Z3+V&Llv9V]_ o:+C~}}611Mn8srj5Yr&]5m<|gZp' );
define( 'SECURE_AUTH_KEY',  'zg@9H?Xek|8`uFA.b8gDhiI|YvrJ7,V(F_<GWGlJy_7&;?#IchUMyi17h/ZSnnw}' );
define( 'LOGGED_IN_KEY',    'A;:n@R=# >*HpmvYl[o5qqOWpGg3a,3iWXc6@Q=-2uE:O4EfE[sT~YoC|r=`*Jw,' );
define( 'NONCE_KEY',        'V)NXi%9W,JcIy!c-2AAus)f iSr`}gf`+%A-ZfrchqF;xIdmoNN3oNP~f/t+^v O' );
define( 'AUTH_SALT',        '8x> E AnCHG@?@B .U#vuSxdX]a##IQ!_|DOjLyZBGM0)m#Cld3g%&fe>m3(;;|:' );
define( 'SECURE_AUTH_SALT', '}f*6kDmg8T*NLmK4/#G%t.Tvn*?t*pMA!RyymxXxhtkKVH+H%HHU(rrqEgc|q/G1' );
define( 'LOGGED_IN_SALT',   '6]D.rb@r.<PuQE`YMLc7TO$rZz4~! vZ35,aIuqVHA:b*UQs@;)Lu1#(g#I1oN_V' );
define( 'NONCE_SALT',       '`aJ#d,{m|onM|E;GlMW,ju/BNH|w[TKC~qd>A>IyNuX{a4~UnU?Ww<UJOYcG)|,c' );

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
