<?php
/**
 * Created by PhpStorm.
 * User: Puding
 * Date: 2014/10/27
 * Time: 12:15
 */

use Phalcon\Mvc\View;

class ErrorController extends ControllerBase {

    public function indexAction() {

    }

    public function error404Action() {
        $this->view->setRenderLevel(View::LEVEL_ACTION_VIEW);
        echo 'ss';
    }
} 