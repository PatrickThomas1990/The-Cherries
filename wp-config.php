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
define('DB_NAME', 'The Cherries');

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
define('AUTH_KEY',         '!QRVj;9Nf[)~~84,:E.Y.^JmbcV<{&3GvYjWA-C*@_hv<wpP!~kgZF:V0=y8wrQ~');
define('SECURE_AUTH_KEY',  '8q2F;=jqG,kL>og$/},2!{{55cZc<Vh|9.`tKw >-;^tAh}ZWmDI;zJ(l5L[=lL|');
define('LOGGED_IN_KEY',    '=3e:F(@YskJSS+Ay(TilbUJ~o$MeW/<2gG`MP9rHtI wc.dRaJ:e~|-bUGNTC;,0');
define('NONCE_KEY',        'f.2tN|jYA$SWXL9e$k,ed^mc0u`DNX77hno>0%!e}4$nWAtf={/Yllos&Vo2y3sM');
define('AUTH_SALT',        '95wDniq/OAT/M<J92FmJ*wtH=(_%OR+4%0[i[ tE88kg=<MaRPQRk7<GT)iQ64n^');
define('SECURE_AUTH_SALT', 'W|d!ij7{ e.Z({QWf73 P[8M&Z:mYxrzx*.ps%6~Z=1aR?<*m hrE6CWxSMm~%(X');
define('LOGGED_IN_SALT',   'H&{<GdS3MJ^hzf8i.Zt{hs!/]UbDhfh+d$(JuVP1E8;r!8.cFv@3JW1 lGn/P0d$');
define('NONCE_SALT',       'tJiMj-9HVFHb-!AF!NR=:O&MT;_Kv{y<JQnaUy2JAKI[_7(J]bB](Y0uKdfjqh-i');

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
