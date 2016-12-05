<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetSuggestedCategoriesResponseType
 * Returns a list of categories with the highest number of listings whose titles or descriptions
 * contain the keywords specified in a GetSuggestedCategoriesRequest.
 */
class GetSuggestedCategoriesResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SuggestedCategoryArrayType | Contains the categories that contain listings that match the query string in the request.
     * The array can have up to 10 categories. Not returned if no categories match the query
     * in the request.
     */
    public $SuggestedCategoryArray;
    /**
     * @var int | Indicates the number of categories in the array.
     */
    public $CategoryCount;
    // @codingStandardsIgnoreEnd

    /**
     * @param SuggestedCategoryArrayType $val
     * @throws Exception
     */
    public function setSuggestedCategoryArray($val)
    {
        $this->SuggestedCategoryArray = ()$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setCategoryCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CategoryCount = ()$val;
    }
}
