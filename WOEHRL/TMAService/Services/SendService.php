<?php

namespace FUCHSA\WOEHRL\TMAService\Services;

use SoapClient;

/**
 * This class stands for Send Services
 * @subpackage Services
 * @date October 20, 2021, 7:49 pm
 * @author Alexander Fuchs <alex-fuchs@online.de>
 */
class SendService extends SoapClient
{

    /**
     * @var
     */
    private $result;

    /**
     * Sets the ApiAuthentication SoapHeader param
     * @uses SoapClient::setSoapHeader()
     * @param array $soapheaders
     * @return bool
     */
    public function setSoapHeaders($soapheaders): bool
    {
        return $this->__setSoapHeaders($soapheaders);
    }
    /**
     * Method to call the operation originally named Send
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: ApiAuthentication
     * - SOAPHeaderNamespaces: http://mission-one.de/tmaservice201708
     * - SOAPHeaderTypes: \FUCHSA\WOEHRL\TMAService\Structs\ApiAuthentication
     * - SOAPHeaders: required
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \FUCHSA\WOEHRL\TMAService\Structs\Send $parameters
     * @return \FUCHSA\WOEHRL\TMAService\Structs\SendResponse|bool
     */
    public function Send(\FUCHSA\WOEHRL\TMAService\Structs\Send $parameters)
    {
        try {
            $this->setResult($this->__soapCall('Send', array(
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
