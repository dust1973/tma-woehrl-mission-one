<?php

namespace FUCHSA\WOEHRL\TMAService\Structs;

/**
 * This class stands for FieldDate Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FieldDate
 * @subpackage Structs
 * @date October 20, 2021, 7:49 pm
 * @author Alexander Fuchs <alex-fuchs@online.de>
 */
class FieldDate extends Field
{
    /**
     * The Value
     * @var string
     */
    public $Value;
    /**
     * Constructor method for FieldDate
     * @uses FieldDate::setValue()
     * @param string $value
     */
    public function __construct($value = null)
    {
        $this
            ->setValue($value);
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \FUCHSA\WOEHRL\TMAService\Structs\FieldDate
     */
    public function setValue($value = null)
    {
        $this->Value = $value;
        return $this;
    }
}
