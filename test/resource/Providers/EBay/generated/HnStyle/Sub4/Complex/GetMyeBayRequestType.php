<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetMyeBayRequestType
 * Retrieves data for the requesting user's My eBay page. This data includes a list of items
 * the user is watching and a list of items the user has bid on. You must specify at least
 * one field in the request to receive data in the response. In addition, you must include
 * at least one sort field - BiddingSort, LostSort, WatchSort, or WonSort.
 */
class GetMyeBayRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemSortTypeCodeType | Specifies how the items in the active list (the items the user has bid on) are sorted
     * in the result set. The items may be sorted by item ID, price, title, bid count, and
     * listing end time. See the code list ItemSortTypeCodeType for valid input values.
     */
    public $biddingsort;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemSortTypeCodeType | Specifies how the items in the lost list (items the user has bid on but has not won)
     * are sorted in the result set. The items may be sorted by item ID, price, title, bid
     * count, and listing end time. See the code list ItemSortTypeCodeType for valid input
     * values.
     */
    public $lostsort;
    /**
     * @var int | Specifies maximum number of items to display in each of the lists. Recommended value
     * is 5. If not specified, all possible items for each list are returned. One maximum is
     * specified and applies to all of the lists in the result set.
     */
    public $maxitemsperlist;
    /**
     * @var int | Specifies the number of days prior to the current time (based on item end time) to retrieve
     * items. Applies only to the items won and items lost lists. Default value is 2. Maximum
     * value is 30.
     */
    public $maxitemageindays;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemSortTypeCodeType | Specifies how the items in the watch list (the items the user is watching) are sorted
     * in the result set. The valid values of ItemSortTypeCodeType are ItemID, ItemIDDescending,
     * Price, PriceDescending, BidCount, BidCountDescending, SellerUserID, SellerUserIDDescending, TimeLeft,
     * and TimeLeftDescending.
     */
    public $watchsort;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemSortTypeCodeType | Specifies how the items in the won list (the items the user has won) are sorted in the
     * result set. The items may be sorted by item ID, price, title, bid count, and listing
     * end time. See the code list ItemSortTypeCodeType for valid input values.
     */
    public $wonsort;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MyeBaySelectionType | Contains a list of the user's favorite searches. Only returned if items exist that meet
     * the request criteria.
     */
    public $favoritesearches;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MyeBaySelectionType | Contains a list of the user's favorite sellers. Only returned if items exist that meet
     * the request criteria.
     */
    public $favoritesellers;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MyeBaySelectionType | Contains a list of the user's My eBay Second Chance Offers.
     */
    public $secondchanceoffers;
    /**
     * @param ItemSortTypeCodeType $val
     * @throws Exception
     */
    public function setBiddingSort($val)
    {
        $this->biddingsort = (int)$val;
    }

    /**
     * @param ItemSortTypeCodeType $val
     * @throws Exception
     */
    public function setLostSort($val)
    {
        $this->lostsort = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setMaxItemsPerList($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->maxitemsperlist = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setMaxItemAgeInDays($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->maxitemageindays = (int)$val;
    }

    /**
     * @param ItemSortTypeCodeType $val
     * @throws Exception
     */
    public function setWatchSort($val)
    {
        $this->watchsort = (int)$val;
    }

    /**
     * @param ItemSortTypeCodeType $val
     * @throws Exception
     */
    public function setWonSort($val)
    {
        $this->wonsort = (int)$val;
    }

    /**
     * @param MyeBaySelectionType $val
     * @throws Exception
     */
    public function setFavoriteSearches($val)
    {
        $this->favoritesearches = (int)$val;
    }

    /**
     * @param MyeBaySelectionType $val
     * @throws Exception
     */
    public function setFavoriteSellers($val)
    {
        $this->favoritesellers = (int)$val;
    }

    /**
     * @param MyeBaySelectionType $val
     * @throws Exception
     */
    public function setSecondChanceOffers($val)
    {
        $this->secondchanceoffers = (int)$val;
    }
}