<?php

namespace Unio\SlovakPost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Dokument StructType
 * @subpackage Structs
 */
class Dokument extends AbstractStructBase
{
    /**
     * The Typ
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Typ;
    /**
     * The Cislo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Cislo;
    /**
     * Constructor method for Dokument
     * @uses Dokument::setTyp()
     * @uses Dokument::setCislo()
     * @param string $typ
     * @param string $cislo
     */
    public function __construct($typ = null, $cislo = null)
    {
        $this
            ->setTyp($typ)
            ->setCislo($cislo);
    }
    /**
     * Get Typ value
     * @return string
     */
    public function getTyp()
    {
        return $this->Typ;
    }
    /**
     * Set Typ value
     * @param string $typ
     * @return \Unio\SlovakPost\StructType\Dokument
     */
    public function setTyp($typ = null)
    {
        // validation for constraint: string
        if (!is_null($typ) && !is_string($typ)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typ, true), gettype($typ)), __LINE__);
        }
        $this->Typ = $typ;
        return $this;
    }
    /**
     * Get Cislo value
     * @return string
     */
    public function getCislo()
    {
        return $this->Cislo;
    }
    /**
     * Set Cislo value
     * @param string $cislo
     * @return \Unio\SlovakPost\StructType\Dokument
     */
    public function setCislo($cislo = null)
    {
        // validation for constraint: string
        if (!is_null($cislo) && !is_string($cislo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cislo, true), gettype($cislo)), __LINE__);
        }
        $this->Cislo = $cislo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Unio\SlovakPost\StructType\Dokument
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
