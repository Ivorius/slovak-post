<?php

namespace Unio\SlovakPost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for importSheetResponse StructType
 * @subpackage Structs
 */
class ImportSheetResponse extends AbstractStructBase
{
    /**
     * The sheetId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $sheetId;
    /**
     * Constructor method for importSheetResponse
     * @uses ImportSheetResponse::setSheetId()
     * @param string $sheetId
     */
    public function __construct($sheetId = null)
    {
        $this
            ->setSheetId($sheetId);
    }
    /**
     * Get sheetId value
     * @return string
     */
    public function getSheetId()
    {
        return $this->sheetId;
    }
    /**
     * Set sheetId value
     * @param string $sheetId
     * @return \Unio\SlovakPost\StructType\ImportSheetResponse
     */
    public function setSheetId($sheetId = null)
    {
        // validation for constraint: string
        if (!is_null($sheetId) && !is_string($sheetId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sheetId, true), gettype($sheetId)), __LINE__);
        }
        $this->sheetId = $sheetId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Unio\SlovakPost\StructType\ImportSheetResponse
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
