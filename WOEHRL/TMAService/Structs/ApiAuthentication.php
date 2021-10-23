<?php

namespace FUCHSA\WOEHRL\TMAService\Structs;

/**
 * This class stands for ApiAuthentication Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ApiAuthentication
 * @subpackage Structs
 * @date October 20, 2021, 7:49 pm
 * @author Alexander Fuchs <alex-fuchs@online.de>
 */
class ApiAuthentication
{
    /**
     * The CustomerId
     * @var int
     */
    public $CustomerId;
    /**
     * The ApiKey
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ApiKey;
    /**
     * Constructor method for ApiAuthentication
     * @uses ApiAuthentication::setCustomerId()
     * @uses ApiAuthentication::setApiKey()
     * @param int $customerId
     * @param string $apiKey
     */
    public function __construct($customerId = null, $apiKey = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setApiKey($apiKey);
    }
    /**
     * Get CustomerId value
     * @return int|null
     */
    public function getCustomerId()
    {
        return $this->CustomerId;
    }
    /**
     * Set CustomerId value
     * @param int $customerId
     * @return \FUCHSA\WOEHRL\TMAService\Structs\ApiAuthentication
     */
    public function setCustomerId($customerId = null)
    {
        $this->CustomerId = $customerId;
        return $this;
    }
    /**
     * Get ApiKey value
     * @return string|null
     */
    public function getApiKey()
    {
        return $this->ApiKey;
    }
    /**
     * Set ApiKey value
     * @param string $apiKey
     * @return \FUCHSA\WOEHRL\TMAService\Structs\ApiAuthentication
     */
    public function setApiKey($apiKey = null)
    {
        $this->ApiKey = $apiKey;
        return $this;
    }
}
