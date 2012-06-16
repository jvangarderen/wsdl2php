<?php

namespace Controle;
/**
 * CountryDetailsType
 * Details about a specific country.
 */
class CountryDetailsType {
	/**
	 * @var \Controle\CountryCodeType | Two-letter ISO 3166 country code. In some calls, used with the Location field to indicate
	 * the city and country where the item is located. Also applicable as input to AddItem and
	 * related calls when you list items to Half.com (specify US). <br> <br> In GetSearchResultsExpress,
	 * only returned when ItemDetails is set to Fine.
	 */
	public $Country;
	/**
	 * @var string | Description of a Want It Now post. Description will not be returned for GetWantItNowSearchResults.
	 */
	public $Description;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}
