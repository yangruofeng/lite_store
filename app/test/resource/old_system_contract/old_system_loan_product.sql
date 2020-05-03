/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : bank_live

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-01-18 16:12:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `old_system_loan_product`
-- ----------------------------
DROP TABLE IF EXISTS `old_system_loan_product`;
CREATE TABLE `old_system_loan_product` (
  `uid` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `old_product_code` varchar(20) DEFAULT NULL COMMENT '旧系统产品code',
  `old_product_name` varchar(100) DEFAULT NULL COMMENT '旧系统产品名字',
  `new_category_code` varchar(20) DEFAULT NULL COMMENT '新系统产品code',
  `repayment_type` varchar(100) DEFAULT NULL COMMENT '还款方式，如等额本息',
  `repayment_period` varchar(20) DEFAULT NULL COMMENT '还款周期，如月',
  `principal_payment_term` tinyint(1) DEFAULT NULL COMMENT '本金还款间隔，单位月，如6个月',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COMMENT='旧系统贷款产品';

-- ----------------------------
-- Records of old_system_loan_product
-- ----------------------------
INSERT INTO `old_system_loan_product` VALUES ('1', '03', 'Business_Decline (HL)', 'business', 'fixed_principal', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('2', '07', 'Business_Semi BL (HL)', 'business', 'semi_balloon_interest', 'monthly', '6');
INSERT INTO `old_system_loan_product` VALUES ('3', '08', 'Business_Annuity (HL)', 'business', 'annuity_scheme', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('4', '09', 'Motor Loan', 'motor', 'annuity_scheme', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('5', '10', 'Housing Loan', 'housing', 'annuity_scheme', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('6', '12', 'Consumption Loan', 'consumption', 'annuity_scheme', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('7', '13', 'Staff Personal_Annuity', 'personal', 'annuity_scheme', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('8', '14', 'Car Loan', 'car', 'annuity_scheme', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('9', '16', 'Personal_Annuity (HL)', 'personal', 'annuity_scheme', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('10', '17', 'Personal_Balloon (HL)', 'personal', 'balloon_interest', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('11', '18', 'Emergency Loan', 'emergency', 'single_repayment', null, null);
INSERT INTO `old_system_loan_product` VALUES ('12', '19', 'Staff Housing Loan', 'housing', 'annuity_scheme', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('13', '20', 'Staff Motor Loan', 'motor', 'annuity_scheme', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('14', '21', 'Great Loan', 'single', 'advance_fix_repayment_date', null, null);
INSERT INTO `old_system_loan_product` VALUES ('15', '22', 'Staff Car Loan', 'car', 'annuity_scheme', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('16', '23', 'Business_Decline (Store)', 'business', 'fixed_principal', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('17', '24', 'Business_Annuity (Store)', 'business', 'annuity_scheme', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('18', '25', 'Personal_Decline (HL)', 'personal', 'fixed_principal', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('19', '26', 'Personal_Annuity (Store)', 'personal', 'annuity_scheme', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('20', '29', 'Personal_Semi (HL)', 'personal', 'semi_balloon_interest', 'monthly', '6');
INSERT INTO `old_system_loan_product` VALUES ('21', '30', 'Staff Great Loan', 'single', 'advance_fix_repayment_date', null, null);
INSERT INTO `old_system_loan_product` VALUES ('22', '31', 'Busine_Annuity(HL)-No TF', 'business', 'annuity_scheme', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('23', '32', 'Person_Annuity(HL)_No TF', 'personal', 'annuity_scheme', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('24', '33', 'Person_Decline(HL)_No TF', 'personal', 'fixed_principal', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('25', '34', 'Bussin_Decline(HL)_No TF', 'business', 'fixed_principal', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('26', '35', 'Bussin_Annuity(ST)_No TF', 'business', 'annuity_scheme', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('27', '36', 'Person_Annuity(ST)_No TF', 'personal', 'annuity_scheme', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('28', '37', 'Person_Decline(ST)_No TF', 'personal', 'fixed_principal', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('29', '38', 'Bussin_Decline(ST)_No TF', 'business', 'fixed_principal', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('30', '39', 'Bussin_Semi BL(HL)_No TF', 'business', 'semi_balloon_interest', 'monthly', '6');
INSERT INTO `old_system_loan_product` VALUES ('31', '40', 'Person_Semi (HL)_No TF', 'personal', 'semi_balloon_interest', 'monthly', '6');
INSERT INTO `old_system_loan_product` VALUES ('32', '41', 'Consumption Loan(No Fee)', 'consumption', 'annuity_scheme', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('33', '42', 'Personal Loan BalloonNTF', 'personal', 'balloon_interest', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('34', '53', 'Business_Decline (HL)', 'business', 'fixed_principal', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('35', '58', 'Business_Annuity (HL)', 'business', 'annuity_scheme', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('36', '62', 'Consumption Loan', 'consumption', 'annuity_scheme', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('37', '66', 'Personal_Annuity (HL)', 'personal', 'annuity_scheme', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('38', '75', 'Personal_Decline (HL)', 'personal', 'fixed_principal', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('39', '76', 'Personal_Annuity (Store)', 'personal', 'annuity_scheme', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('40', '77', 'Business_Decline (N/A)', 'business', 'fixed_principal', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('41', '79', 'Personal_Semi (HL)', 'personal', 'semi_balloon_interest', 'monthly', '6');
INSERT INTO `old_system_loan_product` VALUES ('42', '81', 'Bussin_Annuity(HL)_No TF', 'business', 'annuity_scheme', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('43', '82', 'Person_Annuity(HL)_No TF', 'personal', 'annuity_scheme', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('44', '83', 'Perso Decline(HL)_No TF', 'personal', 'fixed_principal', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('45', '84', 'Bussin_Decline(HL)_No TF', 'business', 'fixed_principal', 'monthly', null);
INSERT INTO `old_system_loan_product` VALUES ('46', '90', 'Person_Semi BL(HL)_No TF', 'personal', 'semi_balloon_interest', 'monthly', '6');
INSERT INTO `old_system_loan_product` VALUES ('47', '91', 'Consumption Loan(No Fee)', 'consumption', 'annuity_scheme', 'monthly', null);
