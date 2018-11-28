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
define('DB_NAME', 'kosta');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '@osvin1');

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
define('AUTH_KEY',         '![|)wKfWH<=4zw}cfkexkDZ~1@3u-^&D.@=-SW}`nV8@4QHi%;8:*CTBvFyqGb&~');
define('SECURE_AUTH_KEY',  ';egP0c5}x>Waa,{f=`8gC@QRmImqRp:=@a0#^7HUcuwVT4y]3Lh>Oy3n&@s>^$|=');
define('LOGGED_IN_KEY',    's Q*W&co:=kzgu WF$oh7vnz)k3[}J~qcBZQN1?wM),79>d6cY/,-zK; zsitgCU');
define('NONCE_KEY',        'rI:lq=MvV|B-24qFDw-C:P_2N1fGHanWROQnI!+0L/lwM|Jv`pWo,Z2a0l&r?-Vj');
define('AUTH_SALT',        'aBFWkq7y_e{ij_}9`!aD1ggbywBK|512HXXV,*I6bZT{1znXY*k#S7Oh04?+#Wt;');
define('SECURE_AUTH_SALT', 'vDY/Vox6GR_0$k{AIvno~[ (9~d>t<0mO6o,+gmPp)kyf !aQKMnNyhji^_J|o:#');
define('LOGGED_IN_SALT',   '..b$X%{BNf(,2T2|YvVNb9fzJ]J&%$r|3+GqvU#8C?jTAz1 jCOpi{/n](rk98Oj');
define('NONCE_SALT',       'zg(@BWa$-|`[Qnsuo3S69IMCy#zKWO21D#Q8##p`Uh#ym,,qtm6TR95`?{4J(R!`');

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

define('FS_METHOD', 'direct');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
