<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetItemTransactionsResponseType
 * Returns an array of transaction data for the item specified in the request. The results
 * can be used to create a report of data that is commonly necessary for end-of-auction processing. Zero,
 * one, or many Transaction objects can be returned in the array. The set of transactions returned
 * is limited to those that were modified between the times specified in the request's ModTimeFrom
 * and ModTime filters. Also returns the item object that spawned the transactions. If pagination
 * filters were specified in the request, returns meta-data describing the effects of those
 * filters on the current response and the estimated effects if the same filters are used in
 * subsequent calls.
 */
class GetItemTransactionsResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginationResultType | Provides information about the list of transactions, including number of pages and number
     * of entries.
     */
    public $paginationresult;
    /**
     * @var boolean | Indicates whether there are additional transactions to retrieve. That is, indicates
     * whether more pages of data are available to be returned, given the filters that were
     * specified in the request. Returns false for the last page of data.
     */
    public $hasmoretransactions;
    /**
     * @var int | Number of transactions returned per page (per call). May be a higher value than ReturnedTransactionCountActual
     * if the page returned is the last page and more than one page of data exists.
     */
    public $transactionsperpage;
    /**
     * @var int | Specifies the number of the page of data to return in the current call. Default is 1
     * for most calls. For some calls, the default is 0. Specify a positive value equal to
     * or lower than the number of pages available (which you determine by examining the results
     * of your initial request). See the documentation for other individual calls to determine
     * the correct default value. For GetOrders, not applicable to eBay.com (for GetOrders, applicable
     * to Half.com).
     */
    public $pagenumber;
    /**
     * @var int | Number of transactions retrieved in the current page of results just returned. May be
     * a lower value than TransactionsPerPage if the page returned is the last page and more
     * than one page of data exists.
     */
    public $returnedtransactioncountactual;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemType | Information about the item that spawned the transaction. It is a purchase from this
     * item's listing that the transaction represents. To remove a property from an item, specify
     * it in ModifyType as a changed property, but do not give it a value in Item. Also applicable
     * to Half.com (for GetOrders).
     */
    public $item;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\TransactionArrayType | Contains a list of transactions. Returned as an empty tag if no applicable transactions
     * exist.
     */
    public $transactionarray;
    /**
     * @var boolean | Specifies whether a seller wants to let buyers know that PayPal payments are preferred.
     */
    public $paypalpreferred;
    /**
     * @param PaginationResultType $val
     * @throws Exception
     */
    public function setPaginationResult($val)
    {
        $this->paginationresult = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setHasMoreTransactions($val)
    {
        $this->hasmoretransactions = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setTransactionsPerPage($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->transactionsperpage = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setPageNumber($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->pagenumber = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setReturnedTransactionCountActual($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->returnedtransactioncountactual = (int)$val;
    }

    /**
     * @param ItemType $val
     * @throws Exception
     */
    public function setItem($val)
    {
        $this->item = (int)$val;
    }

    /**
     * @param TransactionArrayType $val
     * @throws Exception
     */
    public function setTransactionArray($val)
    {
        $this->transactionarray = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setPayPalPreferred($val)
    {
        $this->paypalpreferred = (int)$val;
    }
}