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
define('DB_NAME', 'ahsparkc_wp2');

/** MySQL database username */
define('DB_USER', 'ahsparkc_wp2');

/** MySQL database password */
define('DB_PASSWORD', 'TJ_M_CMBcy2_');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '4j01qk7rursq4pc3gzxpoj8oh2jx2azmzpogclepsm8beegoofwgfylsrhl34zb5');
define('SECURE_AUTH_KEY',  'fhvtobmjqnxirbojwhqpv3q9qjomw2y86uknxi7z5i8bzbhfmoke0jtend6cbx2j');
define('LOGGED_IN_KEY',    'hyjai30lobin0qtpujtn89gmk9sleniswwvlmw0scd0jnog6dopw91rs9tsehbe3');
define('NONCE_KEY',        'y8gpxvjyxekibemx7wxnhxzzme7l3cwuzyggiu26n8tbmurrrq6dgkdgyjlc3gwg');
define('AUTH_SALT',        '7sgaeylqzoyr09szxsmixshgvzjggtsxajgmf5lmq1n6nyakskehvj7iiwydhi2m');
define('SECURE_AUTH_SALT', 'rlffstqk12mddjrtva6alcwqwppuh5lnu01zqezazhwzkmgixxrxcmljadapqzlh');
define('LOGGED_IN_SALT',   'gutiwu4t5aa3uoawcymaxcpr6ykikhnnacykjwxkuk2b4fchskcippg6azxifuvj');
define('NONCE_SALT',       'e44zybf78huwfryopshrxicxzdxzodaaezv5l4spyowhzzuxk7pdbuelpko97y96');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '7l9_';

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

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );
