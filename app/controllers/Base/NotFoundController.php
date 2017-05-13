<?php
namespace Partum\Controllers\Base;

class NotFoundController extends \Partum {

    public function show404Action() {
        echo '404error'; exit;
    }

}

