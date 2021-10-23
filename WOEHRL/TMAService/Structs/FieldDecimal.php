<?php

namespace FUCHSA\WOEHRL\TMAService\Structs;

/**
 * This class stands for FieldDecimal Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FieldDecimal
 * @subpackage Structs
 * @date October 20, 2021, 7:49 pm
 * @author Alexander Fuchs <alex-fuchs@online.de>
 */
class FieldDecimal extends Field
{
    /**
     * The Value
     * @var float
     */
    public $Value;
    /**
     * Constructor method for FieldDecimal
     * @uses FieldDecimal::setValue()
     * @param float $value
     */
    public function __construct($value = null)
    {
        $this
            ->setValue($value);
    }
    /**
     * Get Value value
     * @return float|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param float $value
     * @return \FUCHSA\WOEHRL\TMAService\Structs\FieldDecimal
     */
    public function setValue($value = null)
    {
        $this->Value = $value;
        return $this;
    }
}
