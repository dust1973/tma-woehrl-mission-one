<?php

namespace FUCHSA\WOEHRL\TMAService\Structs;

/**
 * This class stands for TransactionalMailInfo Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TransactionalMailInfo
 * @subpackage Structs
 * @date October 20, 2021, 7:49 pm
 * @author Alexander Fuchs <alex-fuchs@online.de>
 */
class TransactionalMailInfo
{
    /**
     * The TransactionalDispatchPublicId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $TransactionalDispatchPublicId;
    /**
     * The TransactionalMailPublicId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $TransactionalMailPublicId;
    /**
     * The IsBounced
     * @var bool
     */
    public $IsBounced;
    /**
     * The BounceType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BounceType;
    /**
     * The ReactionInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \FUCHSA\WOEHRL\TMAService\Structs\TransactionalMailReactionInfo
     */
    public $ReactionInfo;
    /**
     * Constructor method for TransactionalMailInfo
     * @uses TransactionalMailInfo::setTransactionalDispatchPublicId()
     * @uses TransactionalMailInfo::setTransactionalMailPublicId()
     * @uses TransactionalMailInfo::setIsBounced()
     * @uses TransactionalMailInfo::setBounceType()
     * @uses TransactionalMailInfo::setReactionInfo()
     * @param string $transactionalDispatchPublicId
     * @param string $transactionalMailPublicId
     * @param bool $isBounced
     * @param string $bounceType
     * @param \FUCHSA\WOEHRL\TMAService\Structs\TransactionalMailReactionInfo $reactionInfo
     */
    public function __construct($transactionalDispatchPublicId = null, $transactionalMailPublicId = null, $isBounced = null, $bounceType = null, \FUCHSA\WOEHRL\TMAService\Structs\TransactionalMailReactionInfo $reactionInfo = null)
    {
        $this
            ->setTransactionalDispatchPublicId($transactionalDispatchPublicId)
            ->setTransactionalMailPublicId($transactionalMailPublicId)
            ->setIsBounced($isBounced)
            ->setBounceType($bounceType)
            ->setReactionInfo($reactionInfo);
    }
    /**
     * Get TransactionalDispatchPublicId value
     * @return string|null
     */
    public function getTransactionalDispatchPublicId()
    {
        return $this->TransactionalDispatchPublicId;
    }
    /**
     * Set TransactionalDispatchPublicId value
     * @param string $transactionalDispatchPublicId
     * @return \FUCHSA\WOEHRL\TMAService\Structs\TransactionalMailInfo
     */
    public function setTransactionalDispatchPublicId($transactionalDispatchPublicId = null)
    {
        $this->TransactionalDispatchPublicId = $transactionalDispatchPublicId;
        return $this;
    }
    /**
     * Get TransactionalMailPublicId value
     * @return string|null
     */
    public function getTransactionalMailPublicId()
    {
        return $this->TransactionalMailPublicId;
    }
    /**
     * Set TransactionalMailPublicId value
     * @param string $transactionalMailPublicId
     * @return \FUCHSA\WOEHRL\TMAService\Structs\TransactionalMailInfo
     */
    public function setTransactionalMailPublicId($transactionalMailPublicId = null)
    {
        $this->TransactionalMailPublicId = $transactionalMailPublicId;
        return $this;
    }
    /**
     * Get IsBounced value
     * @return bool|null
     */
    public function getIsBounced()
    {
        return $this->IsBounced;
    }
    /**
     * Set IsBounced value
     * @param bool $isBounced
     * @return \FUCHSA\WOEHRL\TMAService\Structs\TransactionalMailInfo
     */
    public function setIsBounced($isBounced = null)
    {
        $this->IsBounced = $isBounced;
        return $this;
    }
    /**
     * Get BounceType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBounceType()
    {
        return isset($this->BounceType) ? $this->BounceType : null;
    }
    /**
     * Set BounceType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $bounceType
     * @return \FUCHSA\WOEHRL\TMAService\Structs\TransactionalMailInfo
     */
    public function setBounceType($bounceType = null)
    {
        if (is_null($bounceType) || (is_array($bounceType) && empty($bounceType))) {
            unset($this->BounceType);
        } else {
            $this->BounceType = $bounceType;
        }
        return $this;
    }
    /**
     * Get ReactionInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FUCHSA\WOEHRL\TMAService\Structs\TransactionalMailReactionInfo|null
     */
    public function getReactionInfo()
    {
        return isset($this->ReactionInfo) ? $this->ReactionInfo : null;
    }
    /**
     * Set ReactionInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \FUCHSA\WOEHRL\TMAService\Structs\TransactionalMailReactionInfo $reactionInfo
     * @return \FUCHSA\WOEHRL\TMAService\Structs\TransactionalMailInfo
     */
    public function setReactionInfo(\FUCHSA\WOEHRL\TMAService\Structs\TransactionalMailReactionInfo $reactionInfo = null)
    {
        if (is_null($reactionInfo) || (is_array($reactionInfo) && empty($reactionInfo))) {
            unset($this->ReactionInfo);
        } else {
            $this->ReactionInfo = $reactionInfo;
        }
        return $this;
    }
}
