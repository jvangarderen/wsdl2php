<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SearchLocationType
 * One of the data filters used when searching for items using GetSearchResults. Allows filtering
 * based on the location of the item or its availability relative to an eBay site. Or allows
 * for filtering based on regional listing.
 */
class SearchLocationType
{
    /**
     * @var string | Specifies a region ID. The item must have been listed for the specified region to be
     * returned in the search result set.
     */
    public $regionid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SiteLocationType | Specifies a filter based on a particular eBay site and the             item's relation
     * to            that site (items listed with a site's currency, items located
     *     in the country            for the site, items available to the country for the site,
     * and             items listed            on the specified site).
     */
    public $sitelocation;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setRegionID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for RegionID');
        }
        $this->regionid = (int)$val;
    }

    /**
     * @param SiteLocationType $val
     * @throws Exception
     */
    public function setSiteLocation($val)
    {
        $this->sitelocation = (int)$val;
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