<?php

namespace Controle\sub1\sub2;
class ListingProductInfo {
	/**
	 * @var \Controle\sub1\sub2\ListingProductDetailsArray
	 */
	public $ListingProductDetails;
	/**
	 * @param ListingProductDetailsArray $val
	 * @throws Exception
	 */
	public function setListingProductDetails($val) {
		
		$this->ListingProductDetails = (int)$val;
	}

}

