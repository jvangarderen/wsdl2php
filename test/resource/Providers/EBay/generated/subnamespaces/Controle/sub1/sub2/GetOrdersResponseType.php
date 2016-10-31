<?php

namespace Controle\sub1\sub2;

/**
 * GetOrdersResponseType
 * Returns the set of orders that match the order IDs or filter criteria specified.
 */
class GetOrdersResponseType extends
 \Controle\sub1\sub2\AbstractResponseType
{
	/**
	 * @var \Controle\sub1\sub2\PaginationResultType | Provides information about the list of transactions, including number of pages and number
	 * of entries.
	 */
	public $paginationresult;
	/**
	 * @var boolean | Applies only to Half.com. If true, there are more orders yet to be retrieved. Additional
	 * GetOrders calls with higher page numbers or more entries per page must be made to retrieve
	 * these orders. If false, no more orders are available or no orders match the request (based
	 * on the input filters).
	 */
	public $hasmoreorders;
	/**
	 * @var \Controle\sub1\sub2\OrderArrayType | The set of orders that match the order IDs or filter criteria specified. Also applicable
	 * to Half.com (only returns orders that have not been marked as shipped).
	 */
	public $orderarray;
	/**
	 * @var int | Applies only to Half.com. Indicates the number of orders that can be returned per page
	 * of data (i.e., per call). This is the same as the value specified in the Pagination.EntriesPerPage
	 * input (or the default value, if EntriesPerPage was not specified). This is not necessarily
	 * the actual number of orders returned per page (see ReturnedOrderCountActual).
	 */
	public $ordersperpage;
	/**
	 * @var int | Specifies the number of the page of data to return in the current call. Default is 1 for
	 * most calls. For some calls, the default is 0. Specify a positive value equal to or lower
	 * than the number of pages available (which you determine by examining the results of your
	 * initial request). See the documentation for other individual calls to determine the correct default
	 * value. For GetOrders, not applicable to eBay.com (for GetOrders, applicable to Half.com).
	 */
	public $pagenumber;
	/**
	 * @var int | Applies only to Half.com. Indicates the total number of orders returned.
	 */
	public $returnedordercountactual;
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
	public function setHasMoreOrders($val)
	{
        $this->hasmoreorders = (int)$val;
	}

	/**
	 * @param OrderArrayType $val
	 * @throws Exception
	 */
	public function setOrderArray($val)
	{
        $this->orderarray = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setOrdersPerPage($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->ordersperpage = (int)$val;
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
	public function setReturnedOrderCountActual($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->returnedordercountactual = (int)$val;
	}
}
