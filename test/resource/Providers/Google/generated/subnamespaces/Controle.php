<?php

class DirectoryCategory {
    /**
     * @var string
     */
    public $fullViewableName;
    /**
     * @var string
     */
    public $specialEncoding;

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setFullViewableName($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for fullViewableName');
		$this->fullViewableName = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSpecialEncoding($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for specialEncoding');
		$this->specialEncoding = (int)$val;
	}
}

