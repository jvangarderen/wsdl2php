<?php

namespace Controle\sub1\sub2;
class GetMessagesResponse {
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $GetMessagesResult;
	/**
	 * @var array \Controle\sub1\sub2\Message
	 */
	public $messages;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetMessagesResult($val) {
		
		$this->GetMessagesResult = (int)$val;
	}

	/**
	 * @param ArrayOfMessage $val
	 * @throws Exception
	 */
	public function setMessages($val) {
		
		$this->messages = (int)$val;
	}

}

