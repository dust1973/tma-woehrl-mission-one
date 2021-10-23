<?php

namespace FUCHSA\WOEHRL\TMAService\Structs;

/**
 * This class stands for SendRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SendRequest
 * @subpackage Structs
 * @date October 20, 2021, 7:49 pm
 * @author Alexander Fuchs <alex-fuchs@online.de>
 */
class SendRequest
{
    /**
     * The TransactionalDispatchPublicId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $TransactionalDispatchPublicId;
    /**
     * The NewsletterId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $NewsletterId;
    /**
     * The Subscriber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FUCHSA\WOEHRL\TMAService\Structs\Subscriber
     */
    public $Subscriber;
    /**
     * Constructor method for SendRequest
     * @uses SendRequest::setTransactionalDispatchPublicId()
     * @uses SendRequest::setNewsletterId()
     * @uses SendRequest::setSubscriber()
     * @param string $transactionalDispatchPublicId
     * @param int $newsletterId
     * @param \FUCHSA\WOEHRL\TMAService\Structs\Subscriber $subscriber
     */
    public function __construct($transactionalDispatchPublicId = null, $newsletterId = null, \FUCHSA\WOEHRL\TMAService\Structs\Subscriber $subscriber = null)
    {
        $this
            ->setTransactionalDispatchPublicId($transactionalDispatchPublicId)
            ->setNewsletterId($newsletterId)
            ->setSubscriber($subscriber);
    }
    /**
     * Get TransactionalDispatchPublicId value
     * @return string|null
     */
    public function getTransactionalDispatchPublicId()
    {
        return $this->TransactionalDispatchPublicId;
    }
    /**
     * Set TransactionalDispatchPublicId value
     * @param string $transactionalDispatchPublicId
     * @return \FUCHSA\WOEHRL\TMAService\Structs\SendRequest
     */
    public function setTransactionalDispatchPublicId($transactionalDispatchPublicId = null)
    {
        $this->TransactionalDispatchPublicId = $transactionalDispatchPublicId;
        return $this;
    }
    /**
     * Get NewsletterId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getNewsletterId()
    {
        return isset($this->NewsletterId) ? $this->NewsletterId : null;
    }
    /**
     * Set NewsletterId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $newsletterId
     * @return \FUCHSA\WOEHRL\TMAService\Structs\SendRequest
     */
    public function setNewsletterId($newsletterId = null)
    {
        if (is_null($newsletterId) || (is_array($newsletterId) && empty($newsletterId))) {
            unset($this->NewsletterId);
        } else {
            $this->NewsletterId = $newsletterId;
        }
        return $this;
    }
    /**
     * Get Subscriber value
     * @return \FUCHSA\WOEHRL\TMAService\Structs\Subscriber|null
     */
    public function getSubscriber()
    {
        return $this->Subscriber;
    }
    /**
     * Set Subscriber value
     * @param \FUCHSA\WOEHRL\TMAService\Structs\Subscriber $subscriber
     * @return \FUCHSA\WOEHRL\TMAService\Structs\SendRequest
     */
    public function setSubscriber(\FUCHSA\WOEHRL\TMAService\Structs\Subscriber $subscriber = null)
    {
        $this->Subscriber = $subscriber;
        return $this;
    }
}
