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
define('DB_NAME', 'ss_multiwp');

/** MySQL database username */
define('DB_USER', 'ss');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'AZ&aO9lC1)o2jOnXSC0e|#k|9+w}l8,HdB[NXFLQ/-|Gl4b{7(mT-|K~lfL-:kCh');
define('SECURE_AUTH_KEY',  '+E:R{2Fav%v+F|Lb}=GXr-*}B/e(++KqlGa@+;&l!-+#+?a6(i/{1(,-&8Yeq}VJ');
define('LOGGED_IN_KEY',    'D54P.~lD`fZmv?+X+il1Ai6>!*.]_e8-hXC3Py[#jk~gB57@3A>4`Z)EME@X?Q|?');
define('NONCE_KEY',        '7JEm7UDf(K=Z(hTQ}p_~H&D,~uUH!vI9%0u:hC$2pgVYN4BC0,EDr mD?+xrP@Y5');
define('AUTH_SALT',        'qIED$P~q/+USiCe{_+>Fyin+;z+)^|2_6{D&HExOz y$7o`$[<H_L8r`6lS%ET0/');
define('SECURE_AUTH_SALT', '^^~Kt)qLItf7n} ?anE!VA|CF|p?2Wu.IPR>,r%26iYg2`6blxsVuk!A^fX72ym>');
define('LOGGED_IN_SALT',   '/_)->RBM+r;HEfzv$W:&rU8W(p?Hfa9k@Q!<rgr$O,#Tr#M.^tn4f|LDCr{F+!/{');
define('NONCE_SALT',       '-(5,K8Xg3d/JaWe?AE@eSf5|sOW%!9_-6q_m,Pno^A}:p!x3z,gFV)cS-Ro/$[y>');

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
define('WP_DEBUG', true);

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'multiwp.tr');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
