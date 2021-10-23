<?php

namespace FUCHSA\WOEHRL\TMAService\Structs;

/**
 * This class stands for EmailAttachments Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EmailAttachments
 * @subpackage Structs
 * @date October 20, 2021, 7:49 pm
 * @author Alexander Fuchs <alex-fuchs@online.de>
 */
class EmailAttachments
{
    /**
     * The EmailAttachment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \FUCHSA\WOEHRL\TMAService\Structs\EmailAttachment[]
     */
    public $EmailAttachment;
    /**
     * Constructor method for EmailAttachments
     * @uses EmailAttachments::setEmailAttachment()
     * @param \FUCHSA\WOEHRL\TMAService\Structs\EmailAttachment[] $emailAttachment
     */
    public function __construct(array $emailAttachment = array())
    {
        $this
            ->setEmailAttachment($emailAttachment);
    }
    /**
     * Get EmailAttachment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FUCHSA\WOEHRL\TMAService\Structs\EmailAttachment[]|null
     */
    public function getEmailAttachment()
    {
        return isset($this->EmailAttachment) ? $this->EmailAttachment : null;
    }
    /**
     * Set EmailAttachment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \FUCHSA\WOEHRL\TMAService\Structs\EmailAttachment[] $emailAttachment
     * @return \FUCHSA\WOEHRL\TMAService\Structs\EmailAttachments
     */
    public function setEmailAttachment(array $emailAttachment = array())
    {
        if (is_null($emailAttachment) || (is_array($emailAttachment) && empty($emailAttachment))) {
            unset($this->EmailAttachment);
        } else {
            $this->EmailAttachment = $emailAttachment;
        }
        return $this;
    }
    /**
     * Add item to EmailAttachment value
     * @throws \InvalidArgumentException
     * @param \FUCHSA\WOEHRL\TMAService\Structs\EmailAttachment $item
     * @return \FUCHSA\WOEHRL\TMAService\Structs\EmailAttachments
     */
    public function addToEmailAttachment(\FUCHSA\WOEHRL\TMAService\Structs\EmailAttachment $item)
    {
        $this->EmailAttachment[] = $item;
        return $this;
    }
}
