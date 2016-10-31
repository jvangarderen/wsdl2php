<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * VerifyAddSecondChanceItemResponseType
 * VerifyAddSecondChanceItem request to emulate creation of a new Second Chance Offer for an
 * item to one of that item's bidders.
 */
class VerifyAddSecondChanceItemResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\FeesType | (Not used.)
     */
    public $fees;
    /**
     * @var dateTime | Date and time (in GMT) that a Want It Now post was added.
     */
    public $starttime;
    /**
     * @var dateTime | Time stamp (in GMT) when the listing is scheduled to end (calculated based on the values
     * of StartTime and ListingDuration) or the actual end time if the item has ended.
     */
    public $endtime;
    /**
     * @param FeesType $val
     * @throws Exception
     */
    public function setFees($val)
    {
        $this->fees = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setStartTime($val)
    {
        $this->starttime = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setEndTime($val)
    {
        $this->endtime = (int)$val;
    }
}