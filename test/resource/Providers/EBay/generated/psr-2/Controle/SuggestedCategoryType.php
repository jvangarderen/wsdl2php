<?php

namespace Controle;
/**
 * SuggestedCategoryType
 * Defines a suggested category, returned      in response to a search for categories that
 * contain      listings with certain keywords in their titles and descriptions.
 */
class SuggestedCategoryType {
    /**
     * @var \Controle\CategoryType | Describes a category that contains items that match the query.
     */
    public $Category;
    /**
     * @var int | Percentage of the matching items that were found in this category, relative to other
     * categories in which matching items were also found. Indicates the distribution of matching
     * items across the suggested categories.
     */
    public $PercentItemFound;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}
