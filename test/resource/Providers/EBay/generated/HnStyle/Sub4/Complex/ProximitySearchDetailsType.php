<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ProximitySearchDetailsType
 * Contains information for use in proximity search.
 */
class ProximitySearchDetailsType
{
    /**
     * @var string | The postal code to use as the basis for the proximity search.
     */
    public $postalcode;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setPostalCode($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for PostalCode');
        }
        $this->postalcode = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}