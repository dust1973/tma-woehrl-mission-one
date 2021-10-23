<?php

namespace FUCHSA\WOEHRL\TMAService\Structs;

/**
 * This class stands for SendResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SendResponse
 * @subpackage Structs
 * @date October 20, 2021, 7:49 pm
 * @author Alexander Fuchs <alex-fuchs@online.de>
 */
class SendResponse
{
    /**
     * The SendResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \FUCHSA\WOEHRL\TMAService\Structs\SendResponse
     */
    public $SendResult;
    /**
     * The Status
     * @var string
     */
    public $Status;
    /**
     * The DiagnosticCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DiagnosticCode;
    /**
     * The TransactionalDispatchPublicId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $TransactionalDispatchPublicId;
    /**
     * The TransactionalMailPublicId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $TransactionalMailPublicId;
    /**
     * Constructor method for SendResponse
     * @uses SendResponse::setSendResult()
     * @uses SendResponse::setStatus()
     * @uses SendResponse::setDiagnosticCode()
     * @uses SendResponse::setTransactionalDispatchPublicId()
     * @uses SendResponse::setTransactionalMailPublicId()
     * @param \FUCHSA\WOEHRL\TMAService\Structs\SendResponse $sendResult
     * @param string $status
     * @param string $diagnosticCode
     * @param string $transactionalDispatchPublicId
     * @param string $transactionalMailPublicId
     */
    public function __construct(\FUCHSA\WOEHRL\TMAService\Structs\SendResponse $sendResult = null, $status = null, $diagnosticCode = null, $transactionalDispatchPublicId = null, $transactionalMailPublicId = null)
    {
        $this
            ->setSendResult($sendResult)
            ->setStatus($status)
            ->setDiagnosticCode($diagnosticCode)
            ->setTransactionalDispatchPublicId($transactionalDispatchPublicId)
            ->setTransactionalMailPublicId($transactionalMailPublicId);
    }
    /**
     * Get SendResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FUCHSA\WOEHRL\TMAService\Structs\SendResponse|null
     */
    public function getSendResult()
    {
        return isset($this->SendResult) ? $this->SendResult : null;
    }
    /**
     * Set SendResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \FUCHSA\WOEHRL\TMAService\Structs\SendResponse $sendResult
     * @return \FUCHSA\WOEHRL\TMAService\Structs\SendResponse
     */
    public function setSendResult(\FUCHSA\WOEHRL\TMAService\Structs\SendResponse $sendResult = null)
    {
        if (is_null($sendResult) || (is_array($sendResult) && empty($sendResult))) {
            unset($this->SendResult);
        } else {
            $this->SendResult = $sendResult;
        }
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \FUCHSA\WOEHRL\TMAService\Structs\SendResponse
     */
    public function setStatus($status = null)
    {
        $this->Status = $status;
        return $this;
    }
    /**
     * Get DiagnosticCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDiagnosticCode()
    {
        return isset($this->DiagnosticCode) ? $this->DiagnosticCode : null;
    }
    /**
     * Set DiagnosticCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $diagnosticCode
     * @return \FUCHSA\WOEHRL\TMAService\Structs\SendResponse
     */
    public function setDiagnosticCode($diagnosticCode = null)
    {
        if (is_null($diagnosticCode) || (is_array($diagnosticCode) && empty($diagnosticCode))) {
            unset($this->DiagnosticCode);
        } else {
            $this->DiagnosticCode = $diagnosticCode;
        }
        return $this;
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
     * @return \FUCHSA\WOEHRL\TMAService\Structs\SendResponse
     */
    public function setTransactionalDispatchPublicId($transactionalDispatchPublicId = null)
    {
        $this->TransactionalDispatchPublicId = $transactionalDispatchPublicId;
        return $this;
    }
    /**
     * Get TransactionalMailPublicId value
     * @return string|null
     */
    public function getTransactionalMailPublicId()
    {
        return $this->TransactionalMailPublicId;
    }
    /**
     * Set TransactionalMailPublicId value
     * @param string $transactionalMailPublicId
     * @return \FUCHSA\WOEHRL\TMAService\Structs\SendResponse
     */
    public function setTransactionalMailPublicId($transactionalMailPublicId = null)
    {
        $this->TransactionalMailPublicId = $transactionalMailPublicId;
        return $this;
    }
}
