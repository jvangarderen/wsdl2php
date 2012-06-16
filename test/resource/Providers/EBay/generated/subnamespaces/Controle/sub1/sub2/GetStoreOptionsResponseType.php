<?php

namespace Controle\sub1\sub2;
/**
 * GetStoreOptionsResponseType
 * Contains the current list of options for Store configurations.
 */
class GetStoreOptionsResponseType extends \Controle\sub1\sub2\AbstractResponseType {
	/**
	 * @var \Controle\sub1\sub2\StoreThemeArrayType | The current set of basic themes. Each basic theme definition specifies a valid color scheme
	 * for the theme.
	 */
	public $BasicThemeArray;
	/**
	 * @var \Controle\sub1\sub2\StoreThemeArrayType | The current set of advances themes. Unlike basic themes, you can use any colorscheme with
	 * an advanced theme. These themes are suitable for more advanced customization.
	 */
	public $AdvancedThemeArray;
	/**
	 * @var \Controle\sub1\sub2\StoreLogoArrayType | The current set of Store logos. These logos are used in the Store header.
	 */
	public $LogoArray;
	/**
	 * @var \Controle\sub1\sub2\StoreSubscriptionArrayType | The current set of eBay Store subscription tiers and corresponding subscription prices.
	 */
	public $SubscriptionArray;
	/**
	 * @var int | Maximum quantity of matching categories to return at the first level of the
	 *  category hierarchy (CategoryLevel 1).
	 */
	public $MaxCategories;
	/**
	 * @var int | The maximum number of category levels in this store.
	 */
	public $MaxCategoryLevels;
}
