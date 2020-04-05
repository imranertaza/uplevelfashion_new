<?php
// HTTP
//define('HTTP_SERVER', 'http://localhost/uplevelfashionel_new/cms/');
define('HTTP_SERVER', 'http://uplevelfashion.dn/');

// HTTPS
//define('HTTPS_SERVER', 'http://localhost/uplevelfashionel_new/cms/');
define('HTTPS_SERVER', 'http://uplevelfashion.dn/');

// DIR
define('DIR_APPLICATION', '/var/www/uplevelfashion.dn/public_html/catalog/');
define('DIR_SYSTEM', '/var/www/uplevelfashion.dn/public_html/system/');
define('DIR_IMAGE', '/var/www/uplevelfashion.dn/public_html/image/');
define('DIR_STORAGE', '/var/www/uplevelfashion.dn/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'password');
define('DB_DATABASE', 'uplevel_fashion');
define('DB_PORT', '3306');
define('DB_PREFIX', 'flnew_');
