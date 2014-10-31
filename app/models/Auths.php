<?php
/**
 * Created by PhpStorm.
 * User: Puding
 * Date: 2014/10/28
 * Time: 12:21
 */

class Auths extends \Phalcon\Mvc\Model {
    public $id;
    public $controller;
    public $action;
    public $description;
    public $menu;
    public $parent;
    public $icon;
    public $orderid;
    public $public;

    public function initialize() {

    }
} 