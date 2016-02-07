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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'sVZJ?UF)UzzJ[hzp={$5E5@Lx+TDRc#zB}[>V9RLH%=tRvL8{Y}lNG.@NPlq ZGY');
define('SECURE_AUTH_KEY',  '|+K+-;%{A| :q;-xlOQx>:JWzcq2BcOg#TvQ}Kg GfN[ P0vD;<xAjL8`Q~&gG7^');
define('LOGGED_IN_KEY',    '<gDDjcJTI-=AiX0?IPnM8&F W[d|L:b>em[.4uy(V~=6 TxYe;Ej(n(p^ZT,+bM$');
define('NONCE_KEY',        '!8wQy#6#[}&l|6h1|#gU|BmSUJ8mNVI*_~;Jmt0S<4VWY(pB9rTfelT;k5 Bjn.y');
define('AUTH_SALT',        '3YCTLF}n]d}M-$#/U){&:--@DXnE-6qOdniBQ[JaEv4a ,_|0y!P{_+{d!6X<g&-');
define('SECURE_AUTH_SALT', 'KQn?{lc^:|/Iszwwv>Ke|73E@=:gN$n.R9wDi=,2*~-.@-OOde%-f|!x)l|-+*sS');
define('LOGGED_IN_SALT',   '0?i:R/Z$5F.7QSp0o236+1<~Jftj>_d_m-dp |J#J(>+XG+CL3aKFd#mlbkO6K57');
define('NONCE_SALT',       'uP_PF*sU*=.Sg.&>HKSp1W~jz> @I{>=wHPPBT79M`^!gGbYj(v:-ch/tnbLb8i;');

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
