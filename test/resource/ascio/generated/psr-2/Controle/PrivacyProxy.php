<?php

namespace Controle;
class PrivacyProxy {
    /**
     * @var \Controle\PrivacyProxyType
     */
    public $Type;
    /**
     * @var boolean
     */
    public $PrivacyAdmin;
    /**
     * @var boolean
     */
    public $PrivacyTech;
    /**
     * @var boolean
     */
    public $PrivacyBilling;
    /**
     * @var \Controle\Extensions
     */
    public $Extensions;
    /**
     * @param PrivacyProxyType $val
     * @throws Exception
     */
    public function setType($val) {
        
        $this->Type = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setPrivacyAdmin($val) {
        
        $this->PrivacyAdmin = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setPrivacyTech($val) {
        
        $this->PrivacyTech = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setPrivacyBilling($val) {
        
        $this->PrivacyBilling = (int)$val;
    }

    /**
     * @param Extensions $val
     * @throws Exception
     */
    public function setExtensions($val) {
        
        $this->Extensions = (int)$val;
    }

}

