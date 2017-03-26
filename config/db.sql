/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Seldoon <Sedloon@sina.cn>
 * Created: Mar 21, 2017
 */

CREATE TABLE `user` (
    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '自增ID',
    `username` VARCHAR(25) NOT NULL COMMENT '用户名',
    `password` VARCHAR(254) NOT NULL COMMENT '密码',
    `authKey` varchar(100) NOT NULL DEFAULT '',
    `accessToken` varchar(100) NOT NULL DEFAULT '',
    `mobile` VARCHAR(11) NOT NULL  DEFAULT '' COMMENT '手机号',
    `email` VARCHAR(128) NOT NULL DEFAULT '' COMMENT '邮箱',
    `data` TEXT NOT NULL DEFAULT '' COMMENT '用户数据',
    `created` INT(11) UNSIGNED NOT NULL COMMENT '创建时间',
    `status` TINYINT(1) UNSIGNED NOT NULL DEFAULT '1' COMMENT '状态',
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户表';

CREATE TABLE `node` (
    `nid` INT (11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '节点id，自增',
    `type` VARCHAR (32) NOT NULL COMMENT '内容类型',
    `title` VARCHAR (255) NOT NULL DEFAULT '' COMMENT '内容标题',
    `body` TEXT NOT NULL DEFAULT '' COMMENT '内容',
    `uid` INT (11) UNSIGNED NOT NULL COMMENT '作者id',
    `status` TINYINT (1) UNSIGNED NOT NULL COMMENT '内容的状态',
    `comment` INT (11) UNSIGNED NOT NULL DEFAULT 0 COMMENT '评论数',
    `created` DATETIME NOT NULL COMMENT '创建时间',
    `updated` TIMESTAMP NOT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
    PRIMARY KEY (`nid`)
) ENGINE = INNODB DEFAULT CHARSET = utf8 COMMENT = '内容节点表';