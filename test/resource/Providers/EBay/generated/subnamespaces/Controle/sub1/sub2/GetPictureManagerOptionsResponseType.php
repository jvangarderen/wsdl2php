<?php

namespace Controle\sub1\sub2;
/**
 * GetPictureManagerOptionsResponseType
 * Returns a list of Picture Manager options and allowed values.
 */
class GetPictureManagerOptionsResponseType extends \Controle\sub1\sub2\AbstractResponseType {
	/**
	 * @var \Controle\sub1\sub2\PictureManagerSubscriptionType | A Store subscription level.
	 */
	public $Subscription;
	/**
	 * @var \Controle\sub1\sub2\PictureManagerPictureDisplayType | A global definition for displaying pictures, with a maximum size.
	 */
	public $PictureType;
}
