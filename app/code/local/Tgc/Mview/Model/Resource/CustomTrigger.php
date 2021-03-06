<?php
/**
 * Description
 *
 * @author      Guidance Magento Team <magento@guidance.com>
 * @category    Tgc
 * @package     Tgc_Mview
 * @copyright   Copyright (c) 2013 Guidance Solutions (http://www.guidance.com)
 */
class Tgc_Mview_Model_Resource_CustomTrigger extends Mage_Core_Model_Resource_Db_Abstract
{
    /**
     * Resource initialization
     */
    protected function _construct()
    {
        $this->_init('tgc_mview/custom_trigger', 'id');
    }
}
