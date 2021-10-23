<?php

namespace FUCHSA\WOEHRL\TMAService\Structs;

/**
 * This class stands for FieldHtml Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FieldHtml
 * @subpackage Structs
 * @date October 20, 2021, 7:49 pm
 * @author Alexander Fuchs <alex-fuchs@online.de>
 */
class FieldHtml extends Field
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Value;
    /**
     * Constructor method for FieldHtml
     * @uses FieldHtml::setValue()
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
     * @return \FUCHSA\WOEHRL\TMAService\Structs\FieldHtml
     */
    public function setValue($value = null)
    {
        $this->Value = $value;
        return $this;
    }
}
