<?php

namespace Controle\sub1\sub2;

class ShoppingCart
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $CartId;
	/**
	 * @var string
	 */
	public $HMAC;
	/**
	 * @var string
	 */
	public $PurchaseUrl;
	/**
	 * @var \Controle\sub1\sub2\ItemArray
	 */
	public $Items;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCartId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CartId');
        }
        $this->CartId = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setHMAC($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for HMAC');
        }
        $this->HMAC = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setPurchaseUrl($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for PurchaseUrl');
        }
        $this->PurchaseUrl = (string)$val;
	}

	/**
	 * @param ItemArray $val
	 * @throws Exception
	 */
	public function setItems($val)
	{
        $this->Items = (ItemArray)$val;
	}
}
