<?php
/**
 * @author      Guidance Magento Team <magento@guidance.com>
 * @category
 * @package
 * @copyright   Copyright (c) 2014 Guidance Solutions (http://www.guidance.com)
 */
class Tgc_Professors_Block_Adminhtml_Professor extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_blockGroup = 'profs';
        $this->_controller = 'adminhtml_professor';
        $this->_headerText = 'Professors';

        parent::__construct();
    }
}