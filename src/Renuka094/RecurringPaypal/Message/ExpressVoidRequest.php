<?php

namespace Renuka094\RecurringPaypal\Message;

/**
 * PayPal Express Void Request
 */
class ExpressVoidRequest extends AbstractRequest
{
    public function getData()
    {
        $this->validate('transactionReference');
        $data = $this->getBaseData();
        $data['METHOD'] = 'DoVoid';
        $data['AUTHORIZATIONID'] = $this->getTransactionReference();
        return $data;
    }
}
