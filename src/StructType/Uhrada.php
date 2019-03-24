<?php

namespace Unio\SlovakPost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Uhrada StructType
 * @subpackage Structs
 */
class Uhrada extends AbstractStructBase
{
    /**
     * The SposobUhrady
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SposobUhrady;
    /**
     * The SumaUhrady
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SumaUhrady;
    /**
     * Constructor method for Uhrada
     * @uses Uhrada::setSposobUhrady()
     * @uses Uhrada::setSumaUhrady()
     * @param int $sposobUhrady
     * @param string $sumaUhrady
     */
    public function __construct($sposobUhrady = null, $sumaUhrady = null)
    {
        $this
            ->setSposobUhrady($sposobUhrady)
            ->setSumaUhrady($sumaUhrady);
    }
    /**
     * Get SposobUhrady value
     * @return int
     */
    public function getSposobUhrady()
    {
        return $this->SposobUhrady;
    }
    /**
     * Set SposobUhrady value
     * @param int $sposobUhrady
     * @return \Unio\SlovakPost\StructType\Uhrada
     */
    public function setSposobUhrady($sposobUhrady = null)
    {
        // validation for constraint: int
        if (!is_null($sposobUhrady) && !(is_int($sposobUhrady) || ctype_digit($sposobUhrady))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sposobUhrady, true), gettype($sposobUhrady)), __LINE__);
        }
        $this->SposobUhrady = $sposobUhrady;
        return $this;
    }
    /**
     * Get SumaUhrady value
     * @return string
     */
    public function getSumaUhrady()
    {
        return $this->SumaUhrady;
    }
    /**
     * Set SumaUhrady value
     * @param string $sumaUhrady
     * @return \Unio\SlovakPost\StructType\Uhrada
     */
    public function setSumaUhrady($sumaUhrady = null)
    {
        // validation for constraint: string
        if (!is_null($sumaUhrady) && !is_string($sumaUhrady)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sumaUhrady, true), gettype($sumaUhrady)), __LINE__);
        }
        $this->SumaUhrady = $sumaUhrady;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Unio\SlovakPost\StructType\Uhrada
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
