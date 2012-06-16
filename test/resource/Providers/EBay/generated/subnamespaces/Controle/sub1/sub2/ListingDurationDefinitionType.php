<?php

namespace Controle\sub1\sub2;
/**
 * ListingDurationDefinitionType
 * A container node for a set of durations that apply to a certain listing type.
 */
class ListingDurationDefinitionType {
	/**
	 * @var \Controle\sub1\sub2\token | Specifies the length of time an auction can be open, in days. The allowed durations vary
	 * according to the type of listing. The value GTC means Good Til Canceled.
	 */
	public $Duration;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @var int
	 */
	public $durationSetID;
}
