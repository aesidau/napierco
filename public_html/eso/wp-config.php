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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'essendon_wp' );

/** MySQL database username */
define( 'DB_USER', 'essendon_wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', '2cVVBEjN8I$1' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
/*define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );*/
define('AUTH_KEY',         '-i#N:o+v5WqzJhMn=U3]~m8VWiDZ/a0&Oi--EMiS;N1ISo <;8h=EodB`=h/cC$E');
define('SECURE_AUTH_KEY',  'bK? Wr9SRf.1a/VS;NJ8(&^Za<^JbSR1b{-ds0TVDy7Ul+L9gOWKV{r5LE#Kx7b6');
define('LOGGED_IN_KEY',    'j8!#swJDO-u`uiQm?+]S6!|@.{m;iBM>sgxum6Bv,S #neY6]_v.H_qGAg4trNfx');
define('NONCE_KEY',        '6$emaD?nkAdgeEu,<KaJd:=?K1uQQ}y/][q]|eFu!dE-J2y{H|Ao ;aczn*b4UN7');
define('AUTH_SALT',        '&;$KV1+lv_)-lf>?O8.q#@G0p &&I86T2=eR|R-Sir[?MNYO9Wne1og^QOtE%JcJ');
define('SECURE_AUTH_SALT', '|GH B}qEI-]V,p_Q]D+E&[Bg^p[:/|uD8_;+V4*|-PKfq}KwL;7N|2Q1aV;~oh@7');
define('LOGGED_IN_SALT',   'M^,J3yr@;zI.ubOf-fo=MJ3/6G.QV5A&#k,q&~s9AFMOfyXF;%tXccnXN))Sh8S,');
define('NONCE_SALT',       '2:cBN:/0!:Kp+&sr[wEhgN{na),z!/&>,,F1}p0Edo})p[acwU]0/kh06i|I;1kt');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
