<?php

use Phalcon\Mvc\View;

class IndexController extends ControllerBase
{
    /**
     * 首页
     */
    public function indexAction()
    {

    }

    /**
     * 登录页
     */
    public function loginAction()
    {
        //不使用index模板
        $this->view->setRenderLevel(View::LEVEL_ACTION_VIEW);
    }
}

