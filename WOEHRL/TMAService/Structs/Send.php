<?php

namespace FUCHSA\WOEHRL\TMAService\Structs;

/**
 * This class stands for Send Structs
 * @subpackage Structs
 * @date October 20, 2021, 7:49 pm
 * @author Alexander Fuchs <alex-fuchs@online.de>
 */
class Send
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \FUCHSA\WOEHRL\TMAService\Structs\SendRequest
     */
    public $request;
    /**
     * Constructor method for Send
     * @uses Send::setRequest()
     * @param \FUCHSA\WOEHRL\TMAService\Structs\SendRequest $request
     */
    public function __construct(\FUCHSA\WOEHRL\TMAService\Structs\SendRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FUCHSA\WOEHRL\TMAService\Structs\SendRequest|null
     */
    public function getRequest()
    {
        return isset($this->request) ? $this->request : null;
    }
    /**
     * Set request value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \FUCHSA\WOEHRL\TMAService\Structs\SendRequest $request
     * @return \FUCHSA\WOEHRL\TMAService\Structs\Send
     */
    public function setRequest(\FUCHSA\WOEHRL\TMAService\Structs\SendRequest $request = null)
    {
        if (is_null($request) || (is_array($request) && empty($request))) {
            unset($this->request);
        } else {
            $this->request = $request;
        }
        return $this;
    }
}
