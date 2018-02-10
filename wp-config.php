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
define('DB_NAME', 'wpstart');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'isy~8DJrkgShfx;]9?6=:Zi~iCq+~Zl)DR-#=t(sQ]rs4kip;?l`~,J^f7W*.r4x');
define('SECURE_AUTH_KEY',  'q>L&}%.p9RM,%L&l-CF27-,sa<.9McX!!Kr|z`1g3=zt-Y{ ??=V0K-en/d1Sese');
define('LOGGED_IN_KEY',    'A8gAR.Yl]6a#pe=~}y~m+.N.acRW)H5g8S.)`[x?;-H$yR-u>s(193! 9lC_7d8O');
define('NONCE_KEY',        'dL~_![{20*gyLp+%Sg^r$Z^GtRf^wwa4YN88|fAe2.:vK;p;A|0d]Lug8[UDlshM');
define('AUTH_SALT',        'tiM&^=<$M3BlXnC=OG~kmk&xm);,Kf {&-6b}V{0}70b(kv`GsdJbfALM,-^u/aH');
define('SECURE_AUTH_SALT', 'ayyo)<2eLI5E+*cNpKv[lSk7_Yw;JX70U7Ib7W0AnIR&Jw,I~hch*]hCTuS <_S#');
define('LOGGED_IN_SALT',   '7Bg~],`{K|(g9yZ2# 51>sJ,QifXbh=RbYQ[oYV V)B&;b0u#p${p({ckG&Ep^fP');
define('NONCE_SALT',       'm85-P</B}YPV;h8 ~;Xq({/Jt}ST}]}8TQbMT)l[6a~A`ee#a)m|@aGI,4)C8k&Y');

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
