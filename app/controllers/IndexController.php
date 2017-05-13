<?php
namespace Partum\Controllers;

use Partum;

class IndexController extends Partum {

    public function indexAction() {
        $this->view->pick('homepage');
    }

}

