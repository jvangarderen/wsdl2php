<?php

namespace Controle\sub1\sub2;
/**
 * ContextSearchAssetType
 * Score and rank for a keyword identified for a web page.
 */
class ContextSearchAssetType {
	/**
	 * @var string | Related keyword.
	 */
	public $Keyword;
	/**
	 * @var \Controle\sub1\sub2\CategoryType | Describes a category that contains items that match the query.
	 */
	public $Category;
	/**
	 * @var int | The ranking of this keyword and category relative to other keywords and categories (when
	 * scores are sorted).
	 */
	public $Ranking;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setKeyword($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Keyword');
		$this->Keyword = (int)$val;
	}

	/**
	 * @param CategoryType $val
	 * @throws Exception
	 */
	public function setCategory($val) {
		
		$this->Category = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setRanking($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->Ranking = (int)$val;
	}

}

