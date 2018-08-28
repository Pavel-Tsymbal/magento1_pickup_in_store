<?php

class Tsymbal_Shipment_Model_Carrier extends Mage_Shipping_Model_Carrier_Abstract implements Mage_Shipping_Model_Carrier_Interface
{
    protected $_code = 'shipment';

    protected $_formBlockType = 'shipment/stores';
    protected $_infoBlockType = 'shipment/info';

    public function collectRates(Mage_Shipping_Model_Rate_Request $request)
    {
        /** @var Mage_Shipping_Model_Rate_Result $result */
        $result = Mage::getModel('shipping/rate_result');
        $rate = Mage::getModel('shipping/rate_result_method');

        $rate->setCarrier($this->_code);
        $rate->setCarrierTitle($this->getConfigData('title'));
        $rate->setMethod('pickup');
        $rate->setMethodTitle($this->getConfigData('name'));
        $result->append($rate);

        return $result;
    }

    public function getAllowedMethods()
    {
        return array(
            'pickup' => $this->getConfigData('name')
        );
    }

    /**
     * Retrieve block type for method form generation
     *
     * @return string
     */
    public function getFormBlock()
    {
        return $this->_formBlockType;
    }


}
