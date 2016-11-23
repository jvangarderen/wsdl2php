<?php

namespace Controle;

/**
 * UserConsentRequiredDefinitionType
 * Defines the UserConsentRequired feature. If the field is present, the corresponding feature
 * applies to the category. The field is returned as an empty element (i.e., a boolean value
 * is not returned).
 */
class UserConsentRequiredDefinitionType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (int)$val;
	}
}
