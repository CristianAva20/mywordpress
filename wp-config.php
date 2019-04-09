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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'cristian');

/** MySQL database password */
define('DB_PASSWORD', 'AVALOS350');

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
define('AUTH_KEY',         'V_KM>0rVtT}0M`Pn[o5dZMN~|vi%k$h}q8)D&{LV<`:MiE,~R*lygXFZUs7~_].l');
define('SECURE_AUTH_KEY',  '/+$|e,C*=-=<@?T{4H_XsdLL#0h0^(rty.NC/$eTBYQ66Vm.$CXB0)/D.giMQT i');
define('LOGGED_IN_KEY',    '1ya`_)|L3xHP36{|]:F+68Dq3?4<k&5yfY:7KJ$[GgU&u60Q(FY1<e5!_oB5kvPr');
define('NONCE_KEY',        '[pg?=@5)Ve.)^@X]e`]-WcH6kqKH#grzHdz`ssE_G0!Gi3>L&ig5Z3f|cHbC?]Q!');
define('AUTH_SALT',        'xg,$y&XlL]/$++V&PkL/3J~yZWTZbUEQE{r=2^gC(uo9wz:Sy#oesLy{pLh2HFXd');
define('SECURE_AUTH_SALT', '%8R)%+6M[(pf(>3}5YkmqK_IRLL7j2v*Vf]X*^Wm`BelL2SG7ak!i-!Dwgsd.N h');
define('LOGGED_IN_SALT',   'e-U~_hnrBrQfvi}%eHDFb%Ih*sHD*qsd<m/Kji]x^fM<R1#VTa]tD)}#t]Hbs4@N');
define('NONCE_SALT',       'G;EH32PE4FwM/_d5KjqU8!G a}=+Ury6g_5*^>[7yaULC cTILHIf_MlG%5bLpyI');

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
