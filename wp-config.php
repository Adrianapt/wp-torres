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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-torres' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'd43a85c472b83bff2ba9fc1cc7c2794b48903533465cd09f' );

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
define( 'AUTH_KEY',         'VhZJQ]Cf?2|?bu%g}?r{0]|5#d]nDEX=%XCjDCV`8afK1rU#*k.waqxQF[;E]cKR' );
define( 'SECURE_AUTH_KEY',  ':ekrDb5CrAu#b8O%hk_K#OILw5~uaX W1T@`9F)6%ak}y8C)I=(7_EFT#PjcI~0x' );
define( 'LOGGED_IN_KEY',    'T+u5U;k.rhTH._1zBE#e%O=ui+?-bxqu]jfYz{CqsYn^Qp#.*|T-FYp<p;D)+E?,' );
define( 'NONCE_KEY',        '4w8X2e|F QpFrG;dE* ]xBrTqqx(%h*boEjLZAR83&<qg8?l[Wy-{:U.AYnm|qrD' );
define( 'AUTH_SALT',        'rU_zS>T0Q=^1eO_NP4m5qC;p<tUCOq_~Y_(8_fa9Ab:wVb4bF5~,CAEHab^B74xx' );
define( 'SECURE_AUTH_SALT', 'iPk%zcf!,Ge<fp.7aB2h# |QNzt!/?WbNx?(9Ue<9 %X?:xmYe)M=EC!0D18R%7 ' );
define( 'LOGGED_IN_SALT',   'caG-76LujO+ -zj%rauAh?,1HOq_r*Oyi+Sl>CRCA%K`.tQU+`}Cn+N9f9;`k7<U' );
define( 'NONCE_SALT',       'K)lem.Jo7vEpJo@o=k-oWmOJA~Tbp]O juaAjL^7HRnCBk:az^gl:);s2NVA)DB>' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
