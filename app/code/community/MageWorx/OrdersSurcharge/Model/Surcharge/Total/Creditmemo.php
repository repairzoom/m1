<?php
/**
 * MageWorx
 * MageWorx Order Surcharge Extension
 *
 * @category   MageWorx
 * @package    MageWorx_OrdersSurcharge
 * @copyright  Copyright (c) 2016 MageWorx (http://www.mageworx.com/)
 */

class MageWorx_OrdersSurcharge_Model_Surcharge_Total_CreditMemo extends Mage_Sales_Model_Order_Creditmemo_Total_Abstract
{
    /**
     * @param Mage_Sales_Model_Order_Creditmemo $creditmemo
     * @return $this
     */
    public function collect(Mage_Sales_Model_Order_Creditmemo $creditmemo) {

        if ($creditmemo->getBaseSurchargeAmount()) {
            $grandTotal = $creditmemo->getGrandTotal() + $creditmemo->getSurchargeAmount();
            $creditmemo->setGrandTotal($grandTotal);
            $baseGrandTotal = $creditmemo->getBaseGrandTotal() + $creditmemo->getBaseSurchargeAmount();
            $creditmemo->setBaseGrandTotal($baseGrandTotal);
        }

        return $this;
    }
}