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
define( 'DB_NAME', 'id12061567_braunybraun' );

/** MySQL database username */
define( 'DB_USER', 'id12061567_root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Password01' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'eg`<?$b?-E%Kq1Vvdkm[hy|#fnh>-<`TZ*-0!+fU-w^l I,r3!=cc4+Iku&P[?F(');
define('SECURE_AUTH_KEY',  '*_ 7U=G0+WSb|R5)c#j*_?,GHIgL$;4ZlTFz|NNIl:7jIN+w$WPuOi;==3IrzUCH');
define('LOGGED_IN_KEY',    'b=/<7AdV=Jb,j++7soGrm{hu}]]5;!!ktOxbYcaM`9B$F.lF:X{[H+/<@$d%^m`P');
define('NONCE_KEY',        'zZ@9:_}WdpYKW$|xqm`4.wyLH#ZpLL(VCVn{SP16!BXSxa.-@!1V>yjE{&ZE#&,a');
define('AUTH_SALT',        'ZWY=uF4rftK;v^`J,jBe,d]6dh/&t$F+S]PL<Vq,_F}&trTgRfej=y:Fq=/$tMv=');
define('SECURE_AUTH_SALT', '%+{ Vpri#7:;@s<TX9uh`?PD%$t4|QNXZNp|,>KQn#;<1+x.O#hUYVA&Xt^<9{5-');
define('LOGGED_IN_SALT',   'n+v7XrA9-GsTK]{|S[,9z kd6|P*2fp[=|o&kaOa1F{hqaBV:`vd_{|vB<-o!ar?');
define('NONCE_SALT',       'JxQu*ZE+78)cmn=7ifeKH-Im{~?}N~*&u-ZJJlm7Q[SA`=[-]MMgF<kKfe-L(KZ-');

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

define( 'WPCF7_VALIDATE_CONFIGURATION', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
