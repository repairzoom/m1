<?php

class Magestore_Giftvoucher_Model_Mysql4_Credithistory_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct(){
        parent::_construct();
        $this->_init('giftvoucher/credithistory');
    }
} 

?>