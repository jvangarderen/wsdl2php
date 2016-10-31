<?php

namespace Controle\sub1\sub2;

/**
 * SellingSummaryType
 * Contains summary information about the items the user is selling.
 */
class SellingSummaryType
{
	/**
	 * @var int | The number of currently active auctions that will sell. That is, there is at least one
	 * bidder, and any reserve price has been met. Equivalent to the "Will Sell" value in My eBay.
	 */
	public $activeauctioncount;
	/**
	 * @var int | The total number of currently active auctions for a given seller. Note that this does not
	 * include listings that are FixedPriceItem or StoresFixedPrice. Equivalent to the "Auction
	 * Quantity" value in My eBay.
	 */
	public $auctionsellingcount;
	/**
	 * @var int | The total number of bids made on the user's active listings.
	 */
	public $auctionbidcount;
	/**
	 * @var \Controle\sub1\sub2\AmountType | The total value of all items the user has for sale in all listings.
	 */
	public $totalauctionsellingvalue;
	/**
	 * @var int | The total number of items the user has sold.
	 */
	public $totalsoldcount;
	/**
	 * @var \Controle\sub1\sub2\AmountType | The total monetary value of the items the user has sold.
	 */
	public $totalsoldvalue;
	/**
	 * @var int | The average duration, in days, of all items sold.
	 */
	public $solddurationindays;
	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setActiveAuctionCount($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->activeauctioncount = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setAuctionSellingCount($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->auctionsellingcount = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setAuctionBidCount($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->auctionbidcount = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setTotalAuctionSellingValue($val)
	{
        $this->totalauctionsellingvalue = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setTotalSoldCount($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->totalsoldcount = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setTotalSoldValue($val)
	{
        $this->totalsoldvalue = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setSoldDurationInDays($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->solddurationindays = (int)$val;
	}
}
