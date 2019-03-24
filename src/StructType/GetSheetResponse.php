<?php

namespace Unio\SlovakPost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSheetResponse StructType
 * @subpackage Structs
 */
class GetSheetResponse extends AbstractStructBase
{
    /**
     * The sheetStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $sheetStatus;
    /**
     * The EPH
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Unio\SlovakPost\StructType\EphType
     */
    public $EPH;
    /**
     * Constructor method for getSheetResponse
     * @uses GetSheetResponse::setSheetStatus()
     * @uses GetSheetResponse::setEPH()
     * @param string $sheetStatus
     * @param \Unio\SlovakPost\StructType\EphType $ePH
     */
    public function __construct($sheetStatus = null, \Unio\SlovakPost\StructType\EphType $ePH = null)
    {
        $this
            ->setSheetStatus($sheetStatus)
            ->setEPH($ePH);
    }
    /**
     * Get sheetStatus value
     * @return string
     */
    public function getSheetStatus()
    {
        return $this->sheetStatus;
    }
    /**
     * Set sheetStatus value
     * @param string $sheetStatus
     * @return \Unio\SlovakPost\StructType\GetSheetResponse
     */
    public function setSheetStatus($sheetStatus = null)
    {
        // validation for constraint: string
        if (!is_null($sheetStatus) && !is_string($sheetStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sheetStatus, true), gettype($sheetStatus)), __LINE__);
        }
        $this->sheetStatus = $sheetStatus;
        return $this;
    }
    /**
     * Get EPH value
     * @return \Unio\SlovakPost\StructType\EphType|null
     */
    public function getEPH()
    {
        return $this->EPH;
    }
    /**
     * Set EPH value
     * @param \Unio\SlovakPost\StructType\EphType $ePH
     * @return \Unio\SlovakPost\StructType\GetSheetResponse
     */
    public function setEPH(\Unio\SlovakPost\StructType\EphType $ePH = null)
    {
        $this->EPH = $ePH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Unio\SlovakPost\StructType\GetSheetResponse
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
