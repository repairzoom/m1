<?php
/**
 * aheadWorks Co.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://ecommerce.aheadworks.com/AW-LICENSE.txt
 *
 * =================================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * =================================================================
 * This package designed for Magento community edition
 * aheadWorks does not guarantee correct work of this extension
 * on any other Magento edition except Magento community edition.
 * aheadWorks does not provide extension support in case of
 * incorrect edition usage.
 * =================================================================
 *
 * @category   AW
 * @package    AW_Ajaxcartpro
 * @version    3.1.2
 * @copyright  Copyright (c) 2010-2012 aheadWorks Co. (http://www.aheadworks.com)
 * @license    http://ecommerce.aheadworks.com/AW-LICENSE.txt
 */


class AW_Ajaxcartpro_Model_Renderer_Confirmation_Removeproduct extends Varien_Object
    implements AW_Ajaxcartpro_Model_Renderer_Interface
{
    const BLOCK_NAME = 'aw.ajaxcartpro.confirm.removeproduct';

    public function renderFromLayout($layout)
    {
        $block = $layout->getBlock(self::BLOCK_NAME);
        if (!$block) {
            return null;
        }
        $block = $this->_addDataToBlock($block);
        return $block->toHtml();
    }

    private function _addDataToBlock($block)
    {
        $actionData = $this->getData('action_data');
        if (isset($actionData['removed_product'])) {
            $block->setData('product_id', $actionData['removed_product']);
        }
        return $block;
    }
}