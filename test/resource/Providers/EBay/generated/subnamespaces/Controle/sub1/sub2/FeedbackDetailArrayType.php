<?php

namespace Controle\sub1\sub2;
/**
 * FeedbackDetailArrayType
 * Contains multiple individual feedback detail entries.
 */
class FeedbackDetailArrayType {
	/**
	 * @var \Controle\sub1\sub2\FeedbackDetailType | Contains a single feedback detail entry. Output only.
	 */
	public $FeedbackDetail;
	/**
	 * @param FeedbackDetailType $val
	 * @throws Exception
	 */
	public function setFeedbackDetail($val) {
		
		$this->FeedbackDetail = (int)$val;
	}

}

