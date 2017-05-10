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
define('DB_NAME', 'xfiles');

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
define('AUTH_KEY',         'o%%a,oZ<SjlQL`,1FV&kZsQ3jrKX6cW>{2:sGRd+nzmeWS*QZ%]Qi(y>`sF~MiY@');
define('SECURE_AUTH_KEY',  '2878dHZ}=;Z|a6 wd)8GowRws^]TZ$Mp3EpB[X_,d<!4|a=P4mBwo=kq}!a315JY');
define('LOGGED_IN_KEY',    '{FEZ8@5!fG,lXHBh`9j,< 6s,ETL*LY4-7FXQ OCRl5`UzmicFX~%P.Hg%~^BT%^');
define('NONCE_KEY',        'Y;1DiBw5p+JA%Doj.3J4KCwvz:tFrof*S HTutOAq(>Y2Rc?%B[$w7$m% }ShS*g');
define('AUTH_SALT',        'ix$IH$!00p]q$bq**;4agC{*Gfw${l1L4|s8$%sW}U3^hJ<aL<gzwfh2uT%6WM>E');
define('SECURE_AUTH_SALT', 'XFj)G*hlMm^i@D/@l1:j&YZ64JoLG3i~5HsZKY~]?=tAKd<1lQgm7>,+#hC:FGR]');
define('LOGGED_IN_SALT',   'nqJSy=Kgk:vbBHoGar~.4zsyo,U_hFElA84-<UlAYsgH[,Cnx 0yn=a3_y{_07}N');
define('NONCE_SALT',       'NqQo[7OHd)xHKz[Q2HUiE0_JD3]o^J^_A9 N`)/?BWRAr]AS(d=4E,!OM>Ah|)yz');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xvm_';

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
