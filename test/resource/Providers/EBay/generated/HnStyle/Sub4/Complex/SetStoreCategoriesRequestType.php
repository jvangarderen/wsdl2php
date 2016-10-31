<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SetStoreCategoriesRequestType
 * Requests changes to the category structure for a store. Use this call to add, delete, move,
 * or rename a list of categories.
 */
class SetStoreCategoriesRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StoreCategoryUpdateActionCodeType | Indicates the type of offer being made on the specified listing. Valid values are enumerated
     * in the BidActionCodeType code list.
     */
    public $action;
    /**
     * @var int | Items can only be contained within child categories. A parent category cannot contain
     * items. If adding, moving, or deleting categories displaces items, you must specify a
     * destination child category under which the displaced items will be moved. The destination
     * category must have no child categories.
     */
    public $itemdestinationcategoryid;
    /**
     * @var int | When adding or moving store categories, specifies the category under which the listed
     * categories will be located. To add or move categories to the top level, set the value
     * to -999.
     */
    public $destinationparentcategoryid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StoreCustomCategoryArrayType | Contains information for specifying the store categories being acted on.
     */
    public $storecategories;
    /**
     * @param StoreCategoryUpdateActionCodeType $val
     * @throws Exception
     */
    public function setAction($val)
    {
        $this->action = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setItemDestinationCategoryID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->itemdestinationcategoryid = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setDestinationParentCategoryID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->destinationparentcategoryid = (int)$val;
    }

    /**
     * @param StoreCustomCategoryArrayType $val
     * @throws Exception
     */
    public function setStoreCategories($val)
    {
        $this->storecategories = (int)$val;
    }
}