<?php

class Tsymbal_Shipment_Model_Source_Stores
{
    protected $_options;

    public function toOptionArray()
    {
        if (!$this->_options) {
            $this->_options = Mage::getResourceModel('core/store_collection')
                ->load()->toOptionArray();
        }
        return $this->_options;
    }

}