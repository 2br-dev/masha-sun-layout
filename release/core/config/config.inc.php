<?php
/**
 *  MODX Configuration file
 */
$database_type = 'mysql';
$database_server = 'localhost';
$database_user = 'masha_admin';
$database_password = 'masha#admin';
$database_connection_charset = 'utf8';
$dbase = 'masha_sun';
$table_prefix = 'modx_';
$database_dsn = 'mysql:host=localhost;dbname=masha_sun;charset=utf8';
$config_options = array (
);
$driver_options = array (
);

$lastInstallTime = 1628244728;

$site_id = 'modx610d0af8630c32.23114400';
$site_sessionname = 'SN610d0acd9163b';
$https_port = '443';
$uuid = 'f1600c30-abd9-4728-aa93-aeda20a221a8';

if (!defined('MODX_CORE_PATH')) {
    $modx_core_path= 'C:/!Genesys_archives/Masha_sun/6-08-2021_Layout/!Layout/release/core/';
    define('MODX_CORE_PATH', $modx_core_path);
}
if (!defined('MODX_PROCESSORS_PATH')) {
    $modx_processors_path= 'C:/!Genesys_archives/Masha_sun/6-08-2021_Layout/!Layout/release/core/model/modx/processors/';
    define('MODX_PROCESSORS_PATH', $modx_processors_path);
}
if (!defined('MODX_CONNECTORS_PATH')) {
    $modx_connectors_path= 'C:/!Genesys_archives/Masha_sun/6-08-2021_Layout/!Layout/release/connectors/';
    $modx_connectors_url= '/connectors/';
    define('MODX_CONNECTORS_PATH', $modx_connectors_path);
    define('MODX_CONNECTORS_URL', $modx_connectors_url);
}
if (!defined('MODX_MANAGER_PATH')) {
    $modx_manager_path= 'C:/!Genesys_archives/Masha_sun/6-08-2021_Layout/!Layout/release/manager/';
    $modx_manager_url= '/manager/';
    define('MODX_MANAGER_PATH', $modx_manager_path);
    define('MODX_MANAGER_URL', $modx_manager_url);
}
if (!defined('MODX_BASE_PATH')) {
    $modx_base_path= 'C:/!Genesys_archives/Masha_sun/6-08-2021_Layout/!Layout/release/';
    $modx_base_url= '/';
    define('MODX_BASE_PATH', $modx_base_path);
    define('MODX_BASE_URL', $modx_base_url);
}
if(defined('PHP_SAPI') && (PHP_SAPI == "cli" || PHP_SAPI == "embed")) {
    $isSecureRequest = false;
} else {
    $isSecureRequest = ((isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off') || $_SERVER['SERVER_PORT'] == $https_port);
}
if (!defined('MODX_URL_SCHEME')) {
    $url_scheme=  $isSecureRequest ? 'https://' : 'http://';
    define('MODX_URL_SCHEME', $url_scheme);
}
if (!defined('MODX_HTTP_HOST')) {
    if(defined('PHP_SAPI') && (PHP_SAPI == "cli" || PHP_SAPI == "embed")) {
        $http_host='masha-sun.local';
        define('MODX_HTTP_HOST', $http_host);
    } else {
        $http_host= array_key_exists('HTTP_HOST', $_SERVER) ? htmlspecialchars($_SERVER['HTTP_HOST'], ENT_QUOTES) : 'masha-sun.local';
        if ($_SERVER['SERVER_PORT'] != 80) {
            $http_host= str_replace(':' . $_SERVER['SERVER_PORT'], '', $http_host); // remove port from HTTP_HOST
        }
        $http_host .= ($_SERVER['SERVER_PORT'] == 80 || $isSecureRequest) ? '' : ':' . $_SERVER['SERVER_PORT'];
        define('MODX_HTTP_HOST', $http_host);
    }
}
if (!defined('MODX_SITE_URL')) {
    $site_url= $url_scheme . $http_host . MODX_BASE_URL;
    define('MODX_SITE_URL', $site_url);
}
if (!defined('MODX_ASSETS_PATH')) {
    $modx_assets_path= 'C:/!Genesys_archives/Masha_sun/6-08-2021_Layout/!Layout/release/assets/';
    $modx_assets_url= '/assets/';
    define('MODX_ASSETS_PATH', $modx_assets_path);
    define('MODX_ASSETS_URL', $modx_assets_url);
}
if (!defined('MODX_LOG_LEVEL_FATAL')) {
    define('MODX_LOG_LEVEL_FATAL', 0);
    define('MODX_LOG_LEVEL_ERROR', 1);
    define('MODX_LOG_LEVEL_WARN', 2);
    define('MODX_LOG_LEVEL_INFO', 3);
    define('MODX_LOG_LEVEL_DEBUG', 4);
}
