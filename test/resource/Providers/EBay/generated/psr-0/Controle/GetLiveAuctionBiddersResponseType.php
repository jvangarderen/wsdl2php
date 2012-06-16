<?php

namespace Controle;
/**
 * GetLiveAuctionBiddersResponseType
 * Includes the list of bidders for the requested catalog.
 */
class GetLiveAuctionBiddersResponseType extends \Controle\AbstractResponseType {
	/**
	 * @var \Controle\BidderDetailArrayType | Contains the bidder details that match the bidder query passed in the request. Returned
	 * when bidder search results are found.
	 */
	public $BidderDetails;
	/**
	 * @var int | Total number of bidders in Pending state.
	 */
	public $TotalPending;
	/**
	 * @var int | Total number of bidders in Approved state.
	 */
	public $TotalApproved;
	/**
	 * @var int | Total number of bidders in Denied state.
	 */
	public $TotalDenied;
	/**
	 * @var int | Specifies the number of the page of data to return in the current call. Default is 1 for
	 * most calls. For some calls, the default is 0. Specify a positive value equal to or lower
	 * than the number of pages available (which you determine by examining the results of your
	 * initial request). See the documentation for other individual calls to determine the correct default
	 * value. For GetOrders, not applicable to eBay.com (for GetOrders, applicable to Half.com).
	 */
	public $PageNumber;
	/**
	 * @var \Controle\PaginationResultType | Provides information about the list of transactions, including number of pages and number
	 * of entries.
	 */
	public $PaginationResult;
}
