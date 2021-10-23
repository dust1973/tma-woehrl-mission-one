<?php

namespace FUCHSA\WOEHRL\TMAService\Structs;

/**
 * This class stands for MultiSelectValue Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:MultiSelectValue
 * @subpackage Structs
 * @date October 20, 2021, 7:49 pm
 * @author Alexander Fuchs <alex-fuchs@online.de>
 */
class MultiSelectValue
{
    /**
     * The string
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $string;
    /**
     * Constructor method for MultiSelectValue
     * @uses MultiSelectValue::setString()
     * @param string[] $string
     */
    public function __construct(array $string = array())
    {
        $this
            ->setString($string);
    }
    /**
     * Get string value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getString()
    {
        return isset($this->string) ? $this->string : null;
    }
    /**
     * Set string value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string[] $string
     * @return \FUCHSA\WOEHRL\TMAService\Structs\MultiSelectValue
     */
    public function setString(array $string = array())
    {
        if (is_null($string) || (is_array($string) && empty($string))) {
            unset($this->string);
        } else {
            $this->string = $string;
        }
        return $this;
    }
    /**
     * Add item to string value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \FUCHSA\WOEHRL\TMAService\Structs\MultiSelectValue
     */
    public function addToString($item)
    {
        $this->string[] = $item;
        return $this;
    }
}
