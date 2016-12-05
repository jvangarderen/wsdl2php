<?php

namespace Controle\sub1\sub2;

/**
 * OrderTransactionType
 * Contains an order or a transaction. A transaction is the sale of one or more items from
 * a seller's listing to a buyer. An order combines two or more transactions into a single
 * payment.
 */
class OrderTransactionType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\OrderType | Order in which the page is displayed in the list of custom pages.
	 */
	public $Order;
	/**
	 * @var \Controle\sub1\sub2\TransactionType | Information about one transaction. Also applicable to Half.com (for GetOrders).
	 */
	public $Transaction;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param OrderType $val
	 * @throws Exception
	 */
	public function setOrder($val)
	{
        $this->Order = (OrderType)$val;
	}

	/**
	 * @param TransactionType $val
	 * @throws Exception
	 */
	public function setTransaction($val)
	{
        $this->Transaction = (TransactionType)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (<anyXML>)$val;
	}
}
