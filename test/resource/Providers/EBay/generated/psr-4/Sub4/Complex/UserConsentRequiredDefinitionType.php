<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * UserConsentRequiredDefinitionType
 * Defines the UserConsentRequired feature. If the field is present, the corresponding feature
 * applies to the category. The field is returned as an empty element (i.e., a boolean value
 * is not returned).
 */
class UserConsentRequiredDefinitionType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}