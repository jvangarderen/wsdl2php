<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * CountryDetailsType
 * Details about a specific country.
 */
class CountryDetailsType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CountryCodeType | Two-letter ISO 3166 country code. In some calls, used with the Location field to indicate
     * the city and country where the item is located. Also applicable as input to AddItem
     * and related calls when you list items to Half.com (specify US). <br> <br> In GetSearchResultsExpress,
     * only returned when ItemDetails is set to Fine.
     */
    public $Country;
    /**
     * @var string | Description of a Want It Now post. Description will not be returned for GetWantItNowSearchResults.
     */
    public $Description;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param CountryCodeType $val
     * @throws Exception
     */
    public function setCountry($val)
    {
        $this->Country = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDescription($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Description');
        }
        $this->Description = (int)$val;
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
