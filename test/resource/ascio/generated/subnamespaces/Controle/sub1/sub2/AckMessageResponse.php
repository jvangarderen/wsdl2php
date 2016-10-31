<?php

namespace Controle\sub1\sub2;

class AckMessageResponse
{
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $ackmessageresult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setAckMessageResult($val)
	{
        $this->ackmessageresult = (int)$val;
	}
}
