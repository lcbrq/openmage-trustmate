<?php

/**
 * @author Tomasz Gregorczyk <tomasz@silpion.com.pl>
 */
class LCB_TrustMate_Block_Catalog_Product_View extends Mage_Core_Block_Template
{
    /**
     * @return Mage_Catalog_Model_Product|null
     */
    public function getProduct()
    {
        return Mage::registry('current_product');
    }

    /**
     * @return string
     */
    public function getWidgetId()
    {
        return (string) Mage::getStoreConfig('lcb_trustmate/settings/company_id');
    }
}
