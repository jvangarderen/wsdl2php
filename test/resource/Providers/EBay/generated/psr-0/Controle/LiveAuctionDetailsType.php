<?php

namespace Controle;
/**
 * LiveAuctionDetailsType
 * Describes the live auction-specific details of a lot item.
 */
class LiveAuctionDetailsType {
	/**
	 * @var int | Number that identifies the seller's eBay Live Auctions catalog within which the lot item
	 * will be listed. Use GetLiveAuctionCatalogDetails to determine the seller's available catalog
	 * IDs.
	 */
	public $UserCatalogID;
	/**
	 * @var int | Identifier for an event schedule in the seller's Live Auctions catalog.
	 */
	public $ScheduleID;
	/**
	 * @var string | Lot number defined by the seller. Each lot number must be unique within the schedule. A
	 * lot number can consist of 1-10 alphanumeric characters beginning with a number from 0-9.
	 * If all values are numbers, the highest allowed value is 2147483647.
	 */
	public $LotNumber;
	/**
	 * @var \Controle\AmountType | Highest appraised value for the item. Must be greater than zero and greater than the value
	 * in LowEstimate. (Pass an integer value only, not a double.)
	 */
	public $HighEstimate;
	/**
	 * @var \Controle\AmountType | Lowest appraised value for the item. Must be greater than zero and less than the value
	 * in HighEstimate. (Pass an integer value only, not a double.)
	 */
	public $LowEstimate;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}
