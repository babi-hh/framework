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