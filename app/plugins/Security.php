<?php
/**
 * Created by PhpStorm.
 * User: Puding
 * Date: 2014/10/27
 * Time: 13:56
 */

use Phalcon\Events\Event,
    Phalcon\Mvc\User\Plugin,
    Phalcon\Mvc\Dispatcher,
    Phalcon\Acl,
    Phalcon\Acl\Adapter\Memory,
    Phalcon\Acl\Role,
    Phalcon\Acl\Resource;

class Security extends Plugin {

    public function __construct($dependencyInjector){
        $this->_dependencyInjector = $dependencyInjector;
    }

    public function getAcl() {
        if (!isset($this->persistent->acl)) {
            $acl = new Memory();
            $acl->setDefaultAction(Acl::DENY);

        }
    }

    public function beforeDispatch(Event $event, Dispatcher $dispatcher) {
        $login_user = $this->session->get('login_user');

        $controller = $dispatcher->getControllerName();
        $action = $dispatcher->getActionName();

        if (!$login_user) {

        }
    }
} 