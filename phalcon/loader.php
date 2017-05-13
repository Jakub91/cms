<?php
$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs([
    $config->application->controllersDir,
    $config->application->libraryDir,
    $config->application->modelsDir,
    $config->application->pluginsDir,
]);

$loader->registerNamespaces([
    'Partum\Controllers'       => APP_PATH . '/controllers',
    'Partum\Controllers\Base'  => APP_PATH . '/controllers/Base',
    'Partum\Controllers\Admin' => APP_PATH . '/controllers/Admin',
    'Partum\Library'           => APP_PATH . '/library',
]);

$loader->register();
