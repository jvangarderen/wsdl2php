<?php

namespace Controle\sub1\sub2;

/**
 * FeesType
 * Identifies a set of one or more fees that a member pays to eBay (or          an eBay company).
 * Instances of this type can hold one or more fees.
 */
class FeesType
{
	/**
	 * @var \Controle\sub1\sub2\FeeType | Monthly fee for the Store subscription level.
	 */
	public $fee;
	/**
	 * @param FeeType $val
	 * @throws Exception
	 */
	public function setFee($val)
	{
        $this->fee = (int)$val;
	}
}
