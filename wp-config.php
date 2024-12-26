<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Akshay#123' );

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
define( 'AUTH_KEY',         'J<v1XwhIJ$@E<r];{3pNu0Y+bFe kf>pgiUzb`c|TA|4CbUzcs2@z`e=%x)H^pRt' );
define( 'SECURE_AUTH_KEY',  '5s&F#?T~&~AmkHpo(]%6mFp7dy;Lh`3IM^u[F,PB%]rfm6q(+$_>GdQH=LwC`,*@' );
define( 'LOGGED_IN_KEY',    '_V>hO(,e%lOIO&wlShH:5F@DPjr%D`*-`+`)O|O)KG:c_Moyc^UaXJ@5rPLhm:Pv' );
define( 'NONCE_KEY',        '8$t,uezCys-b=PO=&X52Fb{I=X$Mb(>|8mL&E.#Fh6(<q`>j9M,y%0G^[>Q3;FP:' );
define( 'AUTH_SALT',        'Pq%b^z3L~{;&jvIKgy;g1^wu{sF#{&_*cUlk&r!0Brj}wRJy4 MxK~(|W0T!Uq~V' );
define( 'SECURE_AUTH_SALT', ' obz}76`8;OX?w`fx=k1 bNKtqZzjM&${`@yn@Q&$~I%_cxBY#jp3K4p=aW.rX|3' );
define( 'LOGGED_IN_SALT',   'VCy~HARu@Tt]z0%Bih2Bw;7jS:|L`=ZDT+(cSNge1fAIuhsv$NmU;53mf6TpTPE;' );
define( 'NONCE_SALT',       'VwJ`7bUro5`LN*qD1Z#U/m}Snh<FNak@Z3!/s75e^IMc~a7J0W$MFYs`.//2lbFk' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
