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
define( 'DB_NAME', 'cit' );

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
define( 'AUTH_KEY',         'Qm,jCoK~p2^{bKI,/SwH<BQjVT)i<EP[FIL<S!J_CN2o0Mm-vK>NB01 9I(dniQu' );
define( 'SECURE_AUTH_KEY',  'S& !#}mlXcND[;XdZEr9>EHnxQ_]?9r,buFxOS1_xvG0Phf:%)IF9Azf[FEg~gYH' );
define( 'LOGGED_IN_KEY',    ' %UE DN-DPlSi3}$wetV5z,Fg<z%Yo|.VW3CQ,uh0VO/>p?#gtE1Q]C^4iFlVg,)' );
define( 'NONCE_KEY',        ']o6#20$ApA!?^h=X>/Qd7{g#[ATZ%!3&+RQ1tU;{s&C@)zNBt0l0_&[B 2sd@5]l' );
define( 'AUTH_SALT',        'T`i8H7Q)Czam4alFUtk]CJ;Ku)*!iB%R$)D{]bQ&!i6I]2XtK}+MB8ALgi&~]dOr' );
define( 'SECURE_AUTH_SALT', '5<{w-l9!=Gv)^g0D$wr,5%c^XRx:Q1>iq.H6&.dIqxAat?%gvR8of:s7,3]l#rt7' );
define( 'LOGGED_IN_SALT',   'T R~#EzGb|wispmgMWr[3O!%!mytVVli ZA~[wnEL4uJWj.7I9M@?s>@VHmQU!f(' );
define( 'NONCE_SALT',       'ilan,mX_!lKCd8|=KQfK]2ql,ghCuW/+b$06kMNSiph<y0P67UOB+Cb$r?]@U`xl' );

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
