<?php

namespace FUCHSA\WOEHRL\TMAService\Structs;

/**
 * This class stands for GetInfoResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetInfoResponse
 * @subpackage Structs
 * @date October 20, 2021, 7:49 pm
 * @author Alexander Fuchs <alex-fuchs@online.de>
 */
class GetInfoResponse
{
    /**
     * The GetInfoResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \FUCHSA\WOEHRL\TMAService\Structs\GetInfoResponse
     */
    public $GetInfoResult;
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
     * The TransactionalMailInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \FUCHSA\WOEHRL\TMAService\Structs\TransactionalMailInfo
     */
    public $TransactionalMailInfo;
    /**
     * Constructor method for GetInfoResponse
     * @uses GetInfoResponse::setGetInfoResult()
     * @uses GetInfoResponse::setStatus()
     * @uses GetInfoResponse::setDiagnosticCode()
     * @uses GetInfoResponse::setTransactionalMailInfo()
     * @param \FUCHSA\WOEHRL\TMAService\Structs\GetInfoResponse $getInfoResult
     * @param string $status
     * @param string $diagnosticCode
     * @param \FUCHSA\WOEHRL\TMAService\Structs\TransactionalMailInfo $transactionalMailInfo
     */
    public function __construct(\FUCHSA\WOEHRL\TMAService\Structs\GetInfoResponse $getInfoResult = null, $status = null, $diagnosticCode = null, \FUCHSA\WOEHRL\TMAService\Structs\TransactionalMailInfo $transactionalMailInfo = null)
    {
        $this
            ->setGetInfoResult($getInfoResult)
            ->setStatus($status)
            ->setDiagnosticCode($diagnosticCode)
            ->setTransactionalMailInfo($transactionalMailInfo);
    }
    /**
     * Get GetInfoResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FUCHSA\WOEHRL\TMAService\Structs\GetInfoResponse|null
     */
    public function getGetInfoResult()
    {
        return isset($this->GetInfoResult) ? $this->GetInfoResult : null;
    }
    /**
     * Set GetInfoResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \FUCHSA\WOEHRL\TMAService\Structs\GetInfoResponse $getInfoResult
     * @return \FUCHSA\WOEHRL\TMAService\Structs\GetInfoResponse
     */
    public function setGetInfoResult(\FUCHSA\WOEHRL\TMAService\Structs\GetInfoResponse $getInfoResult = null)
    {
        if (is_null($getInfoResult) || (is_array($getInfoResult) && empty($getInfoResult))) {
            unset($this->GetInfoResult);
        } else {
            $this->GetInfoResult = $getInfoResult;
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
     * @return \FUCHSA\WOEHRL\TMAService\Structs\GetInfoResponse
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
     * @return \FUCHSA\WOEHRL\TMAService\Structs\GetInfoResponse
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
     * Get TransactionalMailInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FUCHSA\WOEHRL\TMAService\Structs\TransactionalMailInfo|null
     */
    public function getTransactionalMailInfo()
    {
        return isset($this->TransactionalMailInfo) ? $this->TransactionalMailInfo : null;
    }
    /**
     * Set TransactionalMailInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \FUCHSA\WOEHRL\TMAService\Structs\TransactionalMailInfo $transactionalMailInfo
     * @return \FUCHSA\WOEHRL\TMAService\Structs\GetInfoResponse
     */
    public function setTransactionalMailInfo(\FUCHSA\WOEHRL\TMAService\Structs\TransactionalMailInfo $transactionalMailInfo = null)
    {
        if (is_null($transactionalMailInfo) || (is_array($transactionalMailInfo) && empty($transactionalMailInfo))) {
            unset($this->TransactionalMailInfo);
        } else {
            $this->TransactionalMailInfo = $transactionalMailInfo;
        }
        return $this;
    }
}
