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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/www/cli13754/htdocs/viajarFotografiando/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'wpffblog');

/** MySQL database username */
define('DB_USER', 'facublog');

/** MySQL database password */
define('DB_PASSWORD', 'facu1990');

/** MySQL hostname */
define('DB_HOST', '192.168.0.58');

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
define('AUTH_KEY',         'a~O`eC[AMPP@fjK B0Z&l& B*e|5l!x~YHj_u[+r7Us)/qu!4V.PCvK%$$+wy_Cz');
define('SECURE_AUTH_KEY',  'n~aOng,x7*s+ULe(5QIgSJN^3QW0vnib(ua|6^f#etp:R^x{+II,S_iK+ym[`5O{');
define('LOGGED_IN_KEY',    '+^#$HR+I9*qAz<`6arNDe,dY ~v;6F.mXqg9K~j9!a)P)1(OE|+p{&wy&`:>Px+1');
define('NONCE_KEY',        'IZ[^|vvt_]o/+<pT1+q2SUNR,LbUy[^)~S-7Xe,{&-b2B|j>a~y2V+67=X+e?dw_');
define('AUTH_SALT',        '=es(cKxu~-5?r5BCr[nRen_8elazAk>*5)<w=h3jo.]=_ ~fT%b;Es<BVTd$y:Q$');
define('SECURE_AUTH_SALT', 'wN6Tm@+C(R7dyxc*%5%-UpsznecnQ2twIs:_jt^`QH}:/tGFh8r+5BPt?=Xtxf~0');
define('LOGGED_IN_SALT',   'w3(x|:*,^ysPle*m|+nO$epGd$0xQb;E,P%iz+TKp7$[&]+_8JE-.dlr5b=05,++');
define('NONCE_SALT',       'n+w@Q=S}xIUX[GlBX><Jl~HFm_p6X]-pd4Flp=4t4-qt?57-FpQo8Dt|D+NN)o0*');

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
