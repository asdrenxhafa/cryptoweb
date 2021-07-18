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
define( 'DB_NAME', 'cryptoweb' );

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
define( 'AUTH_KEY',         'uBg{:ZNqk}kr{.}r%kNt9[?QwL PjC4qN(Q.|aw5]czV]3}lX>Y$jZdo !~LkbM>' );
define( 'SECURE_AUTH_KEY',  'q@=~4QH;&yCG`/aeko7eW4Q`11xquN<d9/xhQFRCq&%c[Ox!=:^R1GhH:2k7w@Gm' );
define( 'LOGGED_IN_KEY',    'eZHox;~=}g&:3%lcNxm4&eYo=/q]*?l$P+GWBuvkxvH:F*~fg2#Yw<G8c81^2oQ;' );
define( 'NONCE_KEY',        '.UQ tprq)056`)%mg$.o!6%vfzBX8b70LN*!-7-TKPQsCuMa.d6eA,KyHH*n#IoH' );
define( 'AUTH_SALT',        'MERPI4!n<c!%Z}aX`vooW7^U{8n[lfg,[=eK^5B8Xf3.i|1p1A#qn|P4,3tGkTMW' );
define( 'SECURE_AUTH_SALT', 's}-}ljH`%[[EC40^C3UH%NOYI_t+!)TL%3q93Gt&Ges6oUMJ1;~0!Di.?ftX_p}%' );
define( 'LOGGED_IN_SALT',   ' VFNVOQR,WBdWVR6m+_S5Uc5b01B5S:u+DxZOk1>sbfv2:8At=X&X(AJJ>e:/GxI' );
define( 'NONCE_SALT',       '([(,4B{=r_uw.;SW*;2/@ K_1;/?T=d&b[ul)izlNBw5hqv5wD?kc3JH~#}89a:0' );

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
