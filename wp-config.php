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
define( 'DB_NAME', 'db1' );

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
define( 'AUTH_KEY',         'K;M|E JUa^4Nb1:JUqBf{Utu]7nx]YCTxOrN6302y:{``v-&W@z//]A$gnv)5i9o' );
define( 'SECURE_AUTH_KEY',  'Q^jU8xm:IHHOPx$s/P}Z,~}}6$%^Oo0(@i2^o;=!(@>?&/=8_B,V2dS <wP}J>;&' );
define( 'LOGGED_IN_KEY',    'wP 9?lQh:GKXB=CJWy0qTrB9LO]ToAU:,XS#u+.iVL&$:Z%u%4B<1dKO2AoM+xZ>' );
define( 'NONCE_KEY',        'Tmwnt2s$f4/3D3I(J%:F2FtslHbm hZnq(>&%cts$QJIr%O9EqGyWfj5{$a<UUwC' );
define( 'AUTH_SALT',        '=1}.TrNxB7[-kPCcI+XU6lgU0T:`*p0K5?RL.jE}~dLN3?kl=W/C6FEN=cY%!>3]' );
define( 'SECURE_AUTH_SALT', 'JVgaM84a|Ke!!&36F!8r?e&&=sNQfRpWytxU6{xi{n+{xc1W? a-h3:K:uldn%{p' );
define( 'LOGGED_IN_SALT',   '*5jU.xhD8%tDv}it[<*GPzMjn%%b?8a+jHZ0hwXf3hbiy&YX_rP~./MF%{#,c`eV' );
define( 'NONCE_SALT',       'DIJ<^!-+5TjVcXhl&]TN8$1y$(OAo*d[^GW{=:aJPD;}(mT~yq{)MXJ,x-LhiFq(' );

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
