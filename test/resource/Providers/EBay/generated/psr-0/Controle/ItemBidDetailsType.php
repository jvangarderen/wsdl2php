<?php

namespace Controle;

/**
 * ItemBidDetailsType
 * Contains bidding details information of a user on an item.
 */
class ItemBidDetailsType
{
	/**
	 * @var \Controle\ItemIDType | The item ID of the item reported for infringment.
	 */
	public $itemid;
	/**
	 * @var string | ID of the category in which the Want It Now post is listed.
	 */
	public $categoryid;
	/**
	 * @var int | Number of bids placed so far against the item. Only applicable to competitive-bidding listings
	 * (Chinese and Dutch auctions).
	 */
	public $bidcount;
	/**
	 * @var \Controle\UserIDType | The eBay ID of the seller who listed the item. <br><br> Starting Jan 2007, when a bidder's
	 * user info is made anonymous, this tag will be returned with the anonymous value "Seller
	 * X", where X indicates where the seller falls in the sequence of sellers that the user has
	 * purchased items from. For example, if the seller is the third seller that the user has
	 * purchased items from, the value "Seller 3" is returned.
	 */
	public $sellerid;
	/**
	 * @var dateTime | The time at which the user placed the last bid on the item.
	 */
	public $lastbidtime;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param ItemIDType $val
	 * @throws Exception
	 */
	public function setItemID($val)
	{
        $this->itemid = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCategoryID($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CategoryID');
        }
        $this->categoryid = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setBidCount($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->bidcount = (int)$val;
	}

	/**
	 * @param UserIDType $val
	 * @throws Exception
	 */
	public function setSellerID($val)
	{
        $this->sellerid = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setLastBidTime($val)
	{
        $this->lastbidtime = (int)$val;
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
