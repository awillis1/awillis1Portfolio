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
define('DB_NAME', 'awillis1Portfolio');

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
define('AUTH_KEY',         '%6?MoY6zwof:_7`&v=IQ0~=89`<4qZDP!|!xVb&jRJS)5#1AV$;)%.o*4mKe_Zl!');
define('SECURE_AUTH_KEY',  '[{rbQ;bu5koms/Ec&Eyd#poDzH]2>7t]>Wsr95l:Ui+T!%h598<^3qfV#Hj1d7SB');
define('LOGGED_IN_KEY',    'SFl-T9V1WbU:OHP=U_}Rit,>a;v<Zx1IX,Ll%^)cD=Y/-~a89+2v1JUqafxF?)go');
define('NONCE_KEY',        'Vg24lk=!:8%mQ=1 E2@{C8&jPBddL.>Ml*:ZW!;<dXz2C9QhB!Vqa7VJYVy#P}[3');
define('AUTH_SALT',        'ZA3S12UiI/h4Pm6)OwO#*Rt%T-Wt(wQm=/f>h+F_nitjL IV?%X*Z{A?)z$$(yW$');
define('SECURE_AUTH_SALT', '3Uf}|^$uN(weY$er<82HV>6ZM >MPx~.V1U|9F1%u8R{,(UsF %8O L|M_wWIe%L');
define('LOGGED_IN_SALT',   'Sz~(oO(E?1;HT_UT^vG0(2g^&.P`(u0C2`mCrIoXE%_i!O_[.c:M|ky1zP;`1TF%');
define('NONCE_SALT',       '{ :_LR0u4n0&5H6vs,y<X}M9@%,}%t=ZxDSjv{br7wMBTRI!;B5ce|x+}z)^_{Oq');

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

// Enable WP_DEBUG mode
define('WP_DEBUG', true);

// Enable Debug logging to the /wp-content/debug.log file
define('WP_DEBUG_LOG', true);

// Enable display of errors and warnings
define('WP_DEBUG_DISPLAY', true);
@ini_set('display_errors',0);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
