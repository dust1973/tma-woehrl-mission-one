<?php

namespace FUCHSA\WOEHRL\TMAService;

/**
 * This class stands for BounceType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BounceType
 * @subpackage Enumerations
 * @date October 20, 2021, 7:49 pm
 * @author Alexander Fuchs <alex-fuchs@online.de>
 */
class BounceType
{
    /**
     * Constant for value 'Soft'
     * @return string 'Soft'
     */
    const VALUE_SOFT = 'Soft';
    /**
     * Constant for value 'Hard'
     * @return string 'Hard'
     */
    const VALUE_HARD = 'Hard';
    /**
     * Return allowed values
     * @uses self::VALUE_SOFT
     * @uses self::VALUE_HARD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SOFT,
            self::VALUE_HARD,
        );
    }
}
