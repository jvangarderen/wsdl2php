<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class PictureManagerDetailsType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PictureManagerSubscriptionLevelCodeType | Subscription level (tier) for the user's eBay Store.
     */
    public $subscriptionlevel;
    /**
     * @var int | The amount of storage already in use. Measured in bytes. Read-only value.
     */
    public $storageused;
    /**
     * @var int | The amount of storage space remaining in the authenticated user's album. Measured in
     * bytes. Read-only value.
     */
    public $totalstorageavailable;
    /**
     * @var boolean | Whether to keep a copy of the original picture without resizing. Default is false. true
     * = keep originals.
     */
    public $keeporiginal;
    /**
     * @var boolean | Whether to show the EPS watermark when photos are displayed. Default is false. true
     * = show.
     */
    public $watermarkeps;
    /**
     * @var boolean | Whether to show the user ID watermark when photos are displayed. Default is false. true
     * = show.
     */
    public $watermarkuserid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PictureManagerFolderType | The folder requested in the album.
     */
    public $folder;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param PictureManagerSubscriptionLevelCodeType $val
     * @throws Exception
     */
    public function setSubscriptionLevel($val)
    {
        $this->subscriptionlevel = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setStorageUsed($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->storageused = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setTotalStorageAvailable($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->totalstorageavailable = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setKeepOriginal($val)
    {
        $this->keeporiginal = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setWatermarkEPS($val)
    {
        $this->watermarkeps = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setWatermarkUserID($val)
    {
        $this->watermarkuserid = (int)$val;
    }

    /**
     * @param PictureManagerFolderType $val
     * @throws Exception
     */
    public function setFolder($val)
    {
        $this->folder = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}