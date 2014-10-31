<?php
/**
 * Created by PhpStorm.
 * User: Puding
 * Date: 2014/10/30
 * Time: 14:42
 */

use Phalcon\Mvc\View;

function SortAuth($a1, $a2) {
    if ($a1->orderid > $a2->orderid) {
        return 1;
    }
    return 0;
}

class WelcomeController extends ControllerBase {

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
        if ($this->request->isPost()) {
            $username = $this->request->get('username', NULL, '');
            $password = $this->request->get('password', NULL, '');

            if ($username == '' || $password == '') {
                $this->error($this->view->_t->_("login")['error_null_user_or_pass']);
            } else {
                $user = Users::findFirst(array("conditions" => "username = :username:", "bind" => array('username' => $username)));
                if (!$user) {
                    $this->error($this->view->_t->_("login")['error_user_not_exists']);
                } else {
                    if ($user->password != md5($password)) {
                        $this->error($this->view->_t->_("login")['error_password_wrong']);
                    } else if ($user->active != 1) {
                        $this->error($this->view->_t->_("login")['error_not_active']);
                    } else {
                        $this->session->set('user', $user);
                        $auths = array();
                        foreach($user->Roles as $role) {
                            foreach($role->Auths as $auth) {
                                $auths[$auth->id] = $auth->toArray();
                            }
                        }
                        usort($auths, "SortAuth");
                        $this->session->set('auth', $auths);
                        $this->session->set('session', array('hisc'=>'welcome','hisa'=>'index'));
                        return $this->forward('index/index');
                    }
                }
            }

            $this->session->remove('user');
            $this->session->remove('auth');
            $this->session->remove('session');
            return $this->forward('welcome/index');
        } else {
            return $this->forward('welcome/index');
        }


    }

    public function logoutAction() {
        $this->session->remove('user');
        $this->session->remove('auth');
        $this->session->remove('session');
        return $this->forward('welcome/index');
    }
} 