<?php

class Tsymbal_Shipment_Block_Stores extends Mage_Core_Block_Template
{
    public function getStores()
{
    return unserialize(Mage::getStoreConfig('carriers/shipment/add_store'));
}
}