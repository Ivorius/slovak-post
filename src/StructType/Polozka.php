<?php

namespace Unio\SlovakPost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Polozka StructType
 * @subpackage Structs
 */
class Polozka extends AbstractStructBase
{
    /**
     * The Popis
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Popis;
    /**
     * The Mnozstvo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Mnozstvo;
    /**
     * The Hmotnost
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Hmotnost;
    /**
     * The Hodnota
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Hodnota;
    /**
     * The TarifneCislo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TarifneCislo;
    /**
     * The KrajinaPovodu
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $KrajinaPovodu;
    /**
     * Constructor method for Polozka
     * @uses Polozka::setPopis()
     * @uses Polozka::setMnozstvo()
     * @uses Polozka::setHmotnost()
     * @uses Polozka::setHodnota()
     * @uses Polozka::setTarifneCislo()
     * @uses Polozka::setKrajinaPovodu()
     * @param string $popis
     * @param int $mnozstvo
     * @param string $hmotnost
     * @param string $hodnota
     * @param string $tarifneCislo
     * @param string $krajinaPovodu
     */
    public function __construct($popis = null, $mnozstvo = null, $hmotnost = null, $hodnota = null, $tarifneCislo = null, $krajinaPovodu = null)
    {
        $this
            ->setPopis($popis)
            ->setMnozstvo($mnozstvo)
            ->setHmotnost($hmotnost)
            ->setHodnota($hodnota)
            ->setTarifneCislo($tarifneCislo)
            ->setKrajinaPovodu($krajinaPovodu);
    }
    /**
     * Get Popis value
     * @return string
     */
    public function getPopis()
    {
        return $this->Popis;
    }
    /**
     * Set Popis value
     * @param string $popis
     * @return \Unio\SlovakPost\StructType\Polozka
     */
    public function setPopis($popis = null)
    {
        // validation for constraint: string
        if (!is_null($popis) && !is_string($popis)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($popis, true), gettype($popis)), __LINE__);
        }
        $this->Popis = $popis;
        return $this;
    }
    /**
     * Get Mnozstvo value
     * @return int
     */
    public function getMnozstvo()
    {
        return $this->Mnozstvo;
    }
    /**
     * Set Mnozstvo value
     * @param int $mnozstvo
     * @return \Unio\SlovakPost\StructType\Polozka
     */
    public function setMnozstvo($mnozstvo = null)
    {
        // validation for constraint: int
        if (!is_null($mnozstvo) && !(is_int($mnozstvo) || ctype_digit($mnozstvo))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mnozstvo, true), gettype($mnozstvo)), __LINE__);
        }
        $this->Mnozstvo = $mnozstvo;
        return $this;
    }
    /**
     * Get Hmotnost value
     * @return string
     */
    public function getHmotnost()
    {
        return $this->Hmotnost;
    }
    /**
     * Set Hmotnost value
     * @param string $hmotnost
     * @return \Unio\SlovakPost\StructType\Polozka
     */
    public function setHmotnost($hmotnost = null)
    {
        // validation for constraint: string
        if (!is_null($hmotnost) && !is_string($hmotnost)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hmotnost, true), gettype($hmotnost)), __LINE__);
        }
        $this->Hmotnost = $hmotnost;
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
     * @return \Unio\SlovakPost\StructType\Polozka
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
     * Get TarifneCislo value
     * @return string|null
     */
    public function getTarifneCislo()
    {
        return $this->TarifneCislo;
    }
    /**
     * Set TarifneCislo value
     * @param string $tarifneCislo
     * @return \Unio\SlovakPost\StructType\Polozka
     */
    public function setTarifneCislo($tarifneCislo = null)
    {
        // validation for constraint: string
        if (!is_null($tarifneCislo) && !is_string($tarifneCislo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tarifneCislo, true), gettype($tarifneCislo)), __LINE__);
        }
        $this->TarifneCislo = $tarifneCislo;
        return $this;
    }
    /**
     * Get KrajinaPovodu value
     * @return string|null
     */
    public function getKrajinaPovodu()
    {
        return $this->KrajinaPovodu;
    }
    /**
     * Set KrajinaPovodu value
     * @param string $krajinaPovodu
     * @return \Unio\SlovakPost\StructType\Polozka
     */
    public function setKrajinaPovodu($krajinaPovodu = null)
    {
        // validation for constraint: string
        if (!is_null($krajinaPovodu) && !is_string($krajinaPovodu)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($krajinaPovodu, true), gettype($krajinaPovodu)), __LINE__);
        }
        $this->KrajinaPovodu = $krajinaPovodu;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Unio\SlovakPost\StructType\Polozka
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
