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

            $roles = Roles::find();
            $auths = Auths::find();

            //所有私有资源
            foreach ($auths as $auth) {
                $acl->addResource(new Resource($auth->controller), $auth->action);
            }

            //为所有角色分配访问权限
            foreach ($roles as $role) {
                $r = new Role($role->rolename);
                $acl->addRole($r);
                foreach ($role->Auths as $auth) {
                    $acl->allow($r->getName(), $auth->controller, $auth->action);
                }
            }
            $this->persistent->acl = $acl;
        }
        return $this->persistent->acl;
    }

    public function beforeDispatch(Event $event, Dispatcher $dispatcher) {
        $user = $this->session->get('user');
        $session = $this->session->get('session');

        $controller = $dispatcher->getControllerName();
        $action = $dispatcher->getActionName();
        $allowed = false;
        $acl = $this->getAcl();

        //不在资源表中的默认都可以访问

        if ($acl->isResource($controller)) {
            if (isset($user->Roles)) {
                foreach ($user->Roles as $r) {
                    $allowed = $acl->isAllowed($r->rolename, $controller, $action);
                    if ($allowed) {
                        break;
                    }
                }
            }
        } else {
            $allowed = true;
        }
        if (!$allowed) {
            //没有登录跳转到登录
            if (!$user) {
                $dispatcher->forward(
                    array(
                        'controller' => 'welcome',
                        'action' => 'index'
                    )
                );
            } else {
                //如果已经登录又没有权限，则跳转到上一次访问的地址
                $hisc = $session['hisc'];
                $hisa = $session['hisa'];
                if (empty($hisc) || empty($hisa)) {
                    $dispatcher->forward(
                        array(
                            'controller' => 'welcome',
                            'action' => 'index'
                        )
                    );
                } else {
                    $dispatcher->forward(
                        array(
                            'controller' => $hisc,
                            'action' => $hisa
                        )
                    );
                }

            }
        } else {
            if ($session != false) {
                $session['hisc'] = $controller;
                $session['hisa'] = $action;
            }
        }
    }
} 