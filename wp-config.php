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
define('DB_NAME', 'mindset');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY', '6S<!u338gHj+S&iIP$pjCu,-RVhVClL:&g:-]u|60O/jQO<b&$EU{5s7tp&a@q.N');
define('SECURE_AUTH_KEY', '2XR!j-mCP+;Y+8E@1MWbo2rpPI j*@k$tE`+_>Q5M=&x]h)Bfl]1<?R03728)qw&');
define('LOGGED_IN_KEY', 'Me{EiJ~@oIVoCI!u3|e9ad~0+beBMM}<%?_t^:#,UQPsu9Bp(1oCXQdV9kx[n|w`');
define('NONCE_KEY', '^n0}nwqj|an!O{j;DFQJbPD2=d2/HRWLKJddh3-Do1qy+#Mu)%w^Ms=y8u4Y_,=X');
define('AUTH_SALT', 'uqlYDvnFW5E=q6LK)3<,|4AV4<hB0T0G9>/+#%5ij[/+}(OgnV8dPf duW? (pB.');
define('SECURE_AUTH_SALT', 'ku-98xy=B?t6CN%;8swB4h!bf!:YWDBL%xno{|k3~1)J~}G(|35TF7E[`W^*;q6k');
define('LOGGED_IN_SALT', '*`WDp7HYM/J~M}JNv+BHO7e HrBr.6(sX-`6P6)uVpn-[<W9TClu|WQxhOgOb<OQ');
define('NONCE_SALT', 'bfX$#5EyS3>g3~e]R{%N#G<8E(uAuj.C:U#bN<PPT(rLdT&_GC+C[*U86_-f.%i7');
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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
