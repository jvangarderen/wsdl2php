<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class DirectorRequest
{
    /**
     * @var string
     */
    public $director;
    /**
     * @var string
     */
    public $page;
    /**
     * @var string
     */
    public $mode;
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
    public $sort;
    /**
     * @var string
     */
    public $variations;
    /**
     * @var string
     */
    public $locale;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setDirector($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for director');
        }
        $this->director = (int)$val;
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
    public function setMode($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for mode');
        }
        $this->mode = (int)$val;
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
    public function setSort($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sort');
        }
        $this->sort = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setVariations($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for variations');
        }
        $this->variations = (int)$val;
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
}