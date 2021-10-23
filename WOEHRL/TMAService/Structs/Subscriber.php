<?php

namespace FUCHSA\WOEHRL\TMAService\Structs;

/**
 * This class stands for Subscriber Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Subscriber
 * @subpackage Structs
 * @date October 20, 2021, 7:49 pm
 * @author Alexander Fuchs <alex-fuchs@online.de>
 */
class Subscriber
{
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Email;
    /**
     * The Fields
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \FUCHSA\WOEHRL\TMAService\Structs\Fields
     */
    public $Fields;
    /**
     * The EmailAttachments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \FUCHSA\WOEHRL\TMAService\Structs\EmailAttachments
     */
    public $EmailAttachments;
    /**
     * Constructor method for Subscriber
     * @uses Subscriber::setEmail()
     * @uses Subscriber::setFields()
     * @uses Subscriber::setEmailAttachments()
     * @param string $email
     * @param \FUCHSA\WOEHRL\TMAService\Structs\Fields $fields
     * @param \FUCHSA\WOEHRL\TMAService\Structs\EmailAttachments $emailAttachments
     */
    public function __construct($email = null, \FUCHSA\WOEHRL\TMAService\Structs\Fields $fields = null, \FUCHSA\WOEHRL\TMAService\Structs\EmailAttachments $emailAttachments = null)
    {
        $this
            ->setEmail($email)
            ->setFields($fields)
            ->setEmailAttachments($emailAttachments);
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \FUCHSA\WOEHRL\TMAService\Structs\Subscriber
     */
    public function setEmail($email = null)
    {
        $this->Email = $email;
        return $this;
    }
    /**
     * Get Fields value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FUCHSA\WOEHRL\TMAService\Structs\Fields|null
     */
    public function getFields()
    {
        return isset($this->Fields) ? $this->Fields : null;
    }
    /**
     * Set Fields value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \FUCHSA\WOEHRL\TMAService\Structs\Fields $fields
     * @return \FUCHSA\WOEHRL\TMAService\Structs\Subscriber
     */
    public function setFields(\FUCHSA\WOEHRL\TMAService\Structs\Fields $fields = null)
    {
        if (is_null($fields) || (is_array($fields) && empty($fields))) {
            unset($this->Fields);
        } else {
            $this->Fields = $fields;
        }
        return $this;
    }
    /**
     * Get EmailAttachments value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FUCHSA\WOEHRL\TMAService\Structs\EmailAttachments|null
     */
    public function getEmailAttachments()
    {
        return isset($this->EmailAttachments) ? $this->EmailAttachments : null;
    }
    /**
     * Set EmailAttachments value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \FUCHSA\WOEHRL\TMAService\Structs\EmailAttachments $emailAttachments
     * @return \FUCHSA\WOEHRL\TMAService\Structs\Subscriber
     */
    public function setEmailAttachments(\FUCHSA\WOEHRL\TMAService\Structs\EmailAttachments $emailAttachments = null)
    {
        if (is_null($emailAttachments) || (is_array($emailAttachments) && empty($emailAttachments))) {
            unset($this->EmailAttachments);
        } else {
            $this->EmailAttachments = $emailAttachments;
        }
        return $this;
    }
}
