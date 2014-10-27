<?php

use Phalcon\Mvc\Controller;

define("SUCCESS", "success");
define("INFO", "notice");
define("WARN", "warning");
define("ERROR", "error");

class ControllerBase extends Controller
{
    protected function _getTranslation()
    {
        //Ask browser what is the best language
        $language = $this->request->getBestLanguage();

        $message = NULL;

        //Check if we have a translation file for that lang
        if (file_exists(__DIR__."/../messages/".$language.".php")) {
            require __DIR__."/../messages/".$language.".php";
        } else {
            // fallback to some default
            require __DIR__."/../messages/en.php";
        }

        //Return a translation object
        return new \Phalcon\Translate\Adapter\NativeArray(array(
            "content" => $messages
        ));
    }

    protected function initialize() {
        $this->view->setVar("_t", $this->_getTranslation());
    }

    protected function forward($uri) {
        $uriParts = explode('/', $uri);
        return $this->dispatcher->forward(
            array(
                'controller' => $uriParts[0],
                'action' => $uriParts[1]
            )
        );
    }

    private function showFlash($msg, $type) {
        $message = $this->view->_t->_($type);
        $this->flash->$type($message.$msg);
    }

    protected  function error($msg) {
        $this->showFlash($msg, "error");
    }

    protected  function notice($msg) {
        $this->showFlash($msg, "notice");
    }

    protected  function success($msg) {
        $this->showFlash($msg, "success");
    }

    protected  function warning($msg) {
        $this->showFlash($msg, "warning");
    }


}
