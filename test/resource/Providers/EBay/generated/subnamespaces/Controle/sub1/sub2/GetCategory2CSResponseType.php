<?php

namespace Controle\sub1\sub2;
/**
 * GetCategory2CSResponseType
 * Returns data that indicates the categories that are mapped to characteristics sets, for
 * the eBay site to which the call was routed. Retrieves all mappings or just the one that
 * matches the category ID passed as input. The data is returned in a CategoryArrayType object,
 * which can contain multiple mappings. The response also contains information about categories
 * for which the mappings have changed.<br> <br> <span class="tablenote"><b>Note:</b> The Pre-filled
 * Item Information feature depends on the Item Specifics feature. This means the set of catalog-enabled
 * categories is a subset of the categories that are mapped to characteristic sets. That is,
 * there are no catalog-enabled categories that are not mapped to characteristic sets.</span>
 */
class GetCategory2CSResponseType extends \Controle\sub1\sub2\AbstractResponseType {
	/**
	 * @var \Controle\sub1\sub2\CategoryArrayType | Contains data about categories that are mapped to characteristics sets. Use this data to
	 * determine:<br> - The names and IDs of the characteristics sets<br> - The availability of
	 * the Pre-filled Item Information feature for listings in that category (i.e., whether the
	 * category is catalog-enabled)<br> - For catalog-enabled categories, the available product
	 * search methods<br> - The current version information for the complete mapping<br> - The
	 * version information for each characteristics set
	 */
	public $MappedCategoryArray;
	/**
	 * @var \Controle\sub1\sub2\CategoryArrayType | Contains data about categories (if any) whose characteristics set mappings have changed since
	 * the version specified in the request. When a characteristics set mapping changes, the data
	 * appears in both the UnmappedCategoryArray object (to indicate that the change occurred)
	 * and the MappedCategoryArray object.
	 */
	public $UnmappedCategoryArray;
	/**
	 * @var string | Current version of the product search page data for the site. This value changes each time
	 * changes are made to the search page data. The current version value is not necessarily
	 * greater than the previous value. Therefore, when comparing versions, only compare whether
	 * the value has changed.
	 */
	public $AttributeSystemVersion;
	/**
	 * @var \Controle\sub1\sub2\SiteWideCharacteristicsType | A list of one or more characteristics sets mapped to the category, if any. Use this information
	 * when working with Item Specifics (Attributes) and Pre-filled Item Information (Catalogs)
	 * functionality.
	 */
	public $SiteWideCharacteristicSets;
}
