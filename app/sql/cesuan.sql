/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50635
Source Host           : localhost:3306
Source Database       : cesuan

Target Server Type    : MYSQL
Target Server Version : 50635
File Encoding         : 65001

Date: 2019-03-22 22:39:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for main_order
-- ----------------------------
DROP TABLE IF EXISTS `main_order`;
CREATE TABLE `main_order` (
  `uid` int(11) NOT NULL AUTO_INCREMENT COMMENT '订单ID',
  `order_no` varchar(100) NOT NULL COMMENT '订单号',
  `role_id` varchar(100) NOT NULL COMMENT '客户角色ID',
  `product_type` varchar(20) DEFAULT NULL COMMENT '产品类型',
  `client_name` varchar(20) NOT NULL COMMENT '测算姓名',
  `gender` varchar(20) NOT NULL COMMENT '性别',
  `birthday` datetime DEFAULT NULL COMMENT '出生日期',
  `birthday_desc` varchar(100) DEFAULT NULL COMMENT '日期描述',
  `birthday_date` datetime DEFAULT NULL COMMENT '出生年月日',
  `birthday_hour` tinyint(1) DEFAULT NULL COMMENT '出生时辰',
  `price` decimal(12,2) DEFAULT '0.00' COMMENT '原价',
  `discount_price` decimal(12,2) DEFAULT '0.00' COMMENT '折扣价',
  `order_amount` decimal(12,2) DEFAULT '0.00' COMMENT '实际订单金额',
  `discount_end_time` datetime DEFAULT NULL COMMENT '折扣结束时间',
  `create_time` datetime DEFAULT NULL COMMENT '订单创建时间',
  `paid_time` datetime DEFAULT NULL COMMENT '订单支付时间',
  `paid_way` varchar(20) DEFAULT NULL COMMENT '支付方式',
  `update_time` datetime DEFAULT NULL COMMENT '更新时间',
  `state` tinyint(1) DEFAULT '0' COMMENT '订单状态',
  `is_paid` tinyint(1) DEFAULT '0' COMMENT '是否支付',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='订单表';

-- ----------------------------
-- Table structure for member
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `uid` int(11) NOT NULL AUTO_INCREMENT COMMENT '会员ID',
  `role_id` varchar(100) NOT NULL COMMENT '客户角色ID',
  `member_name` varchar(50) NOT NULL COMMENT '会员姓名',
  `gender` varchar(20) DEFAULT NULL COMMENT '性别',
  `birthday` datetime DEFAULT NULL COMMENT '出生日期',
  `create_time` datetime DEFAULT NULL COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='会员表';
