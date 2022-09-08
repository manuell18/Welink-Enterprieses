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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'welink_trading' );

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
define( 'AUTH_KEY',         '-v4}+fI@SV_Lj.N-4I@px!-ZjXb;`g3-]*y{4^E.qm<F7<}pd3:C*VtsLyt.MF.[' );
define( 'SECURE_AUTH_KEY',  '}.AUrilvN{)?29?$f%=jH2s8N}XAN):`+9Eo?lJMf%9B lSw7:<PJ>;o]qoG&LH;' );
define( 'LOGGED_IN_KEY',    'Yq02|o#;uGfh_UflM<wrF0><Vy.S4V1O!2._o bUKl>&(kTJx1B8cCrN`v)iZ05k' );
define( 'NONCE_KEY',        'qv`r[*,LV(fttKE4<ruyfo$E[TC=>&jP^0S1D5=`1O7!-^hP)fC}eU:T)]%Lg-lu' );
define( 'AUTH_SALT',        'M}%;Re}}0U%#+hX1}2=5z|3k}HpstNC%>3mXeb>[#AAMb`_]w=fmm~87;$;l5Jsv' );
define( 'SECURE_AUTH_SALT', '2dtr3[L6:EF0 /pP7CCi!S_nF]bMNB=IZ&3]M7bM;xfB`/S;/7+I|M-<fDxt-%o9' );
define( 'LOGGED_IN_SALT',   'bG9Hjph`)t>z*?%Xl>@hTCZS5=hIZUL2$6jNd&y~[ZeA:<8>Kex_P~~kX7JVQ2)i' );
define( 'NONCE_SALT',       '}$$% ylUnhevD=pjJlogi#}*.KWhaeX2jz=<m 15xA2/W00^sCAat6v9{r;(=*8q' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
