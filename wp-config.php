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
define('DB_NAME', 'wprogfed');

/** MySQL database username */
define('DB_USER', 'wprogfed');

/** MySQL database password */
define('DB_PASSWORD', ';DV99yc.9$E;t98M)');

/** MySQL hostname */
define('DB_HOST', 'rogfed.ninja');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Define the site Home and URL */
if(strpos($_SERVER[HTTP_POST], '.dev') != -1){
    define('WP_HOME', $_SERVER[HTTP_POST]);
    define('WP_SITEURL', WP_HOME);
}
//define('WP_HOME','http://example.com');
//define('WP_SITEURL','http://example.com');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'TpcHf~qR=Smke8TG><XvbMoe1]/-o<[:jRPFG5R*<v+I)aH4|eoM0jD64:YBS:}]');
define('SECURE_AUTH_KEY',  ']cWg95G,O28{?`WwfCmaRS1S}R3pm1<Ffh54 [)[R>3*@.Dx)OSh`n{(WP34<O|f');
define('LOGGED_IN_KEY',    'uyEb?e&{.KG7Y+brwY[}.T)&; &yJTt|TkI-%qz</E;+1DMhNd&%I~t-0q?Xt9[@');
define('NONCE_KEY',        'ZKYQha)Zh#u&?`>z;,8c+h?o:x;P 9=[OIXvy>7U!&?BO#%x.uwNtF3@TI*/`a^U');
define('AUTH_SALT',        'IfRGP1AM{up&AG&a)aflK%6ckt5%P?i4aN-+[d+YS +osD]Ce/WP]tj5.P=rpbW-');
define('SECURE_AUTH_SALT', '6#;hQ;${kBmz>iQ]|^PO^{eSTx4j%cKCXO#6zn;(^wn?v@YfN0@l&Qs/PPh$D;NC');
define('LOGGED_IN_SALT',   'i<%J-#U{}wvdLjt*D5#(0M$E5NPTBF^!/{D!R{}%NCH|qf<m|(PWHuV_%0[go`YE');
define('NONCE_SALT',       '}*[K{C*<jEZ&<ztC4Ux[~z+&c|8REx$do F5=phRD{J[-qdjMKd8:,#CIC>0$W+[');

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
