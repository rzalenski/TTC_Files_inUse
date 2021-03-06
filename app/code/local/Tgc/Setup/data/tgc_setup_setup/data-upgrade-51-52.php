<?php
/**
 * Template Update for Mobile
 *
 * @author      Guidance Magento Team <magento@guidance.com>
 * @category    Guidance
 * @package     Setup
 * @copyright   Copyright (c) 2013 Guidance Solutions (http://www.guidance.com)
 */
/* @var $installer Tgc_Setup_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

$installer->setConfigData('design/theme/template_ua_regexp', 'a:1:{s:18:"_1396521403140_140";a:2:{s:6:"regexp";s:26:"iPhone|iPod|mobile|Android";s:5:"value";s:7:"tgc_mob";}}');

$installer->endSetup();