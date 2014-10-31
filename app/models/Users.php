<?php
/**
 * Created by PhpStorm.
 * User: Puding
 * Date: 2014/10/28
 * Time: 12:21
 */

class Users extends \Phalcon\Mvc\Model {
    public $id;
    public $username;
    public $realname;
    public $email;
    public $qq;
    public $sex;
    public $phone;
    public $create_time;
    public $last_login_time;

    public function initialize() {
        $this->hasManyToMany(
            "id",
            "UserRole",
            "userid", "roleid",
            "Roles",
            "id"
        );
    }
} 