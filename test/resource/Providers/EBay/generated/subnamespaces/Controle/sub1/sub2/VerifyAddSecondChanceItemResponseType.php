<?php

namespace Controle\sub1\sub2;

/**
 * VerifyAddSecondChanceItemResponseType
 * VerifyAddSecondChanceItem request to emulate creation of a new Second Chance Offer for an
 * item to one of that item's bidders.
 */
class VerifyAddSecondChanceItemResponseType extends
 \Controle\sub1\sub2\AbstractResponseType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\FeesType | (Not used.)
	 */
	public $Fees;
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
