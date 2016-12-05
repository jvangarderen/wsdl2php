<?php

namespace Controle;

/**
 * AddSecondChanceItemResponseType
 * AddSecondChanceItem response for a new Second Chance Offer listing.
 */
class AddSecondChanceItemResponseType extends
 \Controle\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\FeesType | (Not used.)
     */
    public $Fees;
    /**
     * @var \Controle\ItemIDType | The item ID of the item reported for infringment.
     */
    public $ItemID;
    /**
     * @var dateTime | Date and time (in GMT) that a Want It Now post was added.
     */
    public $StartTime;
    /**
     * @var dateTime | Time stamp (in GMT) when the listing is scheduled to end (calculated based on the values
     * of StartTime and ListingDuration) or the actual end time if the item has ended.
     */
    public $EndTime;
    // @codingStandardsIgnoreEnd

    /**
     * @param FeesType $val
     * @throws Exception
     */
    public function setFees($val)
    {
        $this->Fees = ()$val;
    }

    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->ItemID = ()$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setStartTime($val)
    {
        $this->StartTime = ()$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setEndTime($val)
    {
        $this->EndTime = ()$val;
    }
}
