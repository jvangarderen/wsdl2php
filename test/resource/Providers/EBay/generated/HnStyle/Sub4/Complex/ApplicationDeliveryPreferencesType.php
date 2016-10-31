<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ApplicationDeliveryPreferencesType
 * Specifies preferences describing how notifications are delivered to an application. Note
 * that notifications are subject to Anti-Spam rules. See Anti-Spam Rules in the eBay Web Services
 * Guide for more information about these rules.
 */
class ApplicationDeliveryPreferencesType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\anyURI | The URL where eBay delivers all notifications sent to the application. For delivery
     * to a server, the URL begins with http:// or https:// and must be well formed. Use a
     * URL that is functional at the time of the call. For delivery to an email address, the
     * URL begins with mailto: and specifies a valid email address.
     */
    public $applicationurl;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\EnableCodeType | A token indicating whether notifications are enabled or disabled. If you disable notifications, the
     * application does not receive them, but notification preferences are not erased.
     */
    public $applicationenable;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\anyURI | The email address where eBay sends all application markup and markdown event notifications.
     * When setting the email address, input must be in the format mailto://youremailaddress@yoursite.com
     * (with the mailto:// prefix). The application has to subscribe to recieve these events
     * using the AlertEnable field.
     */
    public $alertemail;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\EnableCodeType | A token indicating whether markup and markdown alerts are enabled or disabled.
     */
    public $alertenable;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\NotificationPayloadTypeCodeType | If this field is specified, the value must be eBLSchemaSOAP.
     */
    public $notificationpayloadtype;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DeviceTypeCodeType | The means of receipt of notification. In most cases, it is Platform (typical API calls
     * and web interaction), so this is the default, if not specified. For wireless applications,
     * use SMS.
     */
    public $devicetype;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param anyURI $val
     * @throws Exception
     */
    public function setApplicationURL($val)
    {
        $this->applicationurl = (int)$val;
    }

    /**
     * @param EnableCodeType $val
     * @throws Exception
     */
    public function setApplicationEnable($val)
    {
        $this->applicationenable = (int)$val;
    }

    /**
     * @param anyURI $val
     * @throws Exception
     */
    public function setAlertEmail($val)
    {
        $this->alertemail = (int)$val;
    }

    /**
     * @param EnableCodeType $val
     * @throws Exception
     */
    public function setAlertEnable($val)
    {
        $this->alertenable = (int)$val;
    }

    /**
     * @param NotificationPayloadTypeCodeType $val
     * @throws Exception
     */
    public function setNotificationPayloadType($val)
    {
        $this->notificationpayloadtype = (int)$val;
    }

    /**
     * @param DeviceTypeCodeType $val
     * @throws Exception
     */
    public function setDeviceType($val)
    {
        $this->devicetype = (int)$val;
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