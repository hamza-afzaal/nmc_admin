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
define('DB_NAME', 'neuro_medical_center');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ro.eq3kuPd~rTf7Xj{44#kR|ce,2 v;&1Jv7/+wB[f<9$nh}e?!F4uu}Lo*t{x(N');
define('SECURE_AUTH_KEY',  'r2o]W?Z|-o3qm{O>mIjF^?*;lplie5GI!zr/vHIa:FK.e[..DanakIq}?3*S[c%-');
define('LOGGED_IN_KEY',    '>h)fM!smg0@4iI *a^`wjJ|DR#%Q@m+wT(o{%>c.uQ_u3K5l]36+u~3YBX&hp*#<');
define('NONCE_KEY',        '{e3$oB<N2=v>DdVg8yc_l.)5>[X/Da]YcvT!buZF/O(kx3ZnekeJ6x4Ikm,OlO>!');
define('AUTH_SALT',        '-2GC16D:^+4rcttmUU<r@EfB.gkBMg?yy&hA=B911ZlZ0Iez%q=s#4E|d(9bc(yF');
define('SECURE_AUTH_SALT', 'rDk}$<H;$l)/{@cOk8:iZ@++HFaU>D,}AV!^_J-qHHDHY1svs0sIX&TCQ}/>HR?M');
define('LOGGED_IN_SALT',   '#0)V5z4q.P?Rq^oc!Rsxko:?#6{eU1E88h,f*6WD2:zMDzXz3uH<:!UGNpqmA/X9');
define('NONCE_SALT',       'onMUDk^)y5(z2no4<PNOk/KGn7N.o9lsq0S_C#f2-{Ndw{U)[:d#Za2.J]P%N>nk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
