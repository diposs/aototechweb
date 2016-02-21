<?php
//安装true，生成属性
require_once('app/Mage.php');
Mage::app()->setCurrentStore(Mage::getModel('core/store')->load(Mage_Core_Model_App::ADMIN_STORE_ID));
$installer = new Mage_Sales_Model_Mysql4_Setup; //Mage_Eav_Model_Entity_Setup,Mage_Catalog_Model_Resource_Setup,

$itemno  = array(
        'type'              => 'varchar',//varchar,int,decimal,text,datetime
        'backend'           => '',
        'frontend'          => '',
        'label'             => 'Item No.',
        'input'             => 'text', //text,textarea,date,boolean,multiselect,select,price,media_image,weee
        'class'             => '',
    	'source'            => '',
        'default'           => '',
	    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
	    'visible'           => true,
	    'required'          => false,
	    'user_defined'      => true,
	    'searchable'        => true,
	    'visible_in_advanced_search' => true,
	    'filterable'        => false,
	    'comparable'        => false,
	    'visible_on_front'  => true,
        'used_in_product_listing' => true,
	    'unique'            => false,
        'apply_to'          => '',
        'is_configurable'   => false
);

$manufacturer  = array(
        'type'              => 'varchar',//varchar,int,decimal,text,datetime
        'backend'           => '',
        'frontend'          => '',
        'label'             => 'Manufacturer',
        'input'             => 'text', //text,textarea,date,boolean,multiselect,select,price,media_image,weee
        'class'             => '',
    	'source'            => '',
        'default'           => '',
	    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
	    'visible'           => true,
	    'required'          => false,
	    'user_defined'      => true,
	    'searchable'        => false,
	    'visible_in_advanced_search' => false,
	    'filterable'        => false,
	    'comparable'        => false,
	    'visible_on_front'  => true,
        'used_in_product_listing' => true,
	    'unique'            => false,
        'apply_to'          => '',
        'is_configurable'   => false
);

$package  = array(
        'type'              => 'varchar',//varchar,int,decimal,text,datetime
        'backend'           => '',
        'frontend'          => '',
        'label'             => 'Package',
        'input'             => 'text', //text,textarea,date,boolean,multiselect,select,price,media_image,weee
        'class'             => '',
    	'source'            => '',
        'default'           => '',
	    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
	    'visible'           => true,
	    'required'          => false,
	    'user_defined'      => true,
	    'searchable'        => false,
	    'visible_in_advanced_search' => false,
	    'filterable'        => false,
	    'comparable'        => false,
	    'visible_on_front'  => true,
        'used_in_product_listing' => true,
	    'unique'            => false,
        'apply_to'          => '',
        'is_configurable'   => false
);

//先清理可能存在的属性
//$installer->removeAttribute('catalog_product', 'itemno');
//$installer->removeAttribute('catalog_product', 'manufacturer');
//$installer->removeAttribute('catalog_product', 'package');
//增加属性
$installer->addAttribute('catalog_product', 'itemno',$itemno);
$installer->addAttribute('catalog_product', 'manufacturer',$manufacturer);
$installer->addAttribute('catalog_product', 'package',$package);
//加到相关组
$installer->addAttributeToSet('catalog_product', 'Default', 'General', 'itemno');
$installer->addAttributeToSet('catalog_product', 'Default', 'General', 'manufacturer');
$installer->addAttributeToSet('catalog_product', 'Default', 'General', 'package');

$installer->endSetup();
echo 'end setup1';
?>
