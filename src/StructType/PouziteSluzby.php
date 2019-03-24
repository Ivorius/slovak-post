<?php

namespace Unio\SlovakPost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PouziteSluzby StructType
 * @subpackage Structs
 */
class PouziteSluzby extends AbstractStructBase
{
    /**
     * The Sluzba
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Sluzba;
    /**
     * Constructor method for PouziteSluzby
     * @uses PouziteSluzby::setSluzba()
     * @param string[] $sluzba
     */
    public function __construct(array $sluzba = array())
    {
        $this
            ->setSluzba($sluzba);
    }
    /**
     * Get Sluzba value
     * @return string[]|null
     */
    public function getSluzba()
    {
        return $this->Sluzba;
    }
    /**
     * This method is responsible for validating the values passed to the setSluzba method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSluzba method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSluzbaForArrayConstraintsFromSetSluzba(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pouziteSluzbySluzbaItem) {
            // validation for constraint: itemType
            if (!is_string($pouziteSluzbySluzbaItem)) {
                $invalidValues[] = is_object($pouziteSluzbySluzbaItem) ? get_class($pouziteSluzbySluzbaItem) : sprintf('%s(%s)', gettype($pouziteSluzbySluzbaItem), var_export($pouziteSluzbySluzbaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Sluzba property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Sluzba value
     * @throws \InvalidArgumentException
     * @param string[] $sluzba
     * @return \Unio\SlovakPost\StructType\PouziteSluzby
     */
    public function setSluzba(array $sluzba = array())
    {
        // validation for constraint: array
        if ('' !== ($sluzbaArrayErrorMessage = self::validateSluzbaForArrayConstraintsFromSetSluzba($sluzba))) {
            throw new \InvalidArgumentException($sluzbaArrayErrorMessage, __LINE__);
        }
        $this->Sluzba = $sluzba;
        return $this;
    }
    /**
     * Add item to Sluzba value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Unio\SlovakPost\StructType\PouziteSluzby
     */
    public function addToSluzba($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Sluzba property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Sluzba[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Unio\SlovakPost\StructType\PouziteSluzby
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
