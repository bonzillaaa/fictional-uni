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
define('DB_NAME', 'fictional-university');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'dCH#O@S8|>rVqK?Tc]75gy3eakkQ,.oxe}K^F3?{p;?ISb{ywdbo:NXd|A9&:39t');
define('SECURE_AUTH_KEY',  'h37ea{nr6FjKl:nL4*%4QJLc/u054&u`@jyX&uAm[6nLGmM#J1W@;Vq)KYL`%_V5');
define('LOGGED_IN_KEY',    '|rA*Y)8Y5<OO}?<. C;zcEhjF?]jAkoo%&swm8^uk%8I2G-uD9W$N}a_^%UaM?fS');
define('NONCE_KEY',        'A&+g`cS[a-}5TJ->z1tj{]39;<CO*?LNX6eF@U9~%DVs;Ewzgi,>AIi(T1$6q2WS');
define('AUTH_SALT',        '(?^r~ns>a|p&jkI 99uUoj%XuMU<At]J[PPTXm2XAr1@.?+i?q8~>??>2$g!9ve$');
define('SECURE_AUTH_SALT', '`,FZ+J^`h>d-BV`rW;_p(-:$|kqj10cCF59awH6=v#liENvXRKyp]<lhj#G-1`>k');
define('LOGGED_IN_SALT',   'A$&4YYQ0{w?aYo! ??I{QMbG{f]6O9Mkrl_!7TQIjbXpW*b:3`*.X1sYhF{D__IE');
define('NONCE_SALT',       'NJ~Mzo2kOsiq9K!x4`,K#`!&QdRHEy5&3#v?:mUn@{F!nIt]nV-de;+*wlz?+zq.');

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
