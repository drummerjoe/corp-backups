<?php
# Database Configuration
define( 'DB_NAME', 'wp_polarprod' );
define( 'DB_USER', 'polarprod' );
define( 'DB_PASSWORD', 'BwiJt1KtR1IKh0NIxXCm' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'BOvQ^{`W@;1M+>F,K;-MK$O1!%NUJ6(&%K$SoT|$6ePez|nWd(T|dM+~J|6d9he3');
define('SECURE_AUTH_KEY',  '#Tp~ay&g;+|Y=aO&@fLq!ede)NC$:)^r>&T5YID*Hd$}Ao4^}VMd?h;,&ExiczOZ');
define('LOGGED_IN_KEY',    '7-7/o_AL`M$cLth9cN&[SR`Y_;Z%cj+#vQnzH%nT+>cC`mf0v|m+KG{CxG#)i+tB');
define('NONCE_KEY',        'r|)A&jY#R3g4%<nh5n|!S6(lrB}}^k &x|ki`6!nVuOAJAp;TuO+F^MQZw+u}h,y');
define('AUTH_SALT',        'YIFc^fgfItPa5j!-wq>01@EH|&ll(wRuf)R1O//7KJtMlf}d;y{g@l(Ved{#DqNF');
define('SECURE_AUTH_SALT', 'N~IT nXfBkIwJw/hQG>A@ D#DM9&yurrnI(lsxp-8P|z1cC ]<|LgTJL%<q|>n(L');
define('LOGGED_IN_SALT',   'b2yQ=E5Jgdyt0<-3EPk3-E5NL5(ah&%bT)$y}k$I9[a@i{x$0SBW<]HIqmqMmnv;');
define('NONCE_SALT',       '0P A.Q}XPx[9Y ]eNWlql2K..{#-O`!G_Ad%}_G.V8oQKw]y WHxBB^xmu:BbH_+');


# Localized Language Stuff


define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'polarprod' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '0b0a624704867617982a50d3f868377fccc180f8' );

define( 'WPE_CLUSTER_ID', '101105' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'blog.drum.io', 1 => 'polarprod.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-101105', );

$wpe_special_ips=array ( 0 => '104.199.112.20', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );

define( 'WP_CACHE', TRUE );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');














