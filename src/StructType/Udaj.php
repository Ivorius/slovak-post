<?php

namespace Unio\SlovakPost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Udaj StructType
 * @subpackage Structs
 */
class Udaj extends AbstractStructBase
{
    /**
     * The Nazov
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Nazov;
    /**
     * The Hodnota
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Hodnota;
    /**
     * Constructor method for Udaj
     * @uses Udaj::setNazov()
     * @uses Udaj::setHodnota()
     * @param string $nazov
     * @param string $hodnota
     */
    public function __construct($nazov = null, $hodnota = null)
    {
        $this
            ->setNazov($nazov)
            ->setHodnota($hodnota);
    }
    /**
     * Get Nazov value
     * @return string
     */
    public function getNazov()
    {
        return $this->Nazov;
    }
    /**
     * Set Nazov value
     * @param string $nazov
     * @return \Unio\SlovakPost\StructType\Udaj
     */
    public function setNazov($nazov = null)
    {
        // validation for constraint: string
        if (!is_null($nazov) && !is_string($nazov)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nazov, true), gettype($nazov)), __LINE__);
        }
        $this->Nazov = $nazov;
        return $this;
    }
    /**
     * Get Hodnota value
     * @return string
     */
    public function getHodnota()
    {
        return $this->Hodnota;
    }
    /**
     * Set Hodnota value
     * @param string $hodnota
     * @return \Unio\SlovakPost\StructType\Udaj
     */
    public function setHodnota($hodnota = null)
    {
        // validation for constraint: string
        if (!is_null($hodnota) && !is_string($hodnota)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hodnota, true), gettype($hodnota)), __LINE__);
        }
        $this->Hodnota = $hodnota;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Unio\SlovakPost\StructType\Udaj
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
