<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class DnsSecKeys
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DnsSecKey
     */
    public $dnsseckey1;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DnsSecKey
     */
    public $dnsseckey2;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DnsSecKey
     */
    public $dnsseckey3;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DnsSecKey
     */
    public $dnsseckey4;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DnsSecKey
     */
    public $dnsseckey5;
    /**
     * @param DnsSecKey $val
     * @throws Exception
     */
    public function setDnsSecKey1($val)
    {
        $this->dnsseckey1 = (int)$val;
    }

    /**
     * @param DnsSecKey $val
     * @throws Exception
     */
    public function setDnsSecKey2($val)
    {
        $this->dnsseckey2 = (int)$val;
    }

    /**
     * @param DnsSecKey $val
     * @throws Exception
     */
    public function setDnsSecKey3($val)
    {
        $this->dnsseckey3 = (int)$val;
    }

    /**
     * @param DnsSecKey $val
     * @throws Exception
     */
    public function setDnsSecKey4($val)
    {
        $this->dnsseckey4 = (int)$val;
    }

    /**
     * @param DnsSecKey $val
     * @throws Exception
     */
    public function setDnsSecKey5($val)
    {
        $this->dnsseckey5 = (int)$val;
    }
}
