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
define('AUTH_KEY',         '6.rf2LRYf{Gn@#fMhJ`vG!#,Ip)L|Wk**QN_0j>{#`Pv|hehlQ[AK}dAZGkjhwiA');
define('SECURE_AUTH_KEY',  'kO%!F;1( qsi+X3iv=T|MCYox(&T5lJ;)J2~rO/ q7ObWuT<4*V~kaNu/fd7*{6O');
define('LOGGED_IN_KEY',    'S9y>CmRhZ6S2l-tnhtP(m!yjw8^LKT]G(&Zy!wT.JN3n3b@&jXKxeHelc}gygfu%');
define('NONCE_KEY',        ';1]8lwD6j&U!W%kBh1l@3T;Ztm}DsP5$NE9)KsY3$tNZZjV`$q%o;|{5|VZQZd>_');
define('AUTH_SALT',        '7*p%T)v/=]FCP6bfoZO1kgZLu8*I(/^&C=.By;6A/:xC()-&`%z.Rns6KGQWBFb?');
define('SECURE_AUTH_SALT', 'O t!Au+K`Z?$&!d@,`j(|m@}ZUeEy{*5; t+g(F(C?~dW5~EF*KDxXq-D2U]<fJA');
define('LOGGED_IN_SALT',   'hS}wE|Wl*w`#k$*>+HCdnC85u6azh >mi1}&g%=gXKi<dRWIl=$mEP)n}`BMzpU9');
define('NONCE_SALT',       '!mc`_c2)Rgio*g~DT`}0y7j0.n]aNb5[qbjNe}]c/,mI-3yXAjBPu  1EoyD[-/Z');

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
