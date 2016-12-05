<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SoApStruct
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\anyType
     */
    public $varString;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\anyType
     */
    public $varInt;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\anyType
     */
    public $varFloat;
    // @codingStandardsIgnoreEnd

    /**
     * @param anyType $val
     * @throws Exception
     */
    public function setVarString($val)
    {
        $this->varString = (anyType)$val;
    }

    /**
     * @param anyType $val
     * @throws Exception
     */
    public function setVarInt($val)
    {
        $this->varInt = (anyType)$val;
    }

    /**
     * @param anyType $val
     * @throws Exception
     */
    public function setVarFloat($val)
    {
        $this->varFloat = (anyType)$val;
    }
}
