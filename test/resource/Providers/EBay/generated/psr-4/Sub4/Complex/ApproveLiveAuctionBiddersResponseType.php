<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ApproveLiveAuctionBiddersResponseType
 * Provides the Live Auction sellers with the ability to approve, decline, and set the bidding
 * limit of the bidders that have signed up for a catalog.
 */
class ApproveLiveAuctionBiddersResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\LiveAuctionApprovalStatusArrayType | Contains the results of the request for each item. Mulitple bidders can be approved
     * with one call.
     */
    public $bidderupdatestatus;
    /**
     * @param LiveAuctionApprovalStatusArrayType $val
     * @throws Exception
     */
    public function setBidderUpdateStatus($val)
    {
        $this->bidderupdatestatus = (int)$val;
    }
}