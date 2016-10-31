<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ReviseItemResponseType
 * Returns the item ID and the estimated fees for the revised listing.
 */
class ReviseItemResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $itemid;
    /**
     * @var dateTime | Date and time (in GMT) that a Want It Now post was added.
     */
    public $starttime;
    /**
     * @var dateTime | Time stamp (in GMT) when the listing is scheduled to end (calculated based on the values
     * of StartTime and ListingDuration) or the actual end time if the item has ended.
     */
    public $endtime;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\FeesType | (Not used.)
     */
    public $fees;
    /**
     * @var string | ID of the category in which the Want It Now post is listed.
     */
    public $categoryid;
    /**
     * @var string | ID of the secondary category in which the item would be listed. Only returned if you
     * set Item.CategoryMappingAllowed to true in the request and the ID you passed in SecondaryCategory
     * was mapped to a new ID by eBay. If the secondary category has not changed or it has
     * expired with no replacement, Category2ID does not return a value.
     */
    public $category2id;
    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->itemid = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setStartTime($val)
    {
        $this->starttime = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setEndTime($val)
    {
        $this->endtime = (int)$val;
    }

    /**
     * @param FeesType $val
     * @throws Exception
     */
    public function setFees($val)
    {
        $this->fees = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCategoryID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CategoryID');
        }
        $this->categoryid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCategory2ID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Category2ID');
        }
        $this->category2id = (int)$val;
    }
}