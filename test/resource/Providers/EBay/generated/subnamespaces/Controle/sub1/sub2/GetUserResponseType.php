<?php

namespace Controle\sub1\sub2;

/**
 * GetUserResponseType
 * Contains the data retrieved by the call. User data is returned in a User object.
 */
class GetUserResponseType extends
 \Controle\sub1\sub2\AbstractResponseType
{
	/**
	 * @var \Controle\sub1\sub2\UserType | Bidder information. See the schema documentation for UserType for details on its properties
	 * and their meanings.
	 */
	public $user;
	/**
	 * @param UserType $val
	 * @throws Exception
	 */
	public function setUser($val)
	{
        $this->user = (int)$val;
	}
}
