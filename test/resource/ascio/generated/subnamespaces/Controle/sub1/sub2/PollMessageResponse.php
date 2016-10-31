<?php

namespace Controle\sub1\sub2;
class PollMessageResponse {
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $PollMessageResult;
	/**
	 * @var int
	 */
	public $msgCount;
	/**
	 * @var \Controle\sub1\sub2\QueueItem
	 */
	public $item;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setPollMessageResult($val) {
		
		$this->PollMessageResult = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setMsgCount($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->msgCount = (int)$val;
	}

	/**
	 * @param QueueItem $val
	 * @throws Exception
	 */
	public function setItem($val) {
		
		$this->item = (int)$val;
	}

}

