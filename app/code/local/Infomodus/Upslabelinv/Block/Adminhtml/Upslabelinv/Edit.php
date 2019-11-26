<?php
/*
 * Author Rudyuk Vitalij Anatolievich
 * Email rvansp@gmail.com
 * Blog www.cervic.info
 */
?>
<?php

class Infomodus_Upslabelinv_Block_Adminhtml_Upslabelinv_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'upslabelinv';
        $this->_controller = 'adminhtml_upslabelinv';
        
        $this->_updateButton('save', 'label', Mage::helper('upslabelinv')->__('Save Item'));
        //$this->_updateButton('delete', 'label', Mage::helper('upslabel')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('upslabelinv_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'upslabelinv_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'upslabelinv_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('upslabelinv_data') && Mage::registry('upslabelinv_data')->getId() ) {
            return Mage::helper('upslabelinv')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('upslabelinv_data')->getTitle()));
        } else {
            //return Mage::helper('upslabelinv')->__('Add Item');
        }
    }
}