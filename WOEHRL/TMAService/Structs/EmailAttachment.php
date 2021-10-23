<?php

namespace FUCHSA\WOEHRL\TMAService\Structs;

/**
 * This class stands for EmailAttachment Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EmailAttachment
 * @subpackage Structs
 * @date October 20, 2021, 7:49 pm
 * @author Alexander Fuchs <alex-fuchs@online.de>
 */
class EmailAttachment
{
    /**
     * The FileName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $FileName;
    /**
     * The ContentData
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ContentData;
    /**
     * Constructor method for EmailAttachment
     * @uses EmailAttachment::setFileName()
     * @uses EmailAttachment::setContentData()
     * @param string $fileName
     * @param string $contentData
     */
    public function __construct($fileName = null, $contentData = null)
    {
        $this
            ->setFileName($fileName)
            ->setContentData($contentData);
    }
    /**
     * Get FileName value
     * @return string|null
     */
    public function getFileName()
    {
        return $this->FileName;
    }
    /**
     * Set FileName value
     * @param string $fileName
     * @return \FUCHSA\WOEHRL\TMAService\Structs\EmailAttachment
     */
    public function setFileName($fileName = null)
    {
        $this->FileName = $fileName;
        return $this;
    }
    /**
     * Get ContentData value
     * @return string|null
     */
    public function getContentData()
    {
        return $this->ContentData;
    }
    /**
     * Set ContentData value
     * @param string $contentData
     * @return \FUCHSA\WOEHRL\TMAService\Structs\EmailAttachment
     */
    public function setContentData($contentData = null)
    {
        $this->ContentData = $contentData;
        return $this;
    }
}
