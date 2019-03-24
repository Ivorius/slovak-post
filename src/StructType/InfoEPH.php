<?php

namespace Unio\SlovakPost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InfoEPH StructType
 * @subpackage Structs
 */
class InfoEPH extends AbstractStructBase
{
    /**
     * The Mena
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Mena;
    /**
     * The TypEPH
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $TypEPH;
    /**
     * The EPHID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $EPHID;
    /**
     * The Datum
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Datum;
    /**
     * The PocetZasielok
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $PocetZasielok;
    /**
     * The DruhZasielky
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $DruhZasielky;
    /**
     * The Odosielatel
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Unio\SlovakPost\StructType\Odosielatel
     */
    public $Odosielatel;
    /**
     * The Uhrada
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Unio\SlovakPost\StructType\Uhrada[]
     */
    public $Uhrada;
    /**
     * The DruhPPP
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $DruhPPP;
    /**
     * The SposobSpracovania
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $SposobSpracovania;
    /**
     * Constructor method for InfoEPH
     * @uses InfoEPH::setMena()
     * @uses InfoEPH::setTypEPH()
     * @uses InfoEPH::setEPHID()
     * @uses InfoEPH::setDatum()
     * @uses InfoEPH::setPocetZasielok()
     * @uses InfoEPH::setDruhZasielky()
     * @uses InfoEPH::setOdosielatel()
     * @uses InfoEPH::setUhrada()
     * @uses InfoEPH::setDruhPPP()
     * @uses InfoEPH::setSposobSpracovania()
     * @param string $mena
     * @param int $typEPH
     * @param string $ePHID
     * @param string $datum
     * @param string $pocetZasielok
     * @param int $druhZasielky
     * @param \Unio\SlovakPost\StructType\Odosielatel $odosielatel
     * @param \Unio\SlovakPost\StructType\Uhrada[] $uhrada
     * @param int $druhPPP
     * @param int $sposobSpracovania
     */
    public function __construct($mena = null, $typEPH = null, $ePHID = null, $datum = null, $pocetZasielok = null, $druhZasielky = null, \Unio\SlovakPost\StructType\Odosielatel $odosielatel = null, array $uhrada = array(), $druhPPP = null, $sposobSpracovania = null)
    {
        $this
            ->setMena($mena)
            ->setTypEPH($typEPH)
            ->setEPHID($ePHID)
            ->setDatum($datum)
            ->setPocetZasielok($pocetZasielok)
            ->setDruhZasielky($druhZasielky)
            ->setOdosielatel($odosielatel)
            ->setUhrada($uhrada)
            ->setDruhPPP($druhPPP)
            ->setSposobSpracovania($sposobSpracovania);
    }
    /**
     * Get Mena value
     * @return string
     */
    public function getMena()
    {
        return $this->Mena;
    }
    /**
     * Set Mena value
     * @param string $mena
     * @return \Unio\SlovakPost\StructType\InfoEPH
     */
    public function setMena($mena = null)
    {
        // validation for constraint: string
        if (!is_null($mena) && !is_string($mena)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mena, true), gettype($mena)), __LINE__);
        }
        $this->Mena = $mena;
        return $this;
    }
    /**
     * Get TypEPH value
     * @return int
     */
    public function getTypEPH()
    {
        return $this->TypEPH;
    }
    /**
     * Set TypEPH value
     * @param int $typEPH
     * @return \Unio\SlovakPost\StructType\InfoEPH
     */
    public function setTypEPH($typEPH = null)
    {
        // validation for constraint: int
        if (!is_null($typEPH) && !(is_int($typEPH) || ctype_digit($typEPH))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($typEPH, true), gettype($typEPH)), __LINE__);
        }
        $this->TypEPH = $typEPH;
        return $this;
    }
    /**
     * Get EPHID value
     * @return string
     */
    public function getEPHID()
    {
        return $this->EPHID;
    }
    /**
     * Set EPHID value
     * @param string $ePHID
     * @return \Unio\SlovakPost\StructType\InfoEPH
     */
    public function setEPHID($ePHID = null)
    {
        // validation for constraint: string
        if (!is_null($ePHID) && !is_string($ePHID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ePHID, true), gettype($ePHID)), __LINE__);
        }
        $this->EPHID = $ePHID;
        return $this;
    }
    /**
     * Get Datum value
     * @return string
     */
    public function getDatum()
    {
        return $this->Datum;
    }
    /**
     * Set Datum value
     * @param string $datum
     * @return \Unio\SlovakPost\StructType\InfoEPH
     */
    public function setDatum($datum = null)
    {
        // validation for constraint: string
        if (!is_null($datum) && !is_string($datum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($datum, true), gettype($datum)), __LINE__);
        }
        $this->Datum = $datum;
        return $this;
    }
    /**
     * Get PocetZasielok value
     * @return string
     */
    public function getPocetZasielok()
    {
        return $this->PocetZasielok;
    }
    /**
     * Set PocetZasielok value
     * @param string $pocetZasielok
     * @return \Unio\SlovakPost\StructType\InfoEPH
     */
    public function setPocetZasielok($pocetZasielok = null)
    {
        // validation for constraint: string
        if (!is_null($pocetZasielok) && !is_string($pocetZasielok)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pocetZasielok, true), gettype($pocetZasielok)), __LINE__);
        }
        $this->PocetZasielok = $pocetZasielok;
        return $this;
    }
    /**
     * Get DruhZasielky value
     * @return int
     */
    public function getDruhZasielky()
    {
        return $this->DruhZasielky;
    }
    /**
     * Set DruhZasielky value
     * @param int $druhZasielky
     * @return \Unio\SlovakPost\StructType\InfoEPH
     */
    public function setDruhZasielky($druhZasielky = null)
    {
        // validation for constraint: int
        if (!is_null($druhZasielky) && !(is_int($druhZasielky) || ctype_digit($druhZasielky))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($druhZasielky, true), gettype($druhZasielky)), __LINE__);
        }
        $this->DruhZasielky = $druhZasielky;
        return $this;
    }
    /**
     * Get Odosielatel value
     * @return \Unio\SlovakPost\StructType\Odosielatel
     */
    public function getOdosielatel()
    {
        return $this->Odosielatel;
    }
    /**
     * Set Odosielatel value
     * @param \Unio\SlovakPost\StructType\Odosielatel $odosielatel
     * @return \Unio\SlovakPost\StructType\InfoEPH
     */
    public function setOdosielatel(\Unio\SlovakPost\StructType\Odosielatel $odosielatel = null)
    {
        $this->Odosielatel = $odosielatel;
        return $this;
    }
    /**
     * Get Uhrada value
     * @return \Unio\SlovakPost\StructType\Uhrada[]|null
     */
    public function getUhrada()
    {
        return $this->Uhrada;
    }
    /**
     * This method is responsible for validating the values passed to the setUhrada method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUhrada method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUhradaForArrayConstraintsFromSetUhrada(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $infoEPHUhradaItem) {
            // validation for constraint: itemType
            if (!$infoEPHUhradaItem instanceof \Unio\SlovakPost\StructType\Uhrada) {
                $invalidValues[] = is_object($infoEPHUhradaItem) ? get_class($infoEPHUhradaItem) : sprintf('%s(%s)', gettype($infoEPHUhradaItem), var_export($infoEPHUhradaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Uhrada property can only contain items of type \Unio\SlovakPost\StructType\Uhrada, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Uhrada value
     * @throws \InvalidArgumentException
     * @param \Unio\SlovakPost\StructType\Uhrada[] $uhrada
     * @return \Unio\SlovakPost\StructType\InfoEPH
     */
    public function setUhrada(array $uhrada = array())
    {
        // validation for constraint: array
        if ('' !== ($uhradaArrayErrorMessage = self::validateUhradaForArrayConstraintsFromSetUhrada($uhrada))) {
            throw new \InvalidArgumentException($uhradaArrayErrorMessage, __LINE__);
        }
        $this->Uhrada = $uhrada;
        return $this;
    }
    /**
     * Add item to Uhrada value
     * @throws \InvalidArgumentException
     * @param \Unio\SlovakPost\StructType\Uhrada $item
     * @return \Unio\SlovakPost\StructType\InfoEPH
     */
    public function addToUhrada(\Unio\SlovakPost\StructType\Uhrada $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Unio\SlovakPost\StructType\Uhrada) {
            throw new \InvalidArgumentException(sprintf('The Uhrada property can only contain items of type \Unio\SlovakPost\StructType\Uhrada, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Uhrada[] = $item;
        return $this;
    }
    /**
     * Get DruhPPP value
     * @return int|null
     */
    public function getDruhPPP()
    {
        return $this->DruhPPP;
    }
    /**
     * Set DruhPPP value
     * @param int $druhPPP
     * @return \Unio\SlovakPost\StructType\InfoEPH
     */
    public function setDruhPPP($druhPPP = null)
    {
        // validation for constraint: int
        if (!is_null($druhPPP) && !(is_int($druhPPP) || ctype_digit($druhPPP))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($druhPPP, true), gettype($druhPPP)), __LINE__);
        }
        $this->DruhPPP = $druhPPP;
        return $this;
    }
    /**
     * Get SposobSpracovania value
     * @return int|null
     */
    public function getSposobSpracovania()
    {
        return $this->SposobSpracovania;
    }
    /**
     * Set SposobSpracovania value
     * @param int $sposobSpracovania
     * @return \Unio\SlovakPost\StructType\InfoEPH
     */
    public function setSposobSpracovania($sposobSpracovania = null)
    {
        // validation for constraint: int
        if (!is_null($sposobSpracovania) && !(is_int($sposobSpracovania) || ctype_digit($sposobSpracovania))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sposobSpracovania, true), gettype($sposobSpracovania)), __LINE__);
        }
        $this->SposobSpracovania = $sposobSpracovania;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Unio\SlovakPost\StructType\InfoEPH
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
