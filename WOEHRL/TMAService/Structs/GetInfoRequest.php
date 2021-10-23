<?php

namespace FUCHSA\WOEHRL\TMAService\Structs;

/**
 * This class stands for GetInfoRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetInfoRequest
 * @subpackage Structs
 * @date October 20, 2021, 7:49 pm
 * @author Alexander Fuchs <alex-fuchs@online.de>
 */
class GetInfoRequest
{
    /**
     * The TransactionalMailPublicId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $TransactionalMailPublicId;
    /**
     * Constructor method for GetInfoRequest
     * @uses GetInfoRequest::setTransactionalMailPublicId()
     * @param string $transactionalMailPublicId
     */
    public function __construct($transactionalMailPublicId = null)
    {
        $this
            ->setTransactionalMailPublicId($transactionalMailPublicId);
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
     * @return \FUCHSA\WOEHRL\TMAService\Structs\GetInfoRequest
     */
    public function setTransactionalMailPublicId($transactionalMailPublicId = null)
    {
        $this->TransactionalMailPublicId = $transactionalMailPublicId;
        return $this;
    }
}
