<?php

namespace Unio\SlovakPost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ColneVyhlasenie StructType
 * @subpackage Structs
 */
class ColneVyhlasenie extends AbstractStructBase
{
    /**
     * The Kategoria
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Kategoria;
    /**
     * The Obsah
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Unio\SlovakPost\StructType\Obsah
     */
    public $Obsah;
    /**
     * The KategoriaIne
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $KategoriaIne;
    /**
     * The Dokumenty
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Unio\SlovakPost\StructType\Dokumenty
     */
    public $Dokumenty;
    /**
     * The ReferenciaDovozcu
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReferenciaDovozcu;
    /**
     * The Poznamka
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Poznamka;
    /**
     * Constructor method for ColneVyhlasenie
     * @uses ColneVyhlasenie::setKategoria()
     * @uses ColneVyhlasenie::setObsah()
     * @uses ColneVyhlasenie::setKategoriaIne()
     * @uses ColneVyhlasenie::setDokumenty()
     * @uses ColneVyhlasenie::setReferenciaDovozcu()
     * @uses ColneVyhlasenie::setPoznamka()
     * @param string $kategoria
     * @param \Unio\SlovakPost\StructType\Obsah $obsah
     * @param string $kategoriaIne
     * @param \Unio\SlovakPost\StructType\Dokumenty $dokumenty
     * @param string $referenciaDovozcu
     * @param string $poznamka
     */
    public function __construct($kategoria = null, \Unio\SlovakPost\StructType\Obsah $obsah = null, $kategoriaIne = null, \Unio\SlovakPost\StructType\Dokumenty $dokumenty = null, $referenciaDovozcu = null, $poznamka = null)
    {
        $this
            ->setKategoria($kategoria)
            ->setObsah($obsah)
            ->setKategoriaIne($kategoriaIne)
            ->setDokumenty($dokumenty)
            ->setReferenciaDovozcu($referenciaDovozcu)
            ->setPoznamka($poznamka);
    }
    /**
     * Get Kategoria value
     * @return string
     */
    public function getKategoria()
    {
        return $this->Kategoria;
    }
    /**
     * Set Kategoria value
     * @param string $kategoria
     * @return \Unio\SlovakPost\StructType\ColneVyhlasenie
     */
    public function setKategoria($kategoria = null)
    {
        // validation for constraint: string
        if (!is_null($kategoria) && !is_string($kategoria)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kategoria, true), gettype($kategoria)), __LINE__);
        }
        $this->Kategoria = $kategoria;
        return $this;
    }
    /**
     * Get Obsah value
     * @return \Unio\SlovakPost\StructType\Obsah
     */
    public function getObsah()
    {
        return $this->Obsah;
    }
    /**
     * Set Obsah value
     * @param \Unio\SlovakPost\StructType\Obsah $obsah
     * @return \Unio\SlovakPost\StructType\ColneVyhlasenie
     */
    public function setObsah(\Unio\SlovakPost\StructType\Obsah $obsah = null)
    {
        $this->Obsah = $obsah;
        return $this;
    }
    /**
     * Get KategoriaIne value
     * @return string|null
     */
    public function getKategoriaIne()
    {
        return $this->KategoriaIne;
    }
    /**
     * Set KategoriaIne value
     * @param string $kategoriaIne
     * @return \Unio\SlovakPost\StructType\ColneVyhlasenie
     */
    public function setKategoriaIne($kategoriaIne = null)
    {
        // validation for constraint: string
        if (!is_null($kategoriaIne) && !is_string($kategoriaIne)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kategoriaIne, true), gettype($kategoriaIne)), __LINE__);
        }
        $this->KategoriaIne = $kategoriaIne;
        return $this;
    }
    /**
     * Get Dokumenty value
     * @return \Unio\SlovakPost\StructType\Dokumenty|null
     */
    public function getDokumenty()
    {
        return $this->Dokumenty;
    }
    /**
     * Set Dokumenty value
     * @param \Unio\SlovakPost\StructType\Dokumenty $dokumenty
     * @return \Unio\SlovakPost\StructType\ColneVyhlasenie
     */
    public function setDokumenty(\Unio\SlovakPost\StructType\Dokumenty $dokumenty = null)
    {
        $this->Dokumenty = $dokumenty;
        return $this;
    }
    /**
     * Get ReferenciaDovozcu value
     * @return string|null
     */
    public function getReferenciaDovozcu()
    {
        return $this->ReferenciaDovozcu;
    }
    /**
     * Set ReferenciaDovozcu value
     * @param string $referenciaDovozcu
     * @return \Unio\SlovakPost\StructType\ColneVyhlasenie
     */
    public function setReferenciaDovozcu($referenciaDovozcu = null)
    {
        // validation for constraint: string
        if (!is_null($referenciaDovozcu) && !is_string($referenciaDovozcu)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenciaDovozcu, true), gettype($referenciaDovozcu)), __LINE__);
        }
        $this->ReferenciaDovozcu = $referenciaDovozcu;
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
     * @return \Unio\SlovakPost\StructType\ColneVyhlasenie
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Unio\SlovakPost\StructType\ColneVyhlasenie
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
