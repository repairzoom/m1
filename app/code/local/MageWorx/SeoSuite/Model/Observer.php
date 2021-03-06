<?php
/**
 * MageWorx
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MageWorx EULA that is bundled with
 * this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.mageworx.com/LICENSE-1.0.html
 *
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@mageworx.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade the extension
 * to newer versions in the future. If you wish to customize the extension
 * for your needs please refer to http://www.mageworx.com/ for more information
 * or send an email to sales@mageworx.com
 *
 * @category   MageWorx
 * @package    MageWorx_SeoSuite
 * @copyright  Copyright (c) 2010 MageWorx (http://www.mageworx.com/)
 * @license    http://www.mageworx.com/LICENSE-1.0.html
 */

/**
 * SEO Suite extension
 *
 * @category   MageWorx
 * @package    MageWorx_SeoSuite
 * @author     MageWorx Dev Team <dev@mageworx.com>
 */

class MageWorx_SeoSuite_Model_Observer
{
    public function setMetaDescription(Varien_Event_Observer $observer)
    {
        $shortDescription = trim($observer->getEvent()->getProduct()->getShortDescription());
        if (Mage::getStoreConfigFlag('mageworx_seo/seosuite/product_meta_description') && !empty($shortDescription)) {
            Mage::getSingleton('catalog/session')->setData('seosuite_meta_description', strip_tags($shortDescription));
        }
    }

    public function registerProductId(Varien_Event_Observer $observer)
    {
        $product = $observer->getEvent()->getProduct();
        Mage::unregister('seosuite_product_id');
        Mage::register('seosuite_product_id', $product->getId());
    }
    public function redirectHome(Varien_Event_Observer $observer)
    {
        $front = $observer->getEvent()->getFront();
        $origUri = $front->getRequest()->getRequestUri();
        $origUri = explode('?', $origUri, 2);
        $uri = preg_replace('~(?:index\.php/+home/*|index\.php/*|home/*)$~i', '', $origUri[0]);
        if (strpos($origUri[0], $uri) !== false){
            return;
        }
        $uri = rtrim($uri, '/') . '/';
        $uri .=  (isset($origUri[1]) ? '?' . $origUri[1] : '');
        $front->getResponse()
            ->setRedirect($uri)
            ->setHttpResponseCode(301)
            ->sendResponse();
        exit;
    }
}