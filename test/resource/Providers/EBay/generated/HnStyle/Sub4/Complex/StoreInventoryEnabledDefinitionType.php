<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * StoreInventoryEnabledDefinitionType
 * Defines the StoreInventoryEnabled feature. If the field is present, the corresponding feature
 * applies to the category. The field is returned as an empty element (e.g., a boolean value
 * is not returned).value different from site.
 */
class StoreInventoryEnabledDefinitionType
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