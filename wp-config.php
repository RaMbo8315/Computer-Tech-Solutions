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
define('DB_NAME', 'test-1');

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
define('AUTH_KEY',         'Dw(-u/_wTd]i~;#p#|UG<@d hPr3ePTfqm.*j8cp#ib^572#5C?}-/):Da-{=C-/');
define('SECURE_AUTH_KEY',  'E<BL1n+7((suiugfU9=!wsqFT81U %I<vGniCw?bX97 IT@<!KW#}=H?p[Z}jyjb');
define('LOGGED_IN_KEY',    '*S$!x~,9C8]+Phy^`jq=|C@L=sQ!zu?9Hifw_8{6LX}Ts={-6)7@N.5(1LByn/r@');
define('NONCE_KEY',        'KJ0=pO`WA#{v#un%.uii|#~tNn^J.?tNf;fr>VgJhU0UB^GSw9kKfI|l-y[cB60~');
define('AUTH_SALT',        'K=MCWl>)7o_AiJUYtKqp)hMHVzMJF(6;B9@Dg.5_-4HGF.}wwt@m4a(bP:}Gt!=y');
define('SECURE_AUTH_SALT', 'b;[#%KS(I2dk<-gLn97vrVUW`{wDmV;*QsU%1Z&C71wFHPL87D#,h% qiek38Su%');
define('LOGGED_IN_SALT',   'hmif^O*ZGCP/rb=W}N(SQfrLr.4`Yvcs+;`MoAw@H!)2XT6AS/@A$5@cAD{@Z`p{');
define('NONCE_SALT',       ';1; 2_zW+^jmCDr,8ybf`WabW(c=5A#@52xTr(w#7gD:(d0Y.=4SD{v/j~}M18Mt');

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
