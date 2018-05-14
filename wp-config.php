<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'velvetriot_com_1');

/** MySQL database username */
define('DB_USER', 'velvetriotcom1');

/** MySQL database password */
define('DB_PASSWORD', 'u?H?3UCF');

/** MySQL hostname */
define('DB_HOST', 'mysql.velvetriot.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'mBy;~r5Us(b5*Qd6ZFX9/wd(V6nWa~8nfFBPgWdJ%XmTd*(Ec#vu`2mLYe(IkIf/');
define('SECURE_AUTH_KEY',  'b"ODJd0gd8I@7Swk`lyFt2D&9R(F+KiW)Gahg5pHzQsZS9i`V1jVq#Vf(2VqIp8n');
define('LOGGED_IN_KEY',    '4~Ak+1~(Bsvfpfl5*$BEE~?XjLLRm`0KC/Ww|#aP(mngQYo159Ux|N:OYnlSEHGz');
define('NONCE_KEY',        'pMU;93?g!d7XO7XjNgEH`#u^YLKa&YKoJD#yWd`tB6oC9^&ih)uU|c5s3*7P_B7Z');
define('AUTH_SALT',        'us#iNJ18Mj)NA$RGIr&+@NYaUTd"NE1~eSGalV8?MM3JBBd(q@/pI*&A^|Re#tdA');
define('SECURE_AUTH_SALT', 'FO;pmNwb41vgCs%!fL((j!sX7huc@q@7NRkPwxJY!Eu55TOguXdhJJ63(sr!Aeg?');
define('LOGGED_IN_SALT',   'CYr^6^lqdn@9S?dsF*P|k9zi+1qlJI"i;/*acTayK8GA;oOcSP/MGGDj#"IcQSnM');
define('NONCE_SALT',       '2+AZ6YFWN|eRFgccvVMlQMv+rK&k9!ipCSo_oSTTE29U6*b^sRJSMfmn6:^HdWL0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_brfcx3';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

