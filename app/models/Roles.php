<?php
/**
 * Created by PhpStorm.
 * User: Puding
 * Date: 2014/10/28
 * Time: 12:15
 */

class Roles extends \Phalcon\Mvc\Model {
    public $id;
    public $rolename;
    public $descript;

    public function initialize() {
        $this->hasManyToMany(
            "id",
            "RoleAuth",
            "roleid", "authid",
            "Auths",
            "id"
        );
    }
} 