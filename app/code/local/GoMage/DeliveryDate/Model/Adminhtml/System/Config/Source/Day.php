<?php
 /**
 * GoMage LightCheckout Extension
 *
 * @category     Extension
 * @copyright    Copyright (c) 2010-2018 GoMage (https://www.gomage.com)
 * @author       GoMage
 * @license      https://www.gomage.com/license-agreement/  Single domain license
 * @terms of use https://www.gomage.com/terms-of-use
 * @version      Release: 5.9.4
 * @since        Class available since Release 2.5
 */
	
class GoMage_DeliveryDate_Model_Adminhtml_System_Config_Source_Day{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
    	$data = array();
    	for ($i=1; $i<=31; $i++){
    		$data[] = array('value' => $i, 'label'=>$i);
    	}
        return $data; 
    }    
}