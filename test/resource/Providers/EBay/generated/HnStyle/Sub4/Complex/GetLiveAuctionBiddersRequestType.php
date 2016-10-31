<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetLiveAuctionBiddersRequestType
 * Includes the list of bidders for the requested catalog.
 */
class GetLiveAuctionBiddersRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var int | Number that identifies the seller's eBay Live Auctions catalog within which the lot
     * item will be listed. Use GetLiveAuctionCatalogDetails to determine the seller's available
     * catalog IDs.
     */
    public $usercatalogid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BidderStatusCodeType | Indicates whether the user is "approved","denied", or "pending" or a combination of
     * these.
     */
    public $bidderstatus;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginationType | Pagination instruction that specifies the virtual page of data to return
     * per search request. Default page number is 0 (the first page).            Specify a
     * page number of 0 or a positive value lower            than the approximate number of
     * pages available.
     */
    public $pagination;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setUserCatalogID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->usercatalogid = (int)$val;
    }

    /**
     * @param BidderStatusCodeType $val
     * @throws Exception
     */
    public function setBidderStatus($val)
    {
        $this->bidderstatus = (int)$val;
    }

    /**
     * @param PaginationType $val
     * @throws Exception
     */
    public function setPagination($val)
    {
        $this->pagination = (int)$val;
    }
}