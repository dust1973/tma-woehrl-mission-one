<?php

namespace FUCHSA\WOEHRL\TMAService;

/**
 * This class stands for ResponseStatus
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ResponseStatus
 * @subpackage Enumerations
 * @date October 20, 2021, 7:49 pm
 * @author Alexander Fuchs <alex-fuchs@online.de>
 */
class ResponseStatus
{
    /**
     * Constant for value 'Success'
     * @return string 'Success'
     */
    const VALUE_SUCCESS = 'Success';
    /**
     * Constant for value 'Error'
     * @return string 'Error'
     */
    const VALUE_ERROR = 'Error';
    /**
     * Return allowed values
     * @uses self::VALUE_SUCCESS
     * @uses self::VALUE_ERROR
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SUCCESS,
            self::VALUE_ERROR,
        );
    }
}
