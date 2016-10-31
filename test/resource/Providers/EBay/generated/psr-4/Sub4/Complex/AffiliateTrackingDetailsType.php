<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * AffiliateTrackingDetailsType
 * Container for fields related to affiliate tracking. For additional information, see the
 * annotations to the elements in this type.
 */
class AffiliateTrackingDetailsType
{
    /**
     * @var string | Specifies an ID to identify you to your tracking partner (tracking provider). The value
     * you specify is obtained from your tracking partner. For example, in the case of Commission
     * Junction, the TrackingID is the PID given to you by Commission Junction.
     */
    public $trackingid;
    /**
     * @var string | Specifies the third party, e.g. Commission Junction, who is your tracking partner (tracking
     * provider). Required if you specify a TrackingID. Depending on your tracking partner,
     * specify one of the following values. Not all partners are valid for all sites. <br>1
     * = Commission Junction <br>2 = Be Free <br>3 = Affilinet <br>4 = TradeDoubler <br>5 =
     * Mediaplex <br>6 = DoubleClick <br>7 = Allyes <br>8 = BJMT
     */
    public $trackingpartnercode;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ApplicationDeviceTypeCodeType | Reserved for future use.
     */
    public $applicationdevicetype;
    /**
     * @var string | Optional value that depends on your tracking partner (tracking provider). For example,
     * if you specify a TrackingPartnerCode of 1 for Commission Junction, the AffiliateUserID
     * is your Commission Junction Shopper ID (SID).
     */
    public $affiliateuserid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setTrackingID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TrackingID');
        }
        $this->trackingid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setTrackingPartnerCode($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TrackingPartnerCode');
        }
        $this->trackingpartnercode = (int)$val;
    }

    /**
     * @param ApplicationDeviceTypeCodeType $val
     * @throws Exception
     */
    public function setApplicationDeviceType($val)
    {
        $this->applicationdevicetype = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setAffiliateUserID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for AffiliateUserID');
        }
        $this->affiliateuserid = (int)$val;
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
