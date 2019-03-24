<?php

namespace Unio\SlovakPost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ephType StructType
 * @subpackage Structs
 */
class EphType extends AbstractStructBase
{
    /**
     * The InfoEPH
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Unio\SlovakPost\StructType\InfoEPH
     */
    public $InfoEPH;
    /**
     * The Zasielky
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Unio\SlovakPost\StructType\Zasielky
     */
    public $Zasielky;
    /**
     * The verzia
     * @var string
     */
    public $verzia;
    /**
     * Constructor method for ephType
     * @uses EphType::setInfoEPH()
     * @uses EphType::setZasielky()
     * @uses EphType::setVerzia()
     * @param \Unio\SlovakPost\StructType\InfoEPH $infoEPH
     * @param \Unio\SlovakPost\StructType\Zasielky $zasielky
     * @param string $verzia
     */
    public function __construct(\Unio\SlovakPost\StructType\InfoEPH $infoEPH = null, \Unio\SlovakPost\StructType\Zasielky $zasielky = null, $verzia = null)
    {
        $this
            ->setInfoEPH($infoEPH)
            ->setZasielky($zasielky)
            ->setVerzia($verzia);
    }
    /**
     * Get InfoEPH value
     * @return \Unio\SlovakPost\StructType\InfoEPH
     */
    public function getInfoEPH()
    {
        return $this->InfoEPH;
    }
    /**
     * Set InfoEPH value
     * @param \Unio\SlovakPost\StructType\InfoEPH $infoEPH
     * @return \Unio\SlovakPost\StructType\EphType
     */
    public function setInfoEPH(\Unio\SlovakPost\StructType\InfoEPH $infoEPH = null)
    {
        $this->InfoEPH = $infoEPH;
        return $this;
    }
    /**
     * Get Zasielky value
     * @return \Unio\SlovakPost\StructType\Zasielky
     */
    public function getZasielky()
    {
        return $this->Zasielky;
    }
    /**
     * Set Zasielky value
     * @param \Unio\SlovakPost\StructType\Zasielky $zasielky
     * @return \Unio\SlovakPost\StructType\EphType
     */
    public function setZasielky(\Unio\SlovakPost\StructType\Zasielky $zasielky = null)
    {
        $this->Zasielky = $zasielky;
        return $this;
    }
    /**
     * Get verzia value
     * @return string|null
     */
    public function getVerzia()
    {
        return $this->verzia;
    }
    /**
     * Set verzia value
     * @param string $verzia
     * @return \Unio\SlovakPost\StructType\EphType
     */
    public function setVerzia($verzia = null)
    {
        // validation for constraint: string
        if (!is_null($verzia) && !is_string($verzia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($verzia, true), gettype($verzia)), __LINE__);
        }
        $this->verzia = $verzia;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Unio\SlovakPost\StructType\EphType
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
