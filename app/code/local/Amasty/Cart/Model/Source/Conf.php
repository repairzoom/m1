<?php
/**
* @author Amasty Team
* @copyright Copyright (c) 2013 Amasty (http://www.amasty.com)
* @package Amasty_Cart
*/
class Amasty_Cart_Model_Source_Conf extends Varien_Object
{
    public function toOptionArray()
    {
        $options = array();
        $options[] = array(
                'value' => '0',
                'label' => Mage::helper('amcart')->__('From Configurable')
        );
        $options[] = array(
                'value' => '1',
                'label' => Mage::helper('amcart')->__('From Simple')
        );
        return $options;
    }
}