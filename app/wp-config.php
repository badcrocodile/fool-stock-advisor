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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'database.foolishstockadvisor.internal' );

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
define( 'AUTH_KEY',         '6[,QuXaVMw$sNpDW^3~T2Bs}G+iwe_?+auaM;nsMaHs`.+,EBz.mv]gKGE&e/L2:' );
define( 'SECURE_AUTH_KEY',  'OeISV{uk$4J1{:ECbbEa&61Rlhv]=-)Nda0;GD{P4u?&/D}4cY#`<F n{hDw2tlQ' );
define( 'LOGGED_IN_KEY',    'o.sHx/&_rED2e~=0>OC+Bd5UK*ix;%;^]QdmN_a$B,(}B0#;*i|]*qX7Lk6ra`13' );
define( 'NONCE_KEY',        'Hq:4<!G&ks1RXiWJs!_tgzKu%HRYX-WfQKd, N&4|dZC6L_|owI%).y8Fi3V)#|C' );
define( 'AUTH_SALT',        '~k#;+Up3m1XsAM`c.>|Mhn@K~M0[6*,I8vO`@)l*B_/Bxe_IQ-Z(c9_4MnHwO^<A' );
define( 'SECURE_AUTH_SALT', '+a$^iQe*[|y>r[fXpL/ED7.MzqFCMF8S)iGwT5|]o[5`Q3<MfWkTn2.gY/]4>qO@' );
define( 'LOGGED_IN_SALT',   'T9*;$;wzntLy0BKbKGFZmT%L<j?m4;?n&Y;l0C_[%@qQE<aQoxVSQA8TM,jCpa-s' );
define( 'NONCE_SALT',       'JCR>=bevN}Td7R7s:!4TU8GvPx7RXM{#i378 pe,J+3KpKdws73`d>6r01h2-{Xg' );

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
