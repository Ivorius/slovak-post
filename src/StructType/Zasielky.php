<?php

namespace Unio\SlovakPost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Zasielky StructType
 * @subpackage Structs
 */
class Zasielky extends AbstractStructBase
{
    /**
     * The Zasielka
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Unio\SlovakPost\StructType\Zasielka[]
     */
    public $Zasielka;
    /**
     * Constructor method for Zasielky
     * @uses Zasielky::setZasielka()
     * @param \Unio\SlovakPost\StructType\Zasielka[] $zasielka
     */
    public function __construct(array $zasielka = array())
    {
        $this
            ->setZasielka($zasielka);
    }
    /**
     * Get Zasielka value
     * @return \Unio\SlovakPost\StructType\Zasielka[]
     */
    public function getZasielka()
    {
        return $this->Zasielka;
    }
    /**
     * This method is responsible for validating the values passed to the setZasielka method
     * This method is willingly generated in order to preserve the one-line inline validation within the setZasielka method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateZasielkaForArrayConstraintsFromSetZasielka(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $zasielkyZasielkaItem) {
            // validation for constraint: itemType
            if (!$zasielkyZasielkaItem instanceof \Unio\SlovakPost\StructType\Zasielka) {
                $invalidValues[] = is_object($zasielkyZasielkaItem) ? get_class($zasielkyZasielkaItem) : sprintf('%s(%s)', gettype($zasielkyZasielkaItem), var_export($zasielkyZasielkaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Zasielka property can only contain items of type \Unio\SlovakPost\StructType\Zasielka, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Zasielka value
     * @throws \InvalidArgumentException
     * @param \Unio\SlovakPost\StructType\Zasielka[] $zasielka
     * @return \Unio\SlovakPost\StructType\Zasielky
     */
    public function setZasielka(array $zasielka = array())
    {
        // validation for constraint: array
        if ('' !== ($zasielkaArrayErrorMessage = self::validateZasielkaForArrayConstraintsFromSetZasielka($zasielka))) {
            throw new \InvalidArgumentException($zasielkaArrayErrorMessage, __LINE__);
        }
        $this->Zasielka = $zasielka;
        return $this;
    }
    /**
     * Add item to Zasielka value
     * @throws \InvalidArgumentException
     * @param \Unio\SlovakPost\StructType\Zasielka $item
     * @return \Unio\SlovakPost\StructType\Zasielky
     */
    public function addToZasielka(\Unio\SlovakPost\StructType\Zasielka $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Unio\SlovakPost\StructType\Zasielka) {
            throw new \InvalidArgumentException(sprintf('The Zasielka property can only contain items of type \Unio\SlovakPost\StructType\Zasielka, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Zasielka[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Unio\SlovakPost\StructType\Zasielky
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
