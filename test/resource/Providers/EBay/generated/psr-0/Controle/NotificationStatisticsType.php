<?php

namespace Controle;

/**
 * NotificationStatisticsType
 * Summary information about notifications delivered, failed, errors, queued for a given application
 * ID and time period.
 */
class NotificationStatisticsType
{
	/**
	 * @var int | Returns the number of notifications delivered successfully during the given time period.
	 */
	public $deliveredcount;
	/**
	 * @var int | Returns the number of new notifications that were queued during the given time period.
	 */
	public $queuednewcount;
	/**
	 * @var int | Returns the number of pending notifications in the queue during the given time period.
	 */
	public $queuedpendingcount;
	/**
	 * @var int | Returns the number of notifications that permanently failed during the given time period.
	 */
	public $expiredcount;
	/**
	 * @var int | Returns the number of notifications for which there were delivery errors during the given
	 * time period.
	 */
	public $errorcount;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setDeliveredCount($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->deliveredcount = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setQueuedNewCount($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->queuednewcount = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setQueuedPendingCount($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->queuedpendingcount = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setExpiredCount($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->expiredcount = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setErrorCount($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->errorcount = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (int)$val;
	}
}
