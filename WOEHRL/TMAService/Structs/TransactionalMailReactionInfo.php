<?php

namespace FUCHSA\WOEHRL\TMAService\Structs;

/**
 * This class stands for TransactionalMailReactionInfo Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TransactionalMailReactionInfo
 * @subpackage Structs
 * @date October 20, 2021, 7:49 pm
 * @author Alexander Fuchs <alex-fuchs@online.de>
 */
class TransactionalMailReactionInfo
{
    /**
     * The IsOpened
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOpened;
    /**
     * The IsClicked
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsClicked;
    /**
     * Constructor method for TransactionalMailReactionInfo
     * @uses TransactionalMailReactionInfo::setIsOpened()
     * @uses TransactionalMailReactionInfo::setIsClicked()
     * @param bool $isOpened
     * @param bool $isClicked
     */
    public function __construct($isOpened = null, $isClicked = null)
    {
        $this
            ->setIsOpened($isOpened)
            ->setIsClicked($isClicked);
    }
    /**
     * Get IsOpened value
     * @return bool|null
     */
    public function getIsOpened()
    {
        return $this->IsOpened;
    }
    /**
     * Set IsOpened value
     * @param bool $isOpened
     * @return \FUCHSA\WOEHRL\TMAService\Structs\TransactionalMailReactionInfo
     */
    public function setIsOpened($isOpened = null)
    {
        $this->IsOpened = $isOpened;
        return $this;
    }
    /**
     * Get IsClicked value
     * @return bool|null
     */
    public function getIsClicked()
    {
        return $this->IsClicked;
    }
    /**
     * Set IsClicked value
     * @param bool $isClicked
     * @return \FUCHSA\WOEHRL\TMAService\Structs\TransactionalMailReactionInfo
     */
    public function setIsClicked($isClicked = null)
    {
        $this->IsClicked = $isClicked;
        return $this;
    }
}
