<?php

class Tsymbal_Shipment_Block_Stores extends Mage_Core_Block_Template
{
    public function getStores()
    {
        return [
          'store1',
          'store2',
          'store3',
          'store4',
          'store5'
        ];
    }
}