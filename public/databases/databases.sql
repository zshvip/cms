CREATE DATABASE `cms` /*!40100 CHARACTER SET utf8 COLLATE 'utf8_general_ci' */;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
	`id` BIGINT(20) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'ID',
	`username` VARCHAR(64) NOT NULL COMMENT '用户名' ,
	`password` VARCHAR(64) NOT NULL COMMENT '密码，md5' ,
	`realname` VARCHAR(64) NOT NULL COMMENT '真名' ,
	`email` VARCHAR(128) NULL DEFAULT NULL COMMENT '电子邮箱' ,
	`qq` VARCHAR(32) NULL DEFAULT NULL COMMENT 'QQ' ,
	`sex` TINYINT(3) UNSIGNED ZEROFILL NULL DEFAULT NULL COMMENT '性别(0保密，1男，2女)',
	`phone` VARCHAR(32) NULL DEFAULT NULL COMMENT '联系电话' ,
	`auths` TEXT NULL DEFAULT NULL COMMENT '权限',
	PRIMARY KEY (`id`),
	UNIQUE INDEX `username` (`username`)
)
COMMENT='用户表'
COLLATE='utf8_general_ci'
ENGINE=InnoDB;

insert into users(username,password,realname,email,auths) values('admin',md5('admin'),'管理员','474898686@qq.com','*');

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
	`id` INT(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'ID',
	`rolename` VARCHAR(64) NOT NULL COMMENT '角色名',
	`auths` TEXT NULL COMMENT '权限',
	PRIMARY KEY (`id`),
	UNIQUE INDEX `rolename` (`rolename`)
)
COMMENT='角色表'
COLLATE='utf8_general_ci'
ENGINE=InnoDB;

DROP TABLE IF EXISTS `auths`;
CREATE TABLE `auths` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`controller` VARCHAR(32) NOT NULL DEFAULT '0',
	`action` VARCHAR(32) NOT NULL DEFAULT '0',
	`description` VARCHAR(64) NULL DEFAULT '0',
	`menu` VARCHAR(64) NULL DEFAULT '0',
	`parent` INT UNSIGNED NOT NULL DEFAULT '0',
	`icon` VARCHAR(64) NOT NULL DEFAULT '0',
	`orderid` INT UNSIGNED NOT NULL DEFAULT '0',
	`public` CHAR(1) NOT NULL DEFAULT 'N',
	PRIMARY KEY (`id`),
	UNIQUE INDEX `controller_action` (`controller`, `action`)
)
COMMENT='权限表'
COLLATE='utf8_general_ci'
ENGINE=InnoDB;
