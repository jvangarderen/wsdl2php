<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SellerRequest
{
    /**
     * @var string
     */
    public $seller_id;
    /**
     * @var string
     */
    public $tag;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $devtag;
    /**
     * @var string
     */
    public $offerstatus;
    /**
     * @var string
     */
    public $page;
    /**
     * @var string
     */
    public $seller_browse_id;
    /**
     * @var string
     */
    public $keyword;
    /**
     * @var string
     */
    public $locale;
    /**
     * @var string
     */
    public $index;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setSellerid($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for seller_id');
        }
        $this->seller_id = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setTag($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for tag');
        }
        $this->tag = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setType($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for type');
        }
        $this->type = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDevtag($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for devtag');
        }
        $this->devtag = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setOfferstatus($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for offerstatus');
        }
        $this->offerstatus = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPage($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for page');
        }
        $this->page = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSellerbrowseid($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for seller_browse_id');
        }
        $this->seller_browse_id = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setKeyword($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for keyword');
        }
        $this->keyword = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setLocale($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for locale');
        }
        $this->locale = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setIndex($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for index');
        }
        $this->index = (int)$val;
    }
}
