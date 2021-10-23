<?php

namespace FUCHSA\WOEHRL\TMAService\Structs;

/**
 * This class stands for FieldMultiSelect Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FieldMultiSelect
 * @subpackage Structs
 * @date October 20, 2021, 7:49 pm
 * @author Alexander Fuchs <alex-fuchs@online.de>
 */
class FieldMultiSelect extends Field
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FUCHSA\WOEHRL\TMAService\Structs\MultiSelectValue
     */
    public $Value;
    /**
     * Constructor method for FieldMultiSelect
     * @uses FieldMultiSelect::setValue()
     * @param \FUCHSA\WOEHRL\TMAService\Structs\MultiSelectValue $value
     */
    public function __construct(\FUCHSA\WOEHRL\TMAService\Structs\MultiSelectValue $value = null)
    {
        $this
            ->setValue($value);
    }
    /**
     * Get Value value
     * @return \FUCHSA\WOEHRL\TMAService\Structs\MultiSelectValue|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param \FUCHSA\WOEHRL\TMAService\Structs\MultiSelectValue $value
     * @return \FUCHSA\WOEHRL\TMAService\Structs\FieldMultiSelect
     */
    public function setValue(\FUCHSA\WOEHRL\TMAService\Structs\MultiSelectValue $value = null)
    {
        $this->Value = $value;
        return $this;
    }
}
