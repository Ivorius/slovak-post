<?php

namespace Unio\SlovakPost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for error StructType
 * @subpackage Structs
 */
class Error extends AbstractStructBase
{
    /**
     * The attr
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $attr;
    /**
     * The reason
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $reason;
    /**
     * Constructor method for error
     * @uses Error::setAttr()
     * @uses Error::setReason()
     * @param string $attr
     * @param string $reason
     */
    public function __construct($attr = null, $reason = null)
    {
        $this
            ->setAttr($attr)
            ->setReason($reason);
    }
    /**
     * Get attr value
     * @return string
     */
    public function getAttr()
    {
        return $this->attr;
    }
    /**
     * Set attr value
     * @param string $attr
     * @return \Unio\SlovakPost\StructType\Error
     */
    public function setAttr($attr = null)
    {
        // validation for constraint: string
        if (!is_null($attr) && !is_string($attr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attr, true), gettype($attr)), __LINE__);
        }
        $this->attr = $attr;
        return $this;
    }
    /**
     * Get reason value
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }
    /**
     * Set reason value
     * @param string $reason
     * @return \Unio\SlovakPost\StructType\Error
     */
    public function setReason($reason = null)
    {
        // validation for constraint: string
        if (!is_null($reason) && !is_string($reason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reason, true), gettype($reason)), __LINE__);
        }
        $this->reason = $reason;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Unio\SlovakPost\StructType\Error
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
