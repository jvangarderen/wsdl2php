<?php

namespace Controle\sub1\sub2;
/**
 * StoreCustomCategoryArrayType
 * Set of custom categories for the Store.
 */
class StoreCustomCategoryArrayType {
	/**
	 * @var \Controle\sub1\sub2\StoreCustomCategoryType | A Store custom category.
	 */
	public $CustomCategory;
	/**
	 * @param StoreCustomCategoryType $val
	 * @throws Exception
	 */
	public function setCustomCategory($val) {
		
		$this->CustomCategory = (int)$val;
	}

}

