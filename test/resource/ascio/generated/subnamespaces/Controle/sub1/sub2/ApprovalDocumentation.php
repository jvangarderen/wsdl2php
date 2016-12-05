<?php

namespace Controle\sub1\sub2;

class ApprovalDocumentation
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\ApprovalDocumentationType
	 */
	public $Type;
	/**
	 * @var array \Controle\sub1\sub2\string
	 */
	public $ObjectNames;
	/**
	 * @var string
	 */
	public $OrderId;
	/**
	 * @var array \Controle\sub1\sub2\Attachment
	 */
	public $Attachments;
	/**
	 * @var \Controle\sub1\sub2\Extensions
	 */
	public $Extensions;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ApprovalDocumentationType $val
	 * @throws Exception
	 */
	public function setType($val)
	{
        $this->Type = (ApprovalDocumentationType)$val;
	}

	/**
	 * @param ArrayOfstring $val
	 * @throws Exception
	 */
	public function setObjectNames($val)
	{
        $this->ObjectNames = (ArrayOfstring)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOrderId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for OrderId');
        }
        $this->OrderId = (string)$val;
	}

	/**
	 * @param ArrayOfAttachment $val
	 * @throws Exception
	 */
	public function setAttachments($val)
	{
        $this->Attachments = (ArrayOfAttachment)$val;
	}

	/**
	 * @param Extensions $val
	 * @throws Exception
	 */
	public function setExtensions($val)
	{
        $this->Extensions = (Extensions)$val;
	}
}
