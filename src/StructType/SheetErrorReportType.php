<?php

namespace Unio\SlovakPost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sheetErrorReportType StructType
 * @subpackage Structs
 */
class SheetErrorReportType extends AbstractStructBase
{
    /**
     * The error
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Unio\SlovakPost\StructType\Error[]
     */
    public $error;
    /**
     * Constructor method for sheetErrorReportType
     * @uses SheetErrorReportType::setError()
     * @param \Unio\SlovakPost\StructType\Error[] $error
     */
    public function __construct(array $error = array())
    {
        $this
            ->setError($error);
    }
    /**
     * Get error value
     * @return \Unio\SlovakPost\StructType\Error[]
     */
    public function getError()
    {
        return $this->error;
    }
    /**
     * This method is responsible for validating the values passed to the setError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setError method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorForArrayConstraintsFromSetError(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sheetErrorReportTypeErrorItem) {
            // validation for constraint: itemType
            if (!$sheetErrorReportTypeErrorItem instanceof \Unio\SlovakPost\StructType\Error) {
                $invalidValues[] = is_object($sheetErrorReportTypeErrorItem) ? get_class($sheetErrorReportTypeErrorItem) : sprintf('%s(%s)', gettype($sheetErrorReportTypeErrorItem), var_export($sheetErrorReportTypeErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The error property can only contain items of type \Unio\SlovakPost\StructType\Error, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set error value
     * @throws \InvalidArgumentException
     * @param \Unio\SlovakPost\StructType\Error[] $error
     * @return \Unio\SlovakPost\StructType\SheetErrorReportType
     */
    public function setError(array $error = array())
    {
        // validation for constraint: array
        if ('' !== ($errorArrayErrorMessage = self::validateErrorForArrayConstraintsFromSetError($error))) {
            throw new \InvalidArgumentException($errorArrayErrorMessage, __LINE__);
        }
        $this->error = $error;
        return $this;
    }
    /**
     * Add item to error value
     * @throws \InvalidArgumentException
     * @param \Unio\SlovakPost\StructType\Error $item
     * @return \Unio\SlovakPost\StructType\SheetErrorReportType
     */
    public function addToError(\Unio\SlovakPost\StructType\Error $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Unio\SlovakPost\StructType\Error) {
            throw new \InvalidArgumentException(sprintf('The error property can only contain items of type \Unio\SlovakPost\StructType\Error, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->error[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Unio\SlovakPost\StructType\SheetErrorReportType
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
