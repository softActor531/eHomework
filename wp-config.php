<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'learnonc_eh');

/** MySQL database username */
define('DB_USER', 'learnonc_ehuser');

/** MySQL database password */
define('DB_PASSWORD', 'bfwn74Q-Pp+v');

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
define('AUTH_KEY',         'jv4xd3ieoewggbyqyczrhxa3ee9m3lq74t5htoqbhdtwh5ci9lygpi6wnlic9362');
define('SECURE_AUTH_KEY',  'ut61e8m5wdkfs9rhvbhzh4n6od4pgtajncvtkm3fqzeips4gs8n7ho0mqlazqo2e');
define('LOGGED_IN_KEY',    'v9q5vjl10v5dtowfldg5px7pn6e8pgjmnxvrded3q1wn4oxwkzg4hjhf9oyikfvi');
define('NONCE_KEY',        'dsig9l1djbwvrvayrgjfv1abfkwg6cophrhghdbwfejp3bxeohr6nfjo8xpxlojb');
define('AUTH_SALT',        'rmujskxpjyraixuuutlfvjkde2xe1od0m2jdr5ogcanjksuknzstejrrbg9fpewk');
define('SECURE_AUTH_SALT', '5xkq48pti7a9r1ownfsynaa8trlx2dbnlkrgsbgdjophjxcgxv2rbkrlz64g3evr');
define('LOGGED_IN_SALT',   'gzvg8ac1fi6ypkmvocblb2jfrcyjwkyyosuohblr2twh5klhswaatlggob7d1vpd');
define('NONCE_SALT',       'ef6kkniil5fuylzswsjlegahf3eta1koqeoehaemubgyqyqddqxourmaocmvyqdh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'eh_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

define( 'AUTOSAVE_INTERVAL', 300 );
define( 'WP_POST_REVISIONS', 5 );
define( 'EMPTY_TRASH_DAYS', 7 );
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
