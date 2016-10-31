<?php

namespace Controle;
class StoreSubscriptionType {
    /**
     * @var \Controle\StoreSubscriptionLevelCodeType | Store subscription level.
     */
    public $Level;
    /**
     * @var \Controle\AmountType | Monthly fee for the Store subscription level.
     */
    public $Fee;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param StoreSubscriptionLevelCodeType $val
     * @throws Exception
     */
    public function setLevel($val) {
        
        $this->Level = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setFee($val) {
        
        $this->Fee = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val) {
        
        $this->any = (int)$val;
    }

}

