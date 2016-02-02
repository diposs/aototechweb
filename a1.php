<?php

require_once('app/Mage.php');

Mage::app()->setCurrentStore(Mage::getModel('core/store')->load(Mage_Core_Model_App::ADMIN_STORE_ID));
$installer = new Mage_Sales_Model_Mysql4_Setup; //Mage_Eav_Model_Entity_Setup,Mage_Catalog_Model_Resource_Setup,

$installer->startSetup();

$installer->addAttribute('catalog_product', 'featured', array(
        'type'              => 'int',
        'backend_type'      => 'int',
        'backend'           => '',
        'frontend'          => '',
        'label'             => 'Is Featured',
        'input'             => 'boolean',
        'frontend_class'    => '',
        'source'            => 'eav/entity_attribute_source_boolean',
        'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'visible'           => false,
        'required'          => false,
        'user_defined'      => true,
        'default'           => '',
        'searchable'        => false,
        'filterable'        => false,
        'comparable'        => false,
        'visible_on_front'  => false,
        'unique'            => false,
        'apply_to'          => '',
        'is_configurable'   => false
));

$installer->addAttributeToSet('catalog_product', 'Default', 'General', 'featured');

$installer->endSetup();