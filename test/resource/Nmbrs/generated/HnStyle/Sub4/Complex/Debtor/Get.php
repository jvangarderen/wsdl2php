<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Debtor;

class Get
{
    /**
     * @var int
     */
    public $debtorid;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setDebtorId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->debtorid = (int)$val;
    }
}