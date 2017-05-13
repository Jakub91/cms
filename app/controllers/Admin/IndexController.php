<?php
namespace Partum\Controllers\Admin;

use Partum;

class IndexController extends Partum {

    public function indexAction() {
        $this->view->pick('admin/login');
    }

}