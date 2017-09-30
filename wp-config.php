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
define('DB_NAME', 'hackathon');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Sabastian123');

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
define('AUTH_KEY',         '|zZ FBua6&?-$JYeLF4!e;Rm0Enq i1e3j5woO%7RE%yf2o[gVt=?b+tE;JqTd.Y');
define('SECURE_AUTH_KEY',  'Awc*x@n4,_z/mG*SzIDVLK$#BTJKM~Y !~Yi-704t;(Tt#; ~Mj7G,5P1b}UzC2m');
define('LOGGED_IN_KEY',    '];KG 3#IX9XjM9FlbDXt}}O20<Jzx#@Rdp[_!211vOCEhc<4;JWKHxI_YnHJL|8K');
define('NONCE_KEY',        '0wLx/azLy!^v)(()C>G:nUJV#W#@lX5@Imz[KpdcSohX=]G^QEI<$(0|RSN_HV-J');
define('AUTH_SALT',        'xDjAdu4/eQ[=DeX;]Lqy;mgTly0lq/Kau6Ej+T{i;)1%h;R%$Q$E`bJ.j$XgD=M1');
define('SECURE_AUTH_SALT', '3 .W:+s.:r7}g&$-U;mO;7B1Fe@#N^KV*q$59F{IR&X6y,+f8U0/rq+e&^;B.<3Y');
define('LOGGED_IN_SALT',   'nIN2W/G&Y/?LCCfYMP~NECsOIYo_I<Jheo:Ae{{Zo^cvTr)vY4x;;6OT=RQf~ v+');
define('NONCE_SALT',       'm`sGIbR]Y$#xmpn+>M2Z~(=b^n}m@zI0%PQCvsPz6D#yg2c{2E+^Op(OP_B!R=mU');

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
