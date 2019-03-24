<?php

namespace Unio\SlovakPost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DalsieUdaje StructType
 * @subpackage Structs
 */
class DalsieUdaje extends AbstractStructBase
{
    /**
     * The Udaj
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Unio\SlovakPost\StructType\Udaj[]
     */
    public $Udaj;
    /**
     * Constructor method for DalsieUdaje
     * @uses DalsieUdaje::setUdaj()
     * @param \Unio\SlovakPost\StructType\Udaj[] $udaj
     */
    public function __construct(array $udaj = array())
    {
        $this
            ->setUdaj($udaj);
    }
    /**
     * Get Udaj value
     * @return \Unio\SlovakPost\StructType\Udaj[]
     */
    public function getUdaj()
    {
        return $this->Udaj;
    }
    /**
     * This method is responsible for validating the values passed to the setUdaj method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUdaj method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUdajForArrayConstraintsFromSetUdaj(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $dalsieUdajeUdajItem) {
            // validation for constraint: itemType
            if (!$dalsieUdajeUdajItem instanceof \Unio\SlovakPost\StructType\Udaj) {
                $invalidValues[] = is_object($dalsieUdajeUdajItem) ? get_class($dalsieUdajeUdajItem) : sprintf('%s(%s)', gettype($dalsieUdajeUdajItem), var_export($dalsieUdajeUdajItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Udaj property can only contain items of type \Unio\SlovakPost\StructType\Udaj, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Udaj value
     * @throws \InvalidArgumentException
     * @param \Unio\SlovakPost\StructType\Udaj[] $udaj
     * @return \Unio\SlovakPost\StructType\DalsieUdaje
     */
    public function setUdaj(array $udaj = array())
    {
        // validation for constraint: array
        if ('' !== ($udajArrayErrorMessage = self::validateUdajForArrayConstraintsFromSetUdaj($udaj))) {
            throw new \InvalidArgumentException($udajArrayErrorMessage, __LINE__);
        }
        $this->Udaj = $udaj;
        return $this;
    }
    /**
     * Add item to Udaj value
     * @throws \InvalidArgumentException
     * @param \Unio\SlovakPost\StructType\Udaj $item
     * @return \Unio\SlovakPost\StructType\DalsieUdaje
     */
    public function addToUdaj(\Unio\SlovakPost\StructType\Udaj $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Unio\SlovakPost\StructType\Udaj) {
            throw new \InvalidArgumentException(sprintf('The Udaj property can only contain items of type \Unio\SlovakPost\StructType\Udaj, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Udaj[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Unio\SlovakPost\StructType\DalsieUdaje
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
