<?php
/**
 * Created by PhpStorm.
 * User: Puding
 * Date: 2014/10/24
 * Time: 16:54
 */

class UserController extends ControllerBase {
    /**
     * 登录处理
     */
    public function loginAction()
    {
        $this->forward('index/index');
    }
} 