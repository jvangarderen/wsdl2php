<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SiteLocationType
 * Contains the data that defines a site-based filter (used when            searching for items
 * and filtering the search result set).
 */
class SiteLocationType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SiteIDFilterCodeType |      */
    public $siteid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param SiteIDFilterCodeType $val
     * @throws Exception
     */
    public function setSiteID($val)
    {
        $this->siteid = (int)$val;
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