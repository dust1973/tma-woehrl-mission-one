<?php

namespace FUCHSA\WOEHRL\TMAService\Structs;

/**
 * This class stands for Field Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Field
 * @subpackage Structs
 * @date October 20, 2021, 7:49 pm
 * @author Alexander Fuchs <alex-fuchs@online.de>
 */
class Field
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * Constructor method for Field
     * @uses Field::setName()
     * @param string $name
     */
    public function __construct($name = null)
    {
        $this
            ->setName($name);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \FUCHSA\WOEHRL\TMAService\Structs\Field
     */
    public function setName($name = null)
    {
        $this->Name = $name;
        return $this;
    }
    static public function fromSOAP( string $xml ) {
        var_dump($xml);
    }
    static public function toSOAP( Field $Outgoing ) {
        var_dump($Outgoing);
    }
}
