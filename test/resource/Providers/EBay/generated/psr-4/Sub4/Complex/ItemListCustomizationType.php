<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ItemListCustomizationType
 * Defines how a list of items should be returned.
 */
class ItemListCustomizationType
{
    /**
     * @var boolean | Whether to include information about this type of reminder in the response. When true,
     * the container is returned with default input parameters.
     */
    public $include;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ListingTypeCodeType | The listing format (fixed price, auction, etc) for the automatic item search criteria.
     */
    public $listingtype;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemSortTypeCodeType | Specifies the result sort order. Default is Ascending.
     */
    public $sort;
    /**
     * @var int | The length of time the reminder has existed in the user's My eBay account, in days.
     * Valid values are 1-60.
     */
    public $durationindays;
    /**
     * @var boolean | Specifies whether to include Item.PrivateNotes and Item.eBayNotes in the response. Valid
     * for WatchList, BidList, WonList, LostList, ScheduledList, ActiveList, SoldList, and
     * UnsoldList.
     */
    public $includenotes;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginationType | Pagination instruction that specifies the virtual page of data to return
     * per search request. Default page number is 0 (the first page).            Specify a
     * page number of 0 or a positive value lower            than the approximate number of
     * pages available.
     */
    public $pagination;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setInclude($val)
    {
        $this->include = (int)$val;
    }

    /**
     * @param ListingTypeCodeType $val
     * @throws Exception
     */
    public function setListingType($val)
    {
        $this->listingtype = (int)$val;
    }

    /**
     * @param ItemSortTypeCodeType $val
     * @throws Exception
     */
    public function setSort($val)
    {
        $this->sort = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setDurationInDays($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->durationindays = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setIncludeNotes($val)
    {
        $this->includenotes = (int)$val;
    }

    /**
     * @param PaginationType $val
     * @throws Exception
     */
    public function setPagination($val)
    {
        $this->pagination = (int)$val;
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