<?php

namespace Unio\SlovakPost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Obsah StructType
 * @subpackage Structs
 */
class Obsah extends AbstractStructBase
{
    /**
     * The Polozka
     * Meta informations extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 1
     * @var \Unio\SlovakPost\StructType\Polozka[]
     */
    public $Polozka;
    /**
     * Constructor method for Obsah
     * @uses Obsah::setPolozka()
     * @param \Unio\SlovakPost\StructType\Polozka[] $polozka
     */
    public function __construct(array $polozka = array())
    {
        $this
            ->setPolozka($polozka);
    }
    /**
     * Get Polozka value
     * @return \Unio\SlovakPost\StructType\Polozka[]
     */
    public function getPolozka()
    {
        return $this->Polozka;
    }
    /**
     * This method is responsible for validating the values passed to the setPolozka method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPolozka method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePolozkaForArrayConstraintsFromSetPolozka(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $obsahPolozkaItem) {
            // validation for constraint: itemType
            if (!$obsahPolozkaItem instanceof \Unio\SlovakPost\StructType\Polozka) {
                $invalidValues[] = is_object($obsahPolozkaItem) ? get_class($obsahPolozkaItem) : sprintf('%s(%s)', gettype($obsahPolozkaItem), var_export($obsahPolozkaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Polozka property can only contain items of type \Unio\SlovakPost\StructType\Polozka, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Polozka value
     * @throws \InvalidArgumentException
     * @param \Unio\SlovakPost\StructType\Polozka[] $polozka
     * @return \Unio\SlovakPost\StructType\Obsah
     */
    public function setPolozka(array $polozka = array())
    {
        // validation for constraint: array
        if ('' !== ($polozkaArrayErrorMessage = self::validatePolozkaForArrayConstraintsFromSetPolozka($polozka))) {
            throw new \InvalidArgumentException($polozkaArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($polozka) && count($polozka) > 4) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 4', count($polozka)), __LINE__);
        }
        $this->Polozka = $polozka;
        return $this;
    }
    /**
     * Add item to Polozka value
     * @throws \InvalidArgumentException
     * @param \Unio\SlovakPost\StructType\Polozka $item
     * @return \Unio\SlovakPost\StructType\Obsah
     */
    public function addToPolozka(\Unio\SlovakPost\StructType\Polozka $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Unio\SlovakPost\StructType\Polozka) {
            throw new \InvalidArgumentException(sprintf('The Polozka property can only contain items of type \Unio\SlovakPost\StructType\Polozka, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($this->Polozka) && count($this->Polozka) >= 4) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 4', count($this->Polozka)), __LINE__);
        }
        $this->Polozka[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Unio\SlovakPost\StructType\Obsah
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
