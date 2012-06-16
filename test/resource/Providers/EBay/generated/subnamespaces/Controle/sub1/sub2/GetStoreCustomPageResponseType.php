<?php

namespace Controle\sub1\sub2;
/**
 * GetStoreCustomPageResponseType
 * Contains the custom page or pages for the user's Store.
 */
class GetStoreCustomPageResponseType extends \Controle\sub1\sub2\AbstractResponseType {
	/**
	 * @var \Controle\sub1\sub2\StoreCustomPageArrayType | The custom page or custom pages.
	 */
	public $CustomPageArray;
	/**
	 * @param StoreCustomPageArrayType $val
	 * @throws Exception
	 */
	public function setCustomPageArray($val) {
		
		$this->CustomPageArray = (int)$val;
	}

}

