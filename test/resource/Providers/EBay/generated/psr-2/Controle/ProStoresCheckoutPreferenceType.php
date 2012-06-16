<?php

namespace Controle;
/**
 * ProStoresCheckoutPreferenceType
 * Details about ProStores and checkout preferences.
 */
class ProStoresCheckoutPreferenceType {
    /**
     * @var boolean | Indicates whether third party checkout is to be redirected to the ProStores application
     * specified via My eBay preferences.
     */
    public $CheckoutRedirectProStores;
    /**
     * @var \Controle\ProStoresDetailsType | Details about the store.
     */
    public $ProStoresDetails;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setCheckoutRedirectProStores($val) {
        
        $this->CheckoutRedirectProStores = (int)$val;
    }

    /**
     * @param ProStoresDetailsType $val
     * @throws Exception
     */
    public function setProStoresDetails($val) {
        
        $this->ProStoresDetails = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val) {
        
        $this->any = (int)$val;
    }

}

