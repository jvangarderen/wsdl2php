<?php

namespace Controle;
/**
 * LiveAuctionApprovalStatusArrayType
 * Contains the results of the request for each bidder.
 */
class LiveAuctionApprovalStatusArrayType {
    /**
     * @var \Controle\LiveAuctionApprovalStatusType | Indicates the current approval status of a bidder.
     */
    public $LiveAuctionStatus;
    /**
     * @param LiveAuctionApprovalStatusType $val
     * @throws Exception
     */
    public function setLiveAuctionStatus($val) {
        
        $this->LiveAuctionStatus = (int)$val;
    }

}

