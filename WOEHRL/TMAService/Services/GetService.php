<?php

namespace FUCHSA\WOEHRL\TMAService\Services;

use SoapClient;

/**
 * This class stands for Get Services
 * @subpackage Services
 * @date October 20, 2021, 7:49 pm
 * @author Alexander Fuchs <alex-fuchs@online.de>
 */
class GetService extends SoapClient
{

    /**
     * @var
     */
    private $result;

    /**
     * Sets the ApiAuthentication SoapHeader param
     * @param array $soapheaders
     * @return bool
     * @uses SoapClient::setSoapHeader()
     */
    public function setSoapHeaders(array $soapheaders): bool
    {
        return $this->__setSoapHeaders($soapheaders);
    }
    /**
     * Method to call the operation originally named GetInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ApiAuthentication
     * - SOAPHeaderNamespaces: http://mission-one.de/tmaservice201708
     * - SOAPHeaderTypes: \FUCHSA\WOEHRL\TMAService\Structs\ApiAuthentication
     * - SOAPHeaders: required
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \FUCHSA\WOEHRL\TMAService\Structs\GetInfo $parameters
     * @return \FUCHSA\WOEHRL\TMAService\Structs\GetInfoResponse|bool
     */
    public function GetInfo(\FUCHSA\WOEHRL\TMAService\Structs\GetInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetInfo', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return \FUCHSA\WOEHRL\TMAService\Structs\SendResponse
     */
    public function getResult()
    {
        return $this->result->SendResult;
    }

    /**
     * @param string $__METHOD__
     * @param \Exception $soapFault
     */
    private function saveLastError(string $__METHOD__, \Exception $soapFault)
    {
    }

    /**
     * @param $__soapCall
     */
    private function setResult($__soapCall)
    {
        $this->result = $__soapCall;
    }
}
