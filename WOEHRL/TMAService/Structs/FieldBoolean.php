<?php

namespace FUCHSA\WOEHRL\TMAService\Structs;

/**
 * This class stands for FieldBoolean Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FieldBoolean
 * @subpackage Structs
 * @date October 20, 2021, 7:49 pm
 * @author Alexander Fuchs <alex-fuchs@online.de>
 */
class FieldBoolean extends Field
{
    /**
     * The Value
     * @var bool
     */
    public $Value;
    /**
     * Constructor method for FieldBoolean
     * @uses FieldBoolean::setValue()
     * @param bool $value
     */
    public function __construct($value = null)
    {
        $this
            ->setValue($value);
    }
    /**
     * Get Value value
     * @return bool|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param bool $value
     * @return \FUCHSA\WOEHRL\TMAService\Structs\FieldBoolean
     */
    public function setValue($value = null)
    {
        $this->Value = $value;
        return $this;
    }
}
