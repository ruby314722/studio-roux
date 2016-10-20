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
define('DB_NAME', 'studio-roux');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'fou84cault');

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
define('AUTH_KEY',         'Wz+W2#<evbQ%cyZy~f5~)LC ~dh[6%mQybum?xtLJP6Ys>x.0)Q!0=K=3X%_kUyS');
define('SECURE_AUTH_KEY',  'wX5*K1Nz!6sn&R!aFVkC^olrXT(8V-oARPLs5t}iC~Le!jw5LfQva+jqfQ2{Rl!N');
define('LOGGED_IN_KEY',    'Ie.SJe&I4}dTkSPp7r<.?*JJ-U?~J@{E]@lDQr2&Ywp(I3QD0Cpbd!%fYNNf/;^X');
define('NONCE_KEY',        'O:Rkl*E]Q5nN>1YO(/t62/v5Is]ykMk]WqL/tN4)|vm@`D9{YQbXPyat0Vvkm9V#');
define('AUTH_SALT',        '$8!Z31g&6))I)LRZK:F`qFz@xqCR3zp=mtSBrvn~|i.3]O8t.rke-Q]?-y7J:f+S');
define('SECURE_AUTH_SALT', 'hh6p?rrl/.xT3a)G8JI,H;Ha0?<)~2[fm&d$jUFNoA9f6(8QAZkU? {vx-Ay*n[8');
define('LOGGED_IN_SALT',   '0yn0MqvS=Q^~DBN]lY]y%e_XL4NJeb}5jO)6^C>;a_/C+9~Z#HYyCGo[a*[~Av=9');
define('NONCE_SALT',       '`w>-C8JN<i7S]DLpX=p=({n4X?5AVmCp4E=%;i _-Z1dGK{0Z9#YewHsS&_^`m?8');

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
