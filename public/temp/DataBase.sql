CREATE DATABASE cms CHARACTER SET utf8 COLLATE utf8_bin;

DROP TABLE IF EXISTS users;
CREATE TABLE users (
  id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  username VARCHAR(64) NOT NULL COMMENT '用户名',
  password VARCHAR(64) NOT NULL COMMENT '密码',
  realname VARCHAR(64) NOT NULL COMMENT '真实姓名',
  email VARCHAR(128) NOT NULL COMMENT '电子邮件',
  qq VARCHAR(20) NULL COMMENT 'QQ',
  telphone VARCHAR(20) NULL COMMENT '手机',
  birthday DATETIME NULL COMMENT '出生年月日',
  sex VARCHAR(1) NULL COMMENT '性别，0保密，1男，2女',
  education VARCHAR(20) NULL COMMENT '学历',
  school VARCHAR(20) NULL COMMENT '毕业院校',
  auths TEXT NULL COMMENT '自定权限',
  status TINYINT(3) NOT NULL DEFAULT 0 COMMENT '状态，0是激活，1是冻结',
  PRIMARY KEY(id),
  UNIQUE KEY(username)
) ENGINE=InnoDB AUTO_INCREMENT=10000000 DEFAULT CHARSET=utf8;
INSERT INTO users(username,password,realname,email,status) values('admin', md5('admin'), '超级管理员', 'cms_admin@qq.com', 0);


DROP TABLE IF EXISTS roles;
CREATE TABLE roles (
  id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  rolename VARCHAR(64) NOT NULL COMMENT '角色名称',
  auths TEXT NULL COMMENT '自定权限',
) ENGINE=InnoDB AUTO_INCREMENT=10000 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS auths;
CREATE TABLE auths (
  id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  rolename VARCHAR(64) NOT NULL COMMENT '角色名称',
  auths TEXT NULL COMMENT '自定权限',
) ENGINE=InnoDB AUTO_INCREMENT=10000 DEFAULT CHARSET=utf8;