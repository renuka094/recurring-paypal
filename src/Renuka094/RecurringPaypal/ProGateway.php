<?php
namespace Renuka094\RecurringPaypal;

use Omnipay\Common\AbstractGateway;

/**
 * PayPal Pro Class
 */
class ProGateway extends AbstractGateway
{
    public function getName()
    {
        return 'PayPal Pro';
    }

    public function getDefaultParameters()
    {
        return array(
            'username' => '',
            'password' => '',
            'signature' => '',
            'testMode' => false,
        );
    }

    public function getUsername()
    {
        return $this->getParameter('username');
    }

    public function setUsername($value)
    {
        return $this->setParameter('username', $value);
    }

    public function getPassword()
    {
        return $this->getParameter('password');
    }

    public function setPassword($value)
    {
        return $this->setParameter('password', $value);
    }

    public function getSignature()
    {
        return $this->getParameter('signature');
    }

    public function setSignature($value)
    {
        return $this->setParameter('signature', $value);
    }

    public function authorize(array $parameters = array())
    {
        return $this->createRequest('\Renuka094\RecurringPaypal\Message\ProAuthorizeRequest', $parameters);
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Renuka094\RecurringPaypal\Message\ProPurchaseRequest', $parameters);
    }

    public function capture(array $parameters = array())
    {
        return $this->createRequest('\Renuka094\RecurringPaypal\Message\CaptureRequest', $parameters);
    }

    public function refund(array $parameters = array())
    {
        return $this->createRequest('\Renuka094\RecurringPaypal\Message\RefundRequest', $parameters);
    }

    public function fetchTransaction(array $parameters = array())
    {
        return $this->createRequest('\Renuka094\RecurringPaypal\Message\FetchTransactionRequest', $parameters);
    }
}
