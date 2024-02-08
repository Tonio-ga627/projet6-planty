<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'rU&PM,d2J9tJ`yQ5oRh*O_qb<L>}4`n.O?1v8RL}UHK^:>+,dlWn!pIRD0>WvgA@' );
define( 'SECURE_AUTH_KEY',   '[TCe.9evh,<Og#;=GEj,<z!<-G|L*;}|(0w}({?SF)=$Trg_Kccdml}S_2iPhp3!' );
define( 'LOGGED_IN_KEY',     'qynb|L]<fBN5oeDk)(y[?0@W)o43D5nYLA!2o8GZszfo2w*SY)w2K(sKIE;_.Osf' );
define( 'NONCE_KEY',         'spyu&38AY;=1ovp5J;|V}nzd[gx^8:POWNTsz:CS/nZvb864I%e}o8Hw!{Am1MDV' );
define( 'AUTH_SALT',         'L23OX~^jV#dgcJ{C[>hr%^T,v*lurlz&;Us:5-}=d`X(0GQgLFvH<n&2qM6p?x)J' );
define( 'SECURE_AUTH_SALT',  'va+ciR%dR#HJ62! 0)8dWvc$=4RWF/pfQWS:Rog(S!B3tI(/Y$`8) *}T5BAQ4=R' );
define( 'LOGGED_IN_SALT',    '`9D(G@RVM[K}N^E}{]!eF{#0c[c.&6<k/~qk3yP#>`!Pbep}aD<S~l)r]j2m8o3=' );
define( 'NONCE_SALT',        's3DAo2lhE_l5,k[qak8@Ukkbs?!mrbt4SZmxc$p71?$J2j,BD}DvhV~`iXw{m;c9' );
define( 'WP_CACHE_KEY_SALT', 'ANPwau/.xIy^=bS~>>?p&Ui}+-Pu=I@5:C]wYkIGRkR|!dhX->-XcF&jqn2WQ{@y' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
