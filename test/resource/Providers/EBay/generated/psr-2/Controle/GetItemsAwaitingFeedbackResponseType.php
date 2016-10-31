<?php

namespace Controle;

/**
 * GetItemsAwaitingFeedbackResponseType
 * Response to GetItemsAwaitingFeedback.
 */
class GetItemsAwaitingFeedbackResponseType extends
 \Controle\AbstractResponseType
{
    /**
     * @var \Controle\PaginatedTransactionArrayType | Contains the items awaiting feedback. Returned only if there are items that do not yet have
     * feedback.
     */
    public $itemsawaitingfeedback;
    /**
     * @param PaginatedTransactionArrayType $val
     * @throws Exception
     */
    public function setItemsAwaitingFeedback($val)
    {
        $this->itemsawaitingfeedback = (int)$val;
    }
}
