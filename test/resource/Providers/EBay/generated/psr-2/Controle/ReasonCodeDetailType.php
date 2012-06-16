<?php

namespace Controle;
/**
 * ReasonCodeDetailType
 * A container for VeRO reason code details.
 */
class ReasonCodeDetailType {
    /**
     * @var string | The short description of the infringement associated with the reason code ID.
     */
    public $BriefText;
    /**
     * @var string | The long description of the infringement associated with the reason code ID.
     */
    public $DetailedText;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @var long
     */
    public $codeID;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setBriefText($val) {
        if(!is_string($val)) throw new Exception('POJO Proxy need a string for BriefText');
        $this->BriefText = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDetailedText($val) {
        if(!is_string($val)) throw new Exception('POJO Proxy need a string for DetailedText');
        $this->DetailedText = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val) {
        
        $this->any = (int)$val;
    }

    /**
     * @param long $val
     * @throws Exception
     */
    public function setCodeID($val) {
        
        $this->codeID = (int)$val;
    }

}

