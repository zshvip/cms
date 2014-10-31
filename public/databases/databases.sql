CREATE DATABASE `cms` /*!40100 CHARACTER SET utf8 COLLATE 'utf8_general_ci' */;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
	`id` BIGINT(20) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'ID',
	`username` VARCHAR(64) NOT NULL COMMENT '用户名',
	`password` VARCHAR(64) NOT NULL COMMENT '密码，md5',
	`realname` VARCHAR(64) NOT NULL COMMENT '真名',
	`email` VARCHAR(128) NULL DEFAULT NULL COMMENT '电子邮箱',
	`qq` VARCHAR(32) NULL DEFAULT NULL COMMENT 'QQ',
	`sex` TINYINT(3) UNSIGNED ZEROFILL NULL DEFAULT NULL COMMENT '性别(0保密，1男，2女)',
	`phone` VARCHAR(32) NULL DEFAULT NULL COMMENT '联系电话',
	`create_time` DATETIME NULL DEFAULT NULL COMMENT '创建时间',
	`last_login_time` DATETIME NULL DEFAULT NULL COMMENT '最后登录时间',
	`active` TINYINT(3) NOT NULL DEFAULT 0 COMMENT '激活状态',
	PRIMARY KEY (`id`),
	UNIQUE INDEX `username` (`username`)
)
COMMENT='用户表'
COLLATE='utf8_general_ci'
ENGINE=InnoDB;

insert into users(username,password,realname,email, active) values('admin',md5('admin'),'管理员','474898686@qq.com', '1');

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
	`id` INT(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'ID',
	`rolename` VARCHAR(64) NOT NULL COMMENT '角色名',
	`descript` VARCHAR(64) NULL DEFAULT NULL COMMENT '角色说明',
	PRIMARY KEY (`id`),
	UNIQUE INDEX `rolename` (`rolename`)
)
COMMENT='角色表'
COLLATE='utf8_general_ci'
ENGINE=InnoDB;


DROP TABLE IF EXISTS `auths`;
CREATE TABLE `auths` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID',
	`controller` VARCHAR(32) NULL COMMENT '控制器',
	`action` VARCHAR(32) NULL COMMENT '行为',
	`description` VARCHAR(64) NULL DEFAULT NULL COMMENT '描述',
	`menu` VARCHAR(64) NULL DEFAULT NULL COMMENT '菜单显示',
	`parent` INT(10) UNSIGNED NULL DEFAULT NULL COMMENT '父菜单ID',
	`icon` VARCHAR(64) NULL DEFAULT NULL COMMENT '图标',
	`orderid` INT(10) UNSIGNED NULL DEFAULT 0 COMMENT '排序',
	`type` TINYINT(3) UNSIGNED NULL DEFAULT 0 COMMENT '类型，0普通功能菜单，1功能父菜单，2顶部菜单，3顶部父菜单',
	PRIMARY KEY (`id`),
	INDEX `controller_action` (`controller`, `action`)
)
COMMENT='权限表'
COLLATE='utf8_general_ci'
ENGINE=InnoDB;


DROP TABLE IF EXISTS `user_role`;
CREATE TABLE `user_role` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID',
	`userid` BIGINT(20) UNSIGNED NOT NULL COMMENT '用户表id',
	`roleid` INT(10) UNSIGNED NOT NULL COMMENT '角色表id',
	PRIMARY KEY (`id`),
	INDEX `FK_user_role_users` (`userid`),
	INDEX `FK_user_role_roles` (`roleid`),
	CONSTRAINT `FK_user_role_users` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT `FK_user_role_roles` FOREIGN KEY (`roleid`) REFERENCES `roles` (`id`) ON UPDATE CASCADE ON DELETE CASCADE
)
COMMENT='用户角色表'
COLLATE='utf8_general_ci'
ENGINE=InnoDB;


DROP TABLE IF EXISTS `role_auth`;
CREATE TABLE `role_auth` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`roleid` INT(10) UNSIGNED NULL DEFAULT NULL COMMENT '角色ID',
	`authid` INT(10) UNSIGNED NULL DEFAULT NULL COMMENT '权限ID',
	PRIMARY KEY (`id`),
	INDEX `FK_role_auth_roles` (`roleid`),
	INDEX `FK_role_auth_auths` (`authid`),
	CONSTRAINT `FK_role_auth_auths` FOREIGN KEY (`authid`) REFERENCES `auths` (`id`) ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT `FK_role_auth_roles` FOREIGN KEY (`roleid`) REFERENCES `roles` (`id`) ON UPDATE CASCADE ON DELETE CASCADE
)
COMMENT='角色权限表'
COLLATE='utf8_general_ci'
ENGINE=InnoDB;
