#1.9.2.2 要对block有权限
 insert  into `permission_block`(`block_name`,`is_allowed`) values
 ('filterproducts/featured_home_list',1),
 ('filterproducts/latest_home_list',1),
 ('filterproducts/newproduct_home_list',1),
 ('filterproducts/sale_home_list',1),
 ('filterproducts/mostviewed_home_list',1),
 ('filterproducts/bestsellers_home_list',1),
 ('blog/last',1),
 ('newsletter/subscribe',1),
 ('tag/popular',1),
 ('zeon_manufacturer/home',1);

#安装1,SQL，修改基础信息
UPDATE `core_config_data` SET `value`='0' WHERE `path`='general/region/display_all';
UPDATE `core_config_data` SET `value`='http://aototech.sunpop.cn/' WHERE `path`='web/unsecure/base_url';
UPDATE `core_config_data` SET `value`='http://aototech.sunpop.cn/' WHERE `path`='web/secure/base_url';
UPDATE `core_config_data` SET `value`='en_US' WHERE `path`='general/locale/code';
UPDATE `core_config_data` SET `value`='Asia/Chongqing' WHERE `path`='general/locale/timezone';

UPDATE `core_config_data` SET `value`='Aototech Online' WHERE `path`='general/store_information/name';
UPDATE `core_config_data` SET `value`='Aototech Online' WHERE `path`='design/header/logo_alt';
UPDATE `core_config_data` SET `value`='Aototech Online' WHERE `path`='design/head/default_title';
UPDATE `core_config_data` SET `value`='Aototech Online' WHERE `path`='general/store_information/name';
UPDATE `core_config_data` SET `value`='Welcome to Aototech' WHERE `path`='design/header/welcome';
UPDATE `core_config_data` SET `value`='&copy; AotoTech.com. All rights reserved.' WHERE `path`='design/footer/copyright';

UPDATE `core_config_data` SET `value`='1' WHERE `path`='admin/security/domain_policy_backend';
UPDATE `core_config_data` SET `value`='1' WHERE `path`='admin/security/domain_policy_frontend';

UPDATE `core_config_data` SET `value`='1' WHERE `path`='web/url/use_store';
UPDATE `core_config_data` SET `value`='1' WHERE `path`='web/seo/use_rewrites';

UPDATE `core_config_data` SET `value`='1' WHERE `path`='catalog/custom_options/use_calendar';

DELETE FROM  `adminnotification_inbox`;

#禁用一些模块
delete from `core_config_data` where path like 'advanced/modules_disable_output%';
INSERT INTO `core_config_data` (`scope`, `scope_id`, `path`, `value`) VALUES
('default', 0, 'advanced/modules_disable_output/Cm_RedisSession', '1'),
('default', 0, 'advanced/modules_disable_output/Mage_AdminNotification', '1'),
('default', 0, 'advanced/modules_disable_output/Mage_Api', '1'),
('default', 0, 'advanced/modules_disable_output/Mage_Api2', '1'),
('default', 0, 'advanced/modules_disable_output/Mage_Authorizenet', '1'),
('default', 0, 'advanced/modules_disable_output/Mage_Bundle', '1'),
('default', 0, 'advanced/modules_disable_output/Mage_Captcha', '1'),
('default', 0, 'advanced/modules_disable_output/Mage_Centinel', '1'),
('default', 0, 'advanced/modules_disable_output/Mage_Dataflow', '1'),
('default', 0, 'advanced/modules_disable_output/Mage_GiftMessage', '1'),
('default', 0, 'advanced/modules_disable_output/Mage_GoogleAnalytics', '1'),
('default', 0, 'advanced/modules_disable_output/Mage_GoogleCheckout', '1'),
('default', 0, 'advanced/modules_disable_output/Mage_ImportExport', '1'),
('default', 0, 'advanced/modules_disable_output/Mage_Newsletter', '1'),
('default', 0, 'advanced/modules_disable_output/Mage_Oauth', '1'),
('default', 0, 'advanced/modules_disable_output/Mage_Paygate', '1'),
('default', 0, 'advanced/modules_disable_output/Mage_Rss', '1'),
('default', 0, 'advanced/modules_disable_output/Mage_Sitemap', '1'),
('default', 0, 'advanced/modules_disable_output/Mage_Tag', '1'),
('default', 0, 'advanced/modules_disable_output/Mage_Usa', '1'),
('default', 0, 'advanced/modules_disable_output/Mage_Weee', '1'),
('default', 0, 'advanced/modules_disable_output/Phoenix_Moneybookers', '1');
