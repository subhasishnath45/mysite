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
define('DB_NAME', 'subhauct_subhasishlive');

/** MySQL database username */
define('DB_USER', 'subhauct');

/** MySQL database password */
define('DB_PASSWORD', '@w_0*o#uE#B?');

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
define('AUTH_KEY',         'T|^.$^#)4EFn);;GFl`8:D:jY3^3Fsx;O6Rya6:o_Ff+yk^,>ul|p5W.GeJe6?MG');
define('SECURE_AUTH_KEY',  'cGI-o/L!>R`s3Kw^X6)b3tmDh6yAa2N(zioOFEVQ<&r.#SAMHwh#`2@IU<~Pu?]5');
define('LOGGED_IN_KEY',    'PF|%Z,2_Ob 00*(fKc#9ja,+^lv9y(rMR~W^ (&L!v`OIR^qr{j4}v~~tOPSp>4I');
define('NONCE_KEY',        'bAsF..<S3V8TGWYJ}#z59ZN(!gbz`g=8WJ4G0!4aE:r,%N}ylw.n2g@Lur xJfHU');
define('AUTH_SALT',        '=iLDCWVibDO<j1y#&eg&$~t_,%r`JZF(#+Wf?&8XpG!{f)?;G.i,8fA3UC1-vPDI');
define('SECURE_AUTH_SALT', '|nI7Ao4>t}O(YO7e,(ceqb@+ZDQz(y:ixp)Hlw]|Kl7J2=X=:JJjtS7!2m]cp4#K');
define('LOGGED_IN_SALT',   'S0aeBy]$^61w=A*)^Fa[h6X&AD+?2BIjaGu:K>{&N}@R>K2=hURV%tN@k(&YCrT@');
define('NONCE_SALT',       's D-q{(I!<];3N,CK#$e!+xTFLS1vIiwS,[Xq>Fm/Esm4;MwiYq9c b:a[q;:aFR');

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

define( 'WP_MEMORY_LIMIT', '256M' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
