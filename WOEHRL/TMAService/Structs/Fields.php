<?php

namespace FUCHSA\WOEHRL\TMAService\Structs;

/**
 * This class stands for Fields Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Fields
 * @subpackage Structs
 * @date October 20, 2021, 7:49 pm
 * @author Alexander Fuchs <alex-fuchs@online.de>
 */
class Fields
{
    /**
     * The Field
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \FUCHSA\WOEHRL\TMAService\Structs\Field[]
     */
    public $Field;
    /**
     * Constructor method for Fields
     * @uses Fields::setField()
     * @param \FUCHSA\WOEHRL\TMAService\Structs\Field[] $field
     */
    public function __construct(array $field = array())
    {
        $this
            ->setField($field);
    }
    /**
     * Get Field value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FUCHSA\WOEHRL\TMAService\Structs\Field[]|null
     */
    public function getField()
    {
        return isset($this->Field) ? $this->Field : null;
    }
    /**
     * Set Field value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \FUCHSA\WOEHRL\TMAService\Structs\Field[] $field
     * @return \FUCHSA\WOEHRL\TMAService\Structs\Fields
     */
    public function setField(array $field = array())
    {
        if (is_null($field) || (is_array($field) && empty($field))) {
            unset($this->Field);
        } else {
            $this->Field = $field;
        }
        return $this;
    }
    /**
     * Add item to Field value
     * @throws \InvalidArgumentException
     * @param \FUCHSA\WOEHRL\TMAService\Structs\Field $item
     * @return \FUCHSA\WOEHRL\TMAService\Structs\Fields
     */
    public function addToField(\FUCHSA\WOEHRL\TMAService\Structs\Field $item)
    {
        $this->Field[] = $item;
        return $this;
    }
}
