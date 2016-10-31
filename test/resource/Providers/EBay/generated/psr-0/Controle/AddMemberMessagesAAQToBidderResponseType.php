<?php

namespace Controle;
/**
 * AddMemberMessagesAAQToBidderResponseType
 * Contains the response information.
 */
class AddMemberMessagesAAQToBidderResponseType extends \Controle\AbstractResponseType {
	/**
	 * @var \Controle\AddMemberMessagesAAQToBidderResponseContainerType | Contains the response information.
	 */
	public $AddMemberMessagesAAQToBidderResponseContainer;
	/**
	 * @param AddMemberMessagesAAQToBidderResponseContainerType $val
	 * @throws Exception
	 */
	public function setAddMemberMessagesAAQToBidderResponseContainer($val) {
		
		$this->AddMemberMessagesAAQToBidderResponseContainer = (int)$val;
	}

}

