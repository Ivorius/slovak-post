<?php

namespace Unio\SlovakPost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSheetStatusResponse StructType
 * @subpackage Structs
 */
class GetSheetStatusResponse extends AbstractStructBase
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
     * The sheetErrorReport
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Unio\SlovakPost\StructType\SheetErrorReportType
     */
    public $sheetErrorReport;
    /**
     * Constructor method for getSheetStatusResponse
     * @uses GetSheetStatusResponse::setSheetStatus()
     * @uses GetSheetStatusResponse::setSheetErrorReport()
     * @param string $sheetStatus
     * @param \Unio\SlovakPost\StructType\SheetErrorReportType $sheetErrorReport
     */
    public function __construct($sheetStatus = null, \Unio\SlovakPost\StructType\SheetErrorReportType $sheetErrorReport = null)
    {
        $this
            ->setSheetStatus($sheetStatus)
            ->setSheetErrorReport($sheetErrorReport);
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
     * @return \Unio\SlovakPost\StructType\GetSheetStatusResponse
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
     * Get sheetErrorReport value
     * @return \Unio\SlovakPost\StructType\SheetErrorReportType|null
     */
    public function getSheetErrorReport()
    {
        return $this->sheetErrorReport;
    }
    /**
     * Set sheetErrorReport value
     * @param \Unio\SlovakPost\StructType\SheetErrorReportType $sheetErrorReport
     * @return \Unio\SlovakPost\StructType\GetSheetStatusResponse
     */
    public function setSheetErrorReport(\Unio\SlovakPost\StructType\SheetErrorReportType $sheetErrorReport = null)
    {
        $this->sheetErrorReport = $sheetErrorReport;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Unio\SlovakPost\StructType\GetSheetStatusResponse
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
