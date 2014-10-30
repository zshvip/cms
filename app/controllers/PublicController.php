<?php
/**
 * Created by PhpStorm.
 * User: Puding
 * Date: 2014/10/30
 * Time: 14:42
 */

use Phalcon\Mvc\View;

class PublicController extends ControllerBase {

    /**
     * 登录页
     */
    public function indexAction() {
        //不使用index模板
        $this->view->setRenderLevel(View::LEVEL_ACTION_VIEW);
    }

    /**
     * 登录检查
     */
    public function loginAction() {
        $username = $this->request->get('username', NULL, '');
        $password = $this->request->get('password', NULL, '');

        if ($username == '' || $password == '') {
            $this->error($this->view->_t->_("login")['error_null_user_or_pass']);
        }

        $this->forward('public/index');
    }
} 