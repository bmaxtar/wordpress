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
define( 'AUTH_KEY',         'f~&=mo<MI _Fn3>~[rx.`^use$zE99gE IZtrdU4odleURG40A/+2`a9;#gy#)4V' );
define( 'SECURE_AUTH_KEY',  '*xkVR.P.ogHt(KgEH$PNmJA6Wo3NOPs>zZXifV5]m6,QM9XA=[.zPtE8hZj`+!]d' );
define( 'LOGGED_IN_KEY',    'K, _%Dp?dD.&!>#-)8of^Rk4KD|%Ie=b^iO0hsqnR^Dr4,tj_TR=Q_{.qc$k~gZ1' );
define( 'NONCE_KEY',        'N-V&sM87]#l%i_NbM uLj7ygQ9RlnLWp8yEyjU}(`=@$0s?6bm@U)s.0uzBJd~hy' );
define( 'AUTH_SALT',        'mrEwIBwLCPoOo~GZ5L6xC-=F[nLin5K?4WG>tvV9;)}:Z~sd;@3j{R,}b%7*t-74' );
define( 'SECURE_AUTH_SALT', '2i_f8TNR|qpCBAWnvj,uX+QAJLa-YU;ssb0os}5! v#v>a.!e@z3Qe;RV?xx<P))' );
define( 'LOGGED_IN_SALT',   'jGeugV.i!}AW2E5SfE~w/zA4>gl7F`lXoq-};;q&3#p.T=Y)Ud:Y`Z^jCt3/97D:' );
define( 'NONCE_SALT',       '#D#A/D/!mp!>0AJ>MGi+;Sp92&eiMht?y(IhrDMjCJpcn7+&CQb ,~aj!-F=(Yq=' );

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
