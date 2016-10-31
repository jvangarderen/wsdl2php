<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ExpressHistogramProductType
 * Details about an Express product type and matching item and catalog product counts in that
 * product type, if any.
 */
class ExpressHistogramProductType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ExpressHistogramDomainDetailsType | Identifies an Express product type and provides item and eBay catalog product counts
     * in that product type. Only returned if a product type matched the request.<br> <br> A
     * product type domain can stand alone, or it can be grouped with other product types into
     * an aisle or a department.
     */
    public $domaindetails;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param ExpressHistogramDomainDetailsType $val
     * @throws Exception
     */
    public function setDomainDetails($val)
    {
        $this->domaindetails = (int)$val;
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