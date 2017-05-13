<?php
use Phalcon\Events\Event;
use Phalcon\Mvc\User\Plugin;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Acl;
use Phalcon\Acl\Role;
use Phalcon\Acl\Adapter\Memory as AclList;
use Phalcon\Acl\Resource;

class AdminPlugin extends Plugin {

    public function beforeExecuteRoute(Event $event, Dispatcher $dispatcher) {

        $auth = $this->session->get("Admin");

        if(!$auth){

            $reqLogin = false;

            $namespace  = $dispatcher->getNamespaceName();
            $controller = $dispatcher->getControllerName();
            $action     = $dispatcher->getActionName();

            $namespaces = explode("\\", $namespace);
            foreach ($namespaces as $name){
                if($name == "Admin"){
                    $reqLogin = true;
                    break;
                }
            }

            $dontNeedLogin = ["Index" => ["*"]];

            foreach ($dontNeedLogin as $controllerName => $actions){

            }

            Partum::debug($dontNeedLogin);

            echo $namespace; exit;

            $this->flashSession->error("You don't have access to this module");

            $dispatcher->forward([
                'namespace'  => 'Partum\Controllers',
                "controller" => "index",
                "action"     => "index",
            ]);

            return false;

        }

        return true;
    }
}