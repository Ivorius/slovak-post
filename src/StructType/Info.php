<?php

namespace Unio\SlovakPost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Info StructType
 * @subpackage Structs
 */
class Info extends AbstractStructBase
{
    /**
     * The CiarovyKod
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CiarovyKod;
    /**
     * The ZasielkaID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ZasielkaID;
    /**
     * The Hmotnost
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Hmotnost;
    /**
     * The CenaDobierky
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CenaDobierky;
    /**
     * The CenaPoistneho
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CenaPoistneho;
    /**
     * The CenaVyplatneho
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CenaVyplatneho;
    /**
     * The Trieda
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Trieda;
    /**
     * The CisloUctu
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CisloUctu;
    /**
     * The SymbolPrevodu
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SymbolPrevodu;
    /**
     * The Poznamka
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Poznamka;
    /**
     * The DruhPPP
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $DruhPPP;
    /**
     * The DruhZasielky
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $DruhZasielky;
    /**
     * The DatumPrijatia
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DatumPrijatia;
    /**
     * The Objem
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Objem;
    /**
     * The PocetKusov
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $PocetKusov;
    /**
     * The ObsahZasielky
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ObsahZasielky;
    /**
     * Constructor method for Info
     * @uses Info::setCiarovyKod()
     * @uses Info::setZasielkaID()
     * @uses Info::setHmotnost()
     * @uses Info::setCenaDobierky()
     * @uses Info::setCenaPoistneho()
     * @uses Info::setCenaVyplatneho()
     * @uses Info::setTrieda()
     * @uses Info::setCisloUctu()
     * @uses Info::setSymbolPrevodu()
     * @uses Info::setPoznamka()
     * @uses Info::setDruhPPP()
     * @uses Info::setDruhZasielky()
     * @uses Info::setDatumPrijatia()
     * @uses Info::setObjem()
     * @uses Info::setPocetKusov()
     * @uses Info::setObsahZasielky()
     * @param string $ciarovyKod
     * @param string $zasielkaID
     * @param string $hmotnost
     * @param string $cenaDobierky
     * @param string $cenaPoistneho
     * @param string $cenaVyplatneho
     * @param string $trieda
     * @param string $cisloUctu
     * @param string $symbolPrevodu
     * @param string $poznamka
     * @param int $druhPPP
     * @param int $druhZasielky
     * @param string $datumPrijatia
     * @param string $objem
     * @param int $pocetKusov
     * @param string $obsahZasielky
     */
    public function __construct($ciarovyKod = null, $zasielkaID = null, $hmotnost = null, $cenaDobierky = null, $cenaPoistneho = null, $cenaVyplatneho = null, $trieda = null, $cisloUctu = null, $symbolPrevodu = null, $poznamka = null, $druhPPP = null, $druhZasielky = null, $datumPrijatia = null, $objem = null, $pocetKusov = null, $obsahZasielky = null)
    {
        $this
            ->setCiarovyKod($ciarovyKod)
            ->setZasielkaID($zasielkaID)
            ->setHmotnost($hmotnost)
            ->setCenaDobierky($cenaDobierky)
            ->setCenaPoistneho($cenaPoistneho)
            ->setCenaVyplatneho($cenaVyplatneho)
            ->setTrieda($trieda)
            ->setCisloUctu($cisloUctu)
            ->setSymbolPrevodu($symbolPrevodu)
            ->setPoznamka($poznamka)
            ->setDruhPPP($druhPPP)
            ->setDruhZasielky($druhZasielky)
            ->setDatumPrijatia($datumPrijatia)
            ->setObjem($objem)
            ->setPocetKusov($pocetKusov)
            ->setObsahZasielky($obsahZasielky);
    }
    /**
     * Get CiarovyKod value
     * @return string|null
     */
    public function getCiarovyKod()
    {
        return $this->CiarovyKod;
    }
    /**
     * Set CiarovyKod value
     * @param string $ciarovyKod
     * @return \Unio\SlovakPost\StructType\Info
     */
    public function setCiarovyKod($ciarovyKod = null)
    {
        // validation for constraint: string
        if (!is_null($ciarovyKod) && !is_string($ciarovyKod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ciarovyKod, true), gettype($ciarovyKod)), __LINE__);
        }
        $this->CiarovyKod = $ciarovyKod;
        return $this;
    }
    /**
     * Get ZasielkaID value
     * @return string|null
     */
    public function getZasielkaID()
    {
        return $this->ZasielkaID;
    }
    /**
     * Set ZasielkaID value
     * @param string $zasielkaID
     * @return \Unio\SlovakPost\StructType\Info
     */
    public function setZasielkaID($zasielkaID = null)
    {
        // validation for constraint: string
        if (!is_null($zasielkaID) && !is_string($zasielkaID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zasielkaID, true), gettype($zasielkaID)), __LINE__);
        }
        $this->ZasielkaID = $zasielkaID;
        return $this;
    }
    /**
     * Get Hmotnost value
     * @return string|null
     */
    public function getHmotnost()
    {
        return $this->Hmotnost;
    }
    /**
     * Set Hmotnost value
     * @param string $hmotnost
     * @return \Unio\SlovakPost\StructType\Info
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
     * Get CenaDobierky value
     * @return string|null
     */
    public function getCenaDobierky()
    {
        return $this->CenaDobierky;
    }
    /**
     * Set CenaDobierky value
     * @param string $cenaDobierky
     * @return \Unio\SlovakPost\StructType\Info
     */
    public function setCenaDobierky($cenaDobierky = null)
    {
        // validation for constraint: string
        if (!is_null($cenaDobierky) && !is_string($cenaDobierky)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cenaDobierky, true), gettype($cenaDobierky)), __LINE__);
        }
        $this->CenaDobierky = $cenaDobierky;
        return $this;
    }
    /**
     * Get CenaPoistneho value
     * @return string|null
     */
    public function getCenaPoistneho()
    {
        return $this->CenaPoistneho;
    }
    /**
     * Set CenaPoistneho value
     * @param string $cenaPoistneho
     * @return \Unio\SlovakPost\StructType\Info
     */
    public function setCenaPoistneho($cenaPoistneho = null)
    {
        // validation for constraint: string
        if (!is_null($cenaPoistneho) && !is_string($cenaPoistneho)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cenaPoistneho, true), gettype($cenaPoistneho)), __LINE__);
        }
        $this->CenaPoistneho = $cenaPoistneho;
        return $this;
    }
    /**
     * Get CenaVyplatneho value
     * @return string|null
     */
    public function getCenaVyplatneho()
    {
        return $this->CenaVyplatneho;
    }
    /**
     * Set CenaVyplatneho value
     * @param string $cenaVyplatneho
     * @return \Unio\SlovakPost\StructType\Info
     */
    public function setCenaVyplatneho($cenaVyplatneho = null)
    {
        // validation for constraint: string
        if (!is_null($cenaVyplatneho) && !is_string($cenaVyplatneho)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cenaVyplatneho, true), gettype($cenaVyplatneho)), __LINE__);
        }
        $this->CenaVyplatneho = $cenaVyplatneho;
        return $this;
    }
    /**
     * Get Trieda value
     * @return string|null
     */
    public function getTrieda()
    {
        return $this->Trieda;
    }
    /**
     * Set Trieda value
     * @param string $trieda
     * @return \Unio\SlovakPost\StructType\Info
     */
    public function setTrieda($trieda = null)
    {
        // validation for constraint: string
        if (!is_null($trieda) && !is_string($trieda)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trieda, true), gettype($trieda)), __LINE__);
        }
        $this->Trieda = $trieda;
        return $this;
    }
    /**
     * Get CisloUctu value
     * @return string|null
     */
    public function getCisloUctu()
    {
        return $this->CisloUctu;
    }
    /**
     * Set CisloUctu value
     * @param string $cisloUctu
     * @return \Unio\SlovakPost\StructType\Info
     */
    public function setCisloUctu($cisloUctu = null)
    {
        // validation for constraint: string
        if (!is_null($cisloUctu) && !is_string($cisloUctu)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cisloUctu, true), gettype($cisloUctu)), __LINE__);
        }
        $this->CisloUctu = $cisloUctu;
        return $this;
    }
    /**
     * Get SymbolPrevodu value
     * @return string|null
     */
    public function getSymbolPrevodu()
    {
        return $this->SymbolPrevodu;
    }
    /**
     * Set SymbolPrevodu value
     * @param string $symbolPrevodu
     * @return \Unio\SlovakPost\StructType\Info
     */
    public function setSymbolPrevodu($symbolPrevodu = null)
    {
        // validation for constraint: string
        if (!is_null($symbolPrevodu) && !is_string($symbolPrevodu)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($symbolPrevodu, true), gettype($symbolPrevodu)), __LINE__);
        }
        $this->SymbolPrevodu = $symbolPrevodu;
        return $this;
    }
    /**
     * Get Poznamka value
     * @return string|null
     */
    public function getPoznamka()
    {
        return $this->Poznamka;
    }
    /**
     * Set Poznamka value
     * @param string $poznamka
     * @return \Unio\SlovakPost\StructType\Info
     */
    public function setPoznamka($poznamka = null)
    {
        // validation for constraint: string
        if (!is_null($poznamka) && !is_string($poznamka)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($poznamka, true), gettype($poznamka)), __LINE__);
        }
        $this->Poznamka = $poznamka;
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
     * @return \Unio\SlovakPost\StructType\Info
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
     * Get DruhZasielky value
     * @return int|null
     */
    public function getDruhZasielky()
    {
        return $this->DruhZasielky;
    }
    /**
     * Set DruhZasielky value
     * @param int $druhZasielky
     * @return \Unio\SlovakPost\StructType\Info
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
     * Get DatumPrijatia value
     * @return string|null
     */
    public function getDatumPrijatia()
    {
        return $this->DatumPrijatia;
    }
    /**
     * Set DatumPrijatia value
     * @param string $datumPrijatia
     * @return \Unio\SlovakPost\StructType\Info
     */
    public function setDatumPrijatia($datumPrijatia = null)
    {
        // validation for constraint: string
        if (!is_null($datumPrijatia) && !is_string($datumPrijatia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($datumPrijatia, true), gettype($datumPrijatia)), __LINE__);
        }
        $this->DatumPrijatia = $datumPrijatia;
        return $this;
    }
    /**
     * Get Objem value
     * @return string|null
     */
    public function getObjem()
    {
        return $this->Objem;
    }
    /**
     * Set Objem value
     * @param string $objem
     * @return \Unio\SlovakPost\StructType\Info
     */
    public function setObjem($objem = null)
    {
        // validation for constraint: string
        if (!is_null($objem) && !is_string($objem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objem, true), gettype($objem)), __LINE__);
        }
        $this->Objem = $objem;
        return $this;
    }
    /**
     * Get PocetKusov value
     * @return int|null
     */
    public function getPocetKusov()
    {
        return $this->PocetKusov;
    }
    /**
     * Set PocetKusov value
     * @param int $pocetKusov
     * @return \Unio\SlovakPost\StructType\Info
     */
    public function setPocetKusov($pocetKusov = null)
    {
        // validation for constraint: int
        if (!is_null($pocetKusov) && !(is_int($pocetKusov) || ctype_digit($pocetKusov))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pocetKusov, true), gettype($pocetKusov)), __LINE__);
        }
        $this->PocetKusov = $pocetKusov;
        return $this;
    }
    /**
     * Get ObsahZasielky value
     * @return string|null
     */
    public function getObsahZasielky()
    {
        return $this->ObsahZasielky;
    }
    /**
     * Set ObsahZasielky value
     * @param string $obsahZasielky
     * @return \Unio\SlovakPost\StructType\Info
     */
    public function setObsahZasielky($obsahZasielky = null)
    {
        // validation for constraint: string
        if (!is_null($obsahZasielky) && !is_string($obsahZasielky)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($obsahZasielky, true), gettype($obsahZasielky)), __LINE__);
        }
        $this->ObsahZasielky = $obsahZasielky;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Unio\SlovakPost\StructType\Info
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
