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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'e-commerce' );

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
define( 'AUTH_KEY',         'EFQ` -p=;S9De6RE*VK-+U:R5kzIcZN|MUa*b~BI1/@v}b.?UIw2LW}XYC!OT@2%' );
define( 'SECURE_AUTH_KEY',  'qYF:Hh/GHaN#8h+k+tT)3]MR)tP@ o@Cq*C2xF)}H=YERUHWk[>rBb<|k@]sj%vd' );
define( 'LOGGED_IN_KEY',    'LtT4cO% ,Ui)dpytd3`reCpky.q>SZr;!+M~+pqPZ})}NX:o%@r5Tp]r1yIu0*8R' );
define( 'NONCE_KEY',        'I-de`/88(wq_^}Cc!9,*RLVS<?k0^s;@0m^?3=5~SDoP`9x60sd;s56A?+]0},xj' );
define( 'AUTH_SALT',        'WI_:&W#Ka`cDa$8]F;3hqdN@M{ei1e]&BsL7yA>ICb=-~83h9FF=v;pc<%L@=HTR' );
define( 'SECURE_AUTH_SALT', 'N~(M~f?p{~erb8z7:nlVdwGS5)/B7j(yu+7#sxTRoB2S8oiEg*z@$Jqcs$fZB595' );
define( 'LOGGED_IN_SALT',   'b`lai0nu?UL$!$=_Nk wzxn=fs6(2(aOxaj=mGx0*#HKb}.Xv*XEz+{-eS7:Bisw' );
define( 'NONCE_SALT',       'R$LLz1:lV>4g  OV$Uto8C&#v|1udNvz@lDq)Z)(+|H.d;vj3O3/=0 oB{EX;;P,' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
