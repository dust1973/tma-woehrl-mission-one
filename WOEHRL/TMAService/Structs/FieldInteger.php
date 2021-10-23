<?php

namespace FUCHSA\WOEHRL\TMAService\Structs;

/**
 * This class stands for FieldInteger Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FieldInteger
 * @subpackage Structs
 * @date October 20, 2021, 7:49 pm
 * @author Alexander Fuchs <alex-fuchs@online.de>
 */
class FieldInteger extends Field
{
    /**
     * The Value
     * @var int
     */
    public $Value;
    /**
     * Constructor method for FieldInteger
     * @uses FieldInteger::setValue()
     * @param int $value
     */
    public function __construct($value = null)
    {
        $this
            ->setValue($value);
    }
    /**
     * Get Value value
     * @return int|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param int $value
     * @return \FUCHSA\WOEHRL\TMAService\Structs\FieldInteger
     */
    public function setValue($value = null)
    {
        $this->Value = $value;
        return $this;
    }
}
