<?php

namespace Controle;
/**
 * CrossPromotionsType
 * Contains one or more items cross-promoted with the display or purchase of a referring item.
 */
class CrossPromotionsType {
    /**
     * @var \Controle\ItemIDType | The item ID of the item reported for infringment.
     */
    public $ItemID;
    /**
     * @var \Controle\PromotionSchemeCodeType | The primary cross-promotion rule scheme that was applied to return the cross-promoted
     * item.
     */
    public $PrimaryScheme;
    /**
     * @var \Controle\PromotionMethodCodeType | The type of cross promotion, CrossSell or UpSell.
     */
    public $PromotionMethod;
    /**
     * @var string | The eBay ID of the seller who listed the item. <br><br> Starting Jan 2007, when a bidder's
     * user info is made anonymous, this tag will be returned with the anonymous value "Seller
     * X", where X indicates where the seller falls in the sequence of sellers that the user
     * has purchased items from. For example, if the seller is the third seller that the user
     * has purchased items from, the value "Seller 3" is returned.
     */
    public $SellerID;
    /**
     * @var boolean | Whether a shipping discount is offered by the seller when the cross-promoted item is
     * purchased.
     */
    public $ShippingDiscount;
    /**
     * @var string | The key of the seller who is promoting the item.
     */
    public $SellerKey;
    /**
     * @var string | The name of the seller's eBay Store.
     */
    public $StoreName;
    /**
     * @var \Controle\PromotedItemType | The unique item ID of the cross-promoted item. Use for an ItemToItem rule.
     */
    public $PromotedItem;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}
