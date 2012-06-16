<?php

namespace Controle;
/**
 * BidApprovalType
 * Information that a Live Auction seller selects when approving or denying a user who wants
 * to bid on items in the seller's Live Auctions catalog.
 */
class BidApprovalType {
    /**
     * @var \Controle\UserIDType | Unique eBay user ID for the user.<br> <br> In GetSearchResultsExpress, only returned
     * when ItemDetails is set to Fine. <br><br> Starting Jan 2007, when a bidder's user info
     * is made anonymous, this tag will contain the real ID value only for that bidder, and
     * the seller of an item that the user is bidding on. For all other users, the real ID
     * value will be replaced with the value "Bidder X" where X is a number indicating the
     * order of that user's first bid. For example, if the user was the third bidder, UserID
     * = Bidder 3. <br><br> Note that the anonymous bidder ID stays the same for a given auction,
     * but is different for different auctions. For example, a bidder who is the third and
     * then the seventh bidder in an auction will be listed for both bids as "Bidder 3". However,
     * if that same bidder is the first bidder on a different auction, the bidder will be listed
     * for that auction as "Bidder 1", not "Bidder 3".
     */
    public $UserID;
    /**
     * @var \Controle\AmountType | Amount that has been approved by the seller. If the seller has not yet approved, return
     * value "Pending"
     */
    public $ApprovedBiddingLimit;
    /**
     * @var string | Comments entered by the seller when it declined an approval request, if any.
     */
    public $DeclinedComment;
    /**
     * @var \Controle\BidderStatusCodeType | Indicates the user's registration/user status. To be eligible to list on Express, a
     * seller's status must be Confirmed. See "eBay Express" in the eBay Web Services guide.
     */
    public $Status;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}
