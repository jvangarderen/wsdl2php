<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class RunInfo
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $ID;
    /**
     * @var int
     */
    public $Number;
    /**
     * @var int
     */
    public $Year;
    /**
     * @var int
     */
    public $PeriodStart;
    /**
     * @var int
     */
    public $PeriodEnd;
    /**
     * @var string
     */
    public $Description;
    /**
     * @var dateTime
     */
    public $RunAt;
    /**
     * @var boolean
     */
    public $IsLocked;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws Exception
     */
    public function setID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->ID = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setNumber($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Number = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setYear($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Year = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setPeriodStart($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->PeriodStart = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setPeriodEnd($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->PeriodEnd = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDescription($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Description');
        }
        $this->Description = (string)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setRunAt($val)
    {
        $this->RunAt = (dateTime)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setIsLocked($val)
    {
        $this->IsLocked = (boolean)$val;
    }
}
