<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * CompleteSaleRequestType
 * Enables a seller to do various tasks after processing a transaction. A seller can leave
 * feedback for the buyer, change the paid status in My eBay, or change the shipped status
 * in My eBay (or any combination of these). Only the seller who listed the item can perform
 * these tasks. This call can be used anytime after a transaction has been created. However,
 * it is recommended that you wait until the sale is complete before you use this call.
 */
class CompleteSaleRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $itemid;
    /**
     * @var string | Identifier for the transaction. A value of zero is used for the Chinese auction format. Thus,
     * a value of zero is a valid transaction ID. A transaction ID is only unique to the listing that
     * spawned it, so a transaction is only uniquely identified on a global basis by a combination
     * of ItemID and TransactionID. Also applicable to Half.com (for GetOrders).
     */
    public $transactionid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\FeedbackInfoType | Specifies feedback the seller is leaving for the buyer. For a given transaction, the
     * seller can leave feedback once, and no further modifications can be made to that feedback
     * entry. If feedback has already been left, FeedbackInfo is not allowed. Call GetFeedback
     * to determine whether feedback has already been left.
     */
    public $feedbackinfo;
    /**
     * @var boolean | If true, the transaction is marked as shipped in My eBay (applicable for Selling Manager
     * Pro users). If false, the transaction is marked as not shipped in My eBay. If not specified,
     * the shipped status in My eBay is not modified.
     */
    public $shipped;
    /**
     * @var boolean | If true, the transaction is marked as paid in My eBay. If false, the transaction is
     * marked as not paid in My eBay. If not specified, the paid status in My eBay is not modified.
     */
    public $paid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ListingTypeCodeType | The listing format (fixed price, auction, etc) for the automatic item search criteria.
     */
    public $listingtype;
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
    public function setTransactionID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TransactionID');
        }
        $this->transactionid = (int)$val;
    }

    /**
     * @param FeedbackInfoType $val
     * @throws Exception
     */
    public function setFeedbackInfo($val)
    {
        $this->feedbackinfo = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setShipped($val)
    {
        $this->shipped = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setPaid($val)
    {
        $this->paid = (int)$val;
    }

    /**
     * @param ListingTypeCodeType $val
     * @throws Exception
     */
    public function setListingType($val)
    {
        $this->listingtype = (int)$val;
    }
}