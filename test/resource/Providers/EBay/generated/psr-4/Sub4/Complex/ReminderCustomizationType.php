<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ReminderCustomizationType
 * Specifies how to return certain reminder types from the user's My eBay account.
 */
class ReminderCustomizationType
{
    /**
     * @var int | The length of time the reminder has existed in the user's My eBay account, in days.
     * Valid values are 1-60.
     */
    public $durationindays;
    /**
     * @var boolean | Whether to include information about this type of reminder in the response. When true,
     * the container is returned with default input parameters.
     */
    public $include;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setDurationInDays($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->durationindays = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setInclude($val)
    {
        $this->include = (int)$val;
    }
}