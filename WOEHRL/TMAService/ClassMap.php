<?php

namespace FUCHSA\WOEHRL\TMAService;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'Send' => '\\FUCHSA\\WOEHRL\\TMAService\\Structs\\Send',
            'ApiAuthentication' => '\\FUCHSA\\WOEHRL\\TMAService\\Structs\\ApiAuthentication',
            'SendResponse' => '\\FUCHSA\\WOEHRL\\TMAService\\Structs\\SendResponse',
            'GetInfo' => '\\FUCHSA\\WOEHRL\\TMAService\\Structs\\GetInfo',
            'GetInfoResponse' => '\\FUCHSA\\WOEHRL\\TMAService\\Structs\\GetInfoResponse',
            'SendRequest' => '\\FUCHSA\\WOEHRL\\TMAService\\Structs\\SendRequest',
            'Subscriber' => '\\FUCHSA\\WOEHRL\\TMAService\\Structs\\Subscriber',
            'Fields' => '\\FUCHSA\\WOEHRL\\TMAService\\Structs\\Fields',
            'Field' => '\\FUCHSA\\WOEHRL\\TMAService\\Structs\\Field',
            'FieldSingleSelect' => '\\FUCHSA\\WOEHRL\\TMAService\\Structs\\FieldSingleSelect',
            'FieldHtml' => '\\FUCHSA\\WOEHRL\\TMAService\\Structs\\FieldHtml',
            'FieldXml' => '\\FUCHSA\\WOEHRL\\TMAService\\Structs\\FieldXml',
            'FieldDateTime' => '\\FUCHSA\\WOEHRL\\TMAService\\Structs\\FieldDateTime',
            'FieldMultiSelect' => '\\FUCHSA\\WOEHRL\\TMAService\\Structs\\FieldMultiSelect',
            'MultiSelectValue' => '\\FUCHSA\\WOEHRL\\TMAService\\Structs\\MultiSelectValue',
            'FieldBoolean' => '\\FUCHSA\\WOEHRL\\TMAService\\Structs\\FieldBoolean',
            'FieldDate' => '\\FUCHSA\\WOEHRL\\TMAService\\Structs\\FieldDate',
            'FieldDecimal' => '\\FUCHSA\\WOEHRL\\TMAService\\Structs\\FieldDecimal',
            'FieldInteger' => '\\FUCHSA\\WOEHRL\\TMAService\\Structs\\FieldInteger',
            'FieldString' => '\\FUCHSA\\WOEHRL\\TMAService\\Structs\\FieldString',
            'EmailAttachments' => '\\FUCHSA\\WOEHRL\\TMAService\\Structs\\EmailAttachments',
            'EmailAttachment' => '\\FUCHSA\\WOEHRL\\TMAService\\Structs\\EmailAttachment',
            'GetInfoRequest' => '\\FUCHSA\\WOEHRL\\TMAService\\Structs\\GetInfoRequest',
            'TransactionalMailInfo' => '\\FUCHSA\\WOEHRL\\TMAService\\Structs\\TransactionalMailInfo',
            'TransactionalMailReactionInfo' => '\\FUCHSA\\WOEHRL\\TMAService\\Structs\\TransactionalMailReactionInfo',
        );
    }
}
