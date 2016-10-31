<?php

class SoApStruct
{
	/**
	 * @var string
	 */
	public $varstring;
	/**
	 * @var int
	 */
	public $varint;
	/**
	 * @var float
	 */
	public $varfloat;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setVarString($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for varString');
        }
        $this->varstring = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setVarInt($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->varint = (int)$val;
	}

	/**
	 * @param float $val
	 * @throws Exception
	 */
	public function setVarFloat($val)
	{
        $this->varfloat = (int)$val;
	}
}

class SoApStructStruct
{
	/**
	 * @var string
	 */
	public $varstring;
	/**
	 * @var int
	 */
	public $varint;
	/**
	 * @var float
	 */
	public $varfloat;
	/**
	 * @var SOAPStruct
	 */
	public $varstruct;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setVarString($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for varString');
        }
        $this->varstring = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setVarInt($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->varint = (int)$val;
	}

	/**
	 * @param float $val
	 * @throws Exception
	 */
	public function setVarFloat($val)
	{
        $this->varfloat = (int)$val;
	}

	/**
	 * @param SOAPStruct $val
	 * @throws Exception
	 */
	public function setVarStruct($val)
	{
        $this->varstruct = (int)$val;
	}
}

class SoApArrayStruct
{
	/**
	 * @var string
	 */
	public $varstring;
	/**
	 * @var int
	 */
	public $varint;
	/**
	 * @var float
	 */
	public $varfloat;
	/**
	 * @var String[]
	 */
	public $vararray;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setVarString($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for varString');
        }
        $this->varstring = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setVarInt($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->varint = (int)$val;
	}

	/**
	 * @param float $val
	 * @throws Exception
	 */
	public function setVarFloat($val)
	{
        $this->varfloat = (int)$val;
	}

	/**
	 * @param ArrayOfString $val
	 * @throws Exception
	 */
	public function setVarArray($val)
	{
        $this->vararray = (int)$val;
	}
}

/**
 * SoapTestClient
 */
class SoapTestClient extends SoapClient {

	const WSDL_FILE = "AspDotNetRound2Test.wsdl";
	private $classmap = array(
        'SOAPStruct\,' =>
            'SOAPStruct',
        'SOAPStructStruct\,' =>
            'SOAPStructStruct',
        'SOAPArrayStruct\,' =>
            'SOAPArrayStruct',
	);

	public function __construct($wsdl = null, $options = array()) {
        foreach($this->classmap as $key => $value) {
            if(!isset($options['classmap'][$key])) {
            	$options['classmap'][$key] = $value;
            }
        }
        if(isset($options['headers'])) {
            $this->__setSoapHeaders($options['headers']);
        }
        parent::__construct($wsdl ? $wsdl : self::WSDL_FILE, $options);
	}

	/**
	 * echoStructAsSimpleTypes
	 *
	 * @param SOAPStruct $inputStruct
	 * @return list(string $outputString, int $outputInteger, float $outputFloat)
	 */
	public function echoStructAsSimpleTypes(SOAPStruct $inputStruct) {
        return $this->__soapCall(
            'echoStructAsSimpleTypes',
            array($inputStruct),
            array('uri'=>'http://soapinterop.org/')
        );
	}

	/**
	 * echoSimpleTypesAsStruct
	 *
	 * @param $inputString
	 * @param $inputInteger
	 * @param $inputFloat
	 * @return SOAPStruct
	 */
	public function echoSimpleTypesAsStruct($inputString, $inputInteger, $inputFloat) {
        return $this->__soapCall(
            'echoSimpleTypesAsStruct',
            array(
            $inputString,
            $inputInteger,
            $inputFloat
	            ),
            array('uri'=>'http://soapinterop.org/')
        );
	}

	/**
	 * echo2DStringArray
	 *
	 * @param $input2DStringArray
	 * @return ArrayOfString
	 */
	public function echo2DStringArray($input2DStringArray) {
        return $this->__soapCall(
            'echo2DStringArray',
            array($input2DStringArray),
            array('uri'=>'http://soapinterop.org/')
        );
	}

	/**
	 * echoNestedStruct
	 *
	 * @param SOAPStructStruct $inputStruct
	 * @return SOAPStructStruct
	 */
	public function echoNestedStruct(SOAPStructStruct $inputStruct) {
        return $this->__soapCall(
            'echoNestedStruct',
            array($inputStruct),
            array('uri'=>'http://soapinterop.org/')
        );
	}

	/**
	 * echoNestedArray
	 *
	 * @param SOAPArrayStruct $inputStruct
	 * @return SOAPArrayStruct
	 */
	public function echoNestedArray(SOAPArrayStruct $inputStruct) {
        return $this->__soapCall(
            'echoNestedArray',
            array($inputStruct),
            array('uri'=>'http://soapinterop.org/')
        );
	}
}
