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
define('DB_NAME', 'ibmx_6b281bba087c9ee');

/** MySQL database username */
define('DB_USER', 'bb7b520bc1368c');

/** MySQL database password */
define('DB_PASSWORD', 'af6be7fc');

/** MySQL hostname */
define('DB_HOST', 'eu-cdbr-sl-lhr-01.cleardb.net');

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
define('AUTH_KEY',         'G}gH>dkSMWRo,%2Bd03j3|ey,mWO o_c3}yCgvv_va$y@F@P4!?mC``LrDgPzI}F');
define('SECURE_AUTH_KEY',  '}}]zwv<cddAeU>F)!snQs4D0DlvvZ&0X<Gi:dRlr5i9~dBowNzmTD@Q-F-`h(9X4');
define('LOGGED_IN_KEY',    'K<w9Gc*JX})WF?K`zEO%EdCbN?6mrV)8@8q$](R/IPSS Y=0V^WopR69C0iZuaki');
define('NONCE_KEY',        'tg_Cy#ls]u[uU@#o+/af^SawpmZ|2dsAJ<7x[S{ :9:vUu#Sb{{[0YVf0Gd=/+*Q');
define('AUTH_SALT',        ')1|yYoU~zqt]jHb<FC@jvBct}I?KQ$d$+6>$K>8Zz;:!0(.ntwNOjGd+t>j}|F z');
define('SECURE_AUTH_SALT', 'E?vS6I$Zu~pz&QR?G3+b.iF-gMY(|5a O):8F.rnS5lV>yiKr2]ECsk$ MR.V`R{');
define('LOGGED_IN_SALT',   '3(N$sHgr&?ocI7*BcJTD5?nm26/7yMDBnAs6!N#nStLi}nII84Pco@y+1ZMo6=W-');
define('NONCE_SALT',       'gNFf@Y8A#Y/5Jp[[-o~eePB${_ET(2KL^?sm#xZR{@K<zedH[j c|,EOG2#_7U},');

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
