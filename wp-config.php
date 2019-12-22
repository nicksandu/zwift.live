<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
define( 'DB_NAME', 'zwift.live_db' );
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
define( 'AUTH_KEY',         'XV]o)%b(q?]0CY[X@wBHl1=k6y*ZamP(28f[}L}barX%RuK)w.Eqt%F=AS@>>}U!' );
define( 'SECURE_AUTH_KEY',  'kI9UYzmeS^IVggm8[]y%*Q-2Xd{GjgT*TH(+GpHtl~$G6Y9zw.yWE.[aSDe09VNI' );
define( 'LOGGED_IN_KEY',    '*=i@8JZ>P&K,vw?uvn1v1#/%]>{5@3B+%8p-`l0{1i 2i#bQ!C+{ jHA4N%Hfaos' );
define( 'NONCE_KEY',        'm,Sw{m{74R2)_<nKMGaVv=p`3I`>-e18]o-~J!,g}<lz;?p$L]ah4$xR7A&N6w1k' );
define( 'AUTH_SALT',        'S&6}y~> mJIT3^Rt:!4N@E`+-6%+PQ()x5^g+hO9@? m:jx=#I4(L&q?/1I2ZCs$' );
define( 'SECURE_AUTH_SALT', '~7L@{xohJVN?~,[vShZR!0L?E4x`$1z1&!M7S,A9:(-GNKxTg2+9eI#TNfxlg)^)' );
define( 'LOGGED_IN_SALT',   ',@nOcd`UN>EqT1BBlyE0L9k8wjw@qWFbTU2ctbjp!+8d,k^8KFh&REwbW/&B3~{0' );
define( 'NONCE_SALT',       '4zSoX!1#|F=MSu{4K{1OT?$6h8Am/)1dHmN,uPHQ/fJt=]]4obr%B@RGLpQ?PCBh' );
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