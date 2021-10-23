<?php

namespace FUCHSA\WOEHRL\TMAService\Structs;

/**
 * This class stands for FieldSingleSelect Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FieldSingleSelect
 * @subpackage Structs
 * @date October 20, 2021, 7:49 pm
 * @author Alexander Fuchs <alex-fuchs@online.de>
 */
class FieldSingleSelect extends Field
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Value;
    /**
     * Constructor method for FieldSingleSelect
     * @uses FieldSingleSelect::setValue()
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
     * @return \FUCHSA\WOEHRL\TMAService\Structs\FieldSingleSelect
     */
    public function setValue($value = null)
    {
        $this->Value = $value;
        return $this;
    }
}
