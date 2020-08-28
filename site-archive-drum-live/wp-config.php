<?php
# Database Configuration
define( 'DB_NAME', 'wp_drum' );
define( 'DB_USER', 'drum' );
define( 'DB_PASSWORD', 'xFtMaURYpxk4gpMEM7bu' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'HK6<eclQFK4C|_A<&2$2}LxnP@1*pALabdHpb(9J2QO!6N]%o3tP|k2xs|%v!g;4');
define('SECURE_AUTH_KEY',  'Fir(]`$(;)2=G&J16f6O#zG<4 w{J|6iaUEj;w4<Aa6KD1]H#5BrLZiP5-n5#!3e');
define('LOGGED_IN_KEY',    'Bk-jy $:6}o6n5d56%^Mg=Mh|TU$KQkO|8IQmj-IWpZ99>P[l$vom%vdw;=; Egw');
define('NONCE_KEY',        '{NAb(20Uhkb{xw@U1Gb#4Hiv5-2iJIi:YPs+f^W{M!O55JTO@=0:MI#ONu^uN9L;');
define('AUTH_SALT',        '9QE|-*9c1&=S.otM+Dj3fqW<n3oAY=-+f=x]&}jE3-+{yHotKWOI+~STshiG^TGF');
define('SECURE_AUTH_SALT', '(.+5[b*a!gmpAT50]#FN.E|dZki@661g,4<+BLvYAnt9NL#-`1K-1aF9g&{4+3d;');
define('LOGGED_IN_SALT',   't|2O0YHm8<{pBQ3|&0Y_<%]r6dG;{6=+W^$$e={~T`&R-Ot (}I%7w#I{}zikK&S');
define('NONCE_SALT',       'jO,B43L^-g*ZO%$9&zF`^)%{AcUYv8730vuu:Hb@5R8mN1q0TfgBg#3*Y0{kH|}<');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'drum' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'a12fb1c7786502ddd5b2efb92f1e353143bf12d7' );

define( 'WPE_CLUSTER_ID', '101086' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', false );

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

$wpe_all_domains=array ( 0 => 'drum.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-101086', );

$wpe_special_ips=array ( 0 => '104.196.240.25', );

$wpe_netdna_domains=array ( 0 =>  array ( 'zone' => '2rywra36d1oq3c5qie3qdamb', 'match' => 'drum.io', 'secure' => true, 'enabled' => true, ), );

$wpe_netdna_domains_secure=array ( 0 =>  array ( 'zone' => '2rywra36d1oq3c5qie3qdamb', 'match' => 'drum.io', 'secure' => true, 'enabled' => true, ), );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );

define( 'WP_SITEURL', 'http://drum.wpengine.com' );

define( 'WP_HOME', 'http://drum.wpengine.com' );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');



















