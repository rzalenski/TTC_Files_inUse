<?php
/**
 * Magento Enterprise Edition
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Magento Enterprise Edition License
 * that is bundled with this package in the file LICENSE_EE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.magentocommerce.com/license/enterprise-edition
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage_Sales
 * @copyright   Copyright (c) 2013 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://www.magentocommerce.com/license/enterprise-edition
 */

/* @var $installer Mage_Sales_Model_Entity_Setup */
$installer = $this;

$entitiesToAlter = array(
    'quote_address',
    'order_address'
);

$attributes = array(
    'vat_id' => array('type' => Varien_Db_Ddl_Table::TYPE_TEXT),
    'vat_is_valid' => array('type' => Varien_Db_Ddl_Table::TYPE_SMALLINT),
    'vat_request_id' => array('type' => Varien_Db_Ddl_Table::TYPE_TEXT),
    'vat_request_date' => array('type' => Varien_Db_Ddl_Table::TYPE_TEXT),
    'vat_request_success' => array('type' => Varien_Db_Ddl_Table::TYPE_SMALLINT)
);

foreach ($entitiesToAlter as $entityName) {
    foreach ($attributes as $attributeCode => $attributeParams) {
        $installer->addAttribute($entityName, $attributeCode, $attributeParams);
    }
}
