<?php
$router = new Phalcon\Mvc\Router(true);

$router->removeExtraSlashes(true);

$router->add('/images/([a-zA-Z0-9_/.-]*)', [
    'namespace' => 'Partum\Controllers\Base',
    'controller' => 'Images',
    'action' => 'index',
    'image' => 1,
]);

$router->add("/admin", [
    'namespace' => 'Partum\Controllers\Admin',
    "controller" => 'Index',
    "action" => 'index',
]);

$router->add('/admin/:action', array(
    'namespace' => 'Partum\Controllers\Admin',
    'controller' => 'Index',
    'action' => 1,
));

$router->add('/admin/:controller/:action', array(
    'namespace' => 'Partum\Controllers\Admin',
    'controller' => 1,
    'action' => 2,
));

return $router;