<?php


require_once('app/Mage.php');

Mage::app()->setCurrentStore(Mage::getModel('core/store')->load(Mage_Core_Model_App::ADMIN_STORE_ID));
$installer = new Mage_Sales_Model_Mysql4_Setup; //Mage_Eav_Model_Entity_Setup,Mage_Catalog_Model_Resource_Setup,

$installer->startSetup();


if(!$installer->getAttribute('catalog_category', 'sw_product_staticblock_tab_6', 'attribute_id')){
	$installer->addAttribute('catalog_category', 'sw_product_staticblock_tab_6', array(
		'group'             => 'Product Custom Tabs',
		'label'             => 'CMS Block Tab #6',
		'note'              => "",
		'type'              => 'varchar',
		'input'             => 'select',
		'source'            => 'porto/category_attribute_source_tab_mode',
		'visible'           => true,
		'required'          => false,
		'backend'           => '',
		'frontend'          => '',
		'searchable'        => false,
		'filterable'        => false,
		'comparable'        => false,
		'user_defined'      => true,
		'visible_on_front'  => true,
		'wysiwyg_enabled'   => false,
		'is_html_allowed_on_front'    => false,
		'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
	));
}
if(!$installer->getAttribute('catalog_category', 'sw_product_staticblock_tab_7', 'attribute_id')){
	$installer->addAttribute('catalog_category', 'sw_product_staticblock_tab_7', array(
		'group'             => 'Product Custom Tabs',
		'label'             => 'CMS Block Tab #7',
		'note'              => "",
		'type'              => 'varchar',
		'input'             => 'select',
		'source'            => 'porto/category_attribute_source_tab_mode',
		'visible'           => true,
		'required'          => false,
		'backend'           => '',
		'frontend'          => '',
		'searchable'        => false,
		'filterable'        => false,
		'comparable'        => false,
		'user_defined'      => true,
		'visible_on_front'  => true,
		'wysiwyg_enabled'   => false,
		'is_html_allowed_on_front'    => false,
		'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
	));
}
if(!$installer->getAttribute('catalog_category', 'sw_product_staticblock_tab_8', 'attribute_id')){
	$installer->addAttribute('catalog_category', 'sw_product_staticblock_tab_8', array(
		'group'             => 'Product Custom Tabs',
		'label'             => 'CMS Block Tab #8',
		'note'              => "",
		'type'              => 'varchar',
		'input'             => 'select',
		'source'            => 'porto/category_attribute_source_tab_mode',
		'visible'           => true,
		'required'          => false,
		'backend'           => '',
		'frontend'          => '',
		'searchable'        => false,
		'filterable'        => false,
		'comparable'        => false,
		'user_defined'      => true,
		'visible_on_front'  => true,
		'wysiwyg_enabled'   => false,
		'is_html_allowed_on_front'    => false,
		'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
	));
}
if(!$installer->getAttribute('catalog_category', 'sw_product_staticblock_tab_9', 'attribute_id')){
	$installer->addAttribute('catalog_category', 'sw_product_staticblock_tab_9', array(
		'group'             => 'Product Custom Tabs',
		'label'             => 'CMS Block Tab #9',
		'note'              => "",
		'type'              => 'varchar',
		'input'             => 'select',
		'source'            => 'porto/category_attribute_source_tab_mode',
		'visible'           => true,
		'required'          => false,
		'backend'           => '',
		'frontend'          => '',
		'searchable'        => false,
		'filterable'        => false,
		'comparable'        => false,
		'user_defined'      => true,
		'visible_on_front'  => true,
		'wysiwyg_enabled'   => false,
		'is_html_allowed_on_front'    => false,
		'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
	));
}
$installer->endSetup();

