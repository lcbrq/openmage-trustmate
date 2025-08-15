<?php

/**
 * @author Tomasz Gregorczyk <tomasz@silpion.com.pl>
 */
class LCB_TrustMate_Block_Checkout_Onepage_Success extends Mage_Checkout_Block_Onepage_Success
{
    /**
     * @return string
     */
    public function getCompanyUuid()
    {
        return (string) Mage::getStoreConfig('lcb_trustmate/settings/company_id');
    }

    /**
     * @return Mage_Sales_Model_Order
     */
    public function getOrder()
    {
        return Mage::getModel('sales/order')->load($this->getOrderId(), 'increment_id');
    }
}
