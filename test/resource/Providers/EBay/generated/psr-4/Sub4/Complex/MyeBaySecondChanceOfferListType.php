<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * MyeBaySecondChanceOfferListType
 * A list of possible My eBay Second Chance Offers.
 */
class MyeBaySecondChanceOfferListType
{
    /**
     * @var int | The total number of My eBay Second Chance Offers available.
     */
    public $totalavailable;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemType | A Second Chance Offer item.
     */
    public $secondchanceoffer;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setTotalAvailable($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->totalavailable = (int)$val;
    }

    /**
     * @param ItemType $val
     * @throws Exception
     */
    public function setSecondChanceOffer($val)
    {
        $this->secondchanceoffer = (int)$val;
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