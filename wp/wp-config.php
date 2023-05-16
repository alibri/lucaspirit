<?php
define( 'WP_CACHE', true );
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

define('FS_METHOD', 'direct');

$file = __DIR__ . DIRECTORY_SEPARATOR . 'wp-config.local.php';
if (file_exists($file))
{
	require_once($file);
}
else
{
	define('DB_NAME', 'lucaspirit');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'Fht578##@Wert0');
	define('DB_HOST', 'localhost');	
}

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
define( 'AUTH_KEY',         'a1k^!<zD/_<4_&oDeAtX?,hWXkt=q0>f9-*.d&:8~y#eifPr+7;@_SD:(EE>8n]{' );
define( 'SECURE_AUTH_KEY',  'v6d8a^9vUq2`}iGr7W5X*P/EulQ=;r=B%Uvt* }lB+_M;48)I5=?dF]<GM({Yjhk' );
define( 'LOGGED_IN_KEY',    'reM:3;?75N8fbJj9^m`0tupcbswsTbhNDba1e:bxql(y,K}`;m|KvZ6dA4{(_bQ)' );
define( 'NONCE_KEY',        ' _dh~^=JSu{lMlYB|:{0NcRSSCQ.forR;AFT:FOd<PL jo:>F^$1G;HV0y}!yMTC' );
define( 'AUTH_SALT',        'mI)fVUhz7G$ k5vLWhSY^F;Ie.B=|{n&I-~D@77o=pH*A8 0Z-vQGI.Yog[{`#T=' );
define( 'SECURE_AUTH_SALT', '%/BCT._{@6/}(Ez$W4u(,e$K{GgMCnGfF Y^S=Liaet_%;I]ZC[.#B}>lm.w~Pt2' );
define( 'LOGGED_IN_SALT',   ',g`2@[7R]s_gPL2HL8/)R?1C!omH_Qb&/`|y@EXK42Po#vaR^@i,d0-3F;7zV4s~' );
define( 'NONCE_SALT',       'rXV)O:5duOXTtsbXEdH;49E34ugMVp?oc-Bo;V#!l{k{R`(DU,}o Yc=%37TYF]!' );

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
