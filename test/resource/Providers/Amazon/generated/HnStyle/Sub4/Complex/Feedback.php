<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class Feedback
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $FeedbackRating;
    /**
     * @var string
     */
    public $FeedbackComments;
    /**
     * @var string
     */
    public $FeedbackDate;
    /**
     * @var string
     */
    public $FeedbackRater;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setFeedbackRating($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FeedbackRating');
        }
        $this->FeedbackRating = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setFeedbackComments($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FeedbackComments');
        }
        $this->FeedbackComments = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setFeedbackDate($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FeedbackDate');
        }
        $this->FeedbackDate = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setFeedbackRater($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FeedbackRater');
        }
        $this->FeedbackRater = (int)$val;
    }
}
