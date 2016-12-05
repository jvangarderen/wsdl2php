<?php

namespace Controle;

/**
 * NotificationEventPropertyType
 * Defines properties associated with particular event.
 */
class NotificationEventPropertyType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\NotificationEventTypeCodeType |      */
    public $EventType;
    /**
     * @var \Controle\NotificationEventPropertyNameCodeType | Name of the eBay Store. The name is shown at the top of the Store page.
     */
    public $Name;
    /**
     * @var string | Specifies the value for the property.
     */
    public $Value;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param NotificationEventTypeCodeType $val
     * @throws Exception
     */
    public function setEventType($val)
    {
        $this->EventType = (NotificationEventTypeCodeType)$val;
    }

    /**
     * @param NotificationEventPropertyNameCodeType $val
     * @throws Exception
     */
    public function setName($val)
    {
        $this->Name = (NotificationEventPropertyNameCodeType)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setValue($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Value');
        }
        $this->Value = (string)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (<anyXML>)$val;
    }
}
