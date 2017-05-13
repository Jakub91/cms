<?php
try {

    defined('BASE_PATH') || define('BASE_PATH', getenv('BASE_PATH') ?: realpath(dirname(__FILE__) . '/../..'));
    defined('APP_PATH') || define('APP_PATH', BASE_PATH . '/app');

    $config = include(APP_PATH . '/config/config.php');

    if(array_key_exists($_SERVER['HTTP_HOST'], $config)){
        $currentSite = $config[$_SERVER['HTTP_HOST']];
    }
    elseif(array_key_exists('default', $config)){
        $currentSite = $config['default'];
    }
    else {
        throw new Exception('Config problem');
    }

    return new \Phalcon\Config([
        'database' => [
            'adapter'     => $currentSite['database']['adapter'],
            'host'        => $currentSite['database']['host'],
            'username'    => $currentSite['database']['username'],
            'password'    => $currentSite['database']['password'],
            'dbname'      => $currentSite['database']['dbname'],
            'charset'     => $currentSite['database']['charset'],
        ],
        'application' => [
            'appDir'         => APP_PATH . '/',
            'controllersDir' => APP_PATH . '/controllers/',
            'modelsDir'      => APP_PATH . '/models/',
            'migrationsDir'  => APP_PATH . '/migrations/',
            'templatesDir'   => APP_PATH . '/templates/',
            'pluginsDir'     => APP_PATH . '/plugins/',
            'libraryDir'     => APP_PATH . '/library/',
            'cacheDir'       => BASE_PATH . '/cache/',
            'vendorDir'      => BASE_PATH . '/vendor/',
            'baseUri'        => substr(preg_replace('/public([\/\\\\])index.php$/', '', $_SERVER["PHP_SELF"]), 0, -1),
            'webRoot'        => "http".(isset($_SERVER['HTTPS']) ? 's' : null) . '://'.$_SERVER["HTTP_HOST"]
        ]
    ]);

} catch (Exception $e){
    throw $e;
}
