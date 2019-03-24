<?php

namespace Unio\SlovakPost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Odosielatel StructType
 * @subpackage Structs
 */
class Odosielatel extends AbstractStructBase
{
    /**
     * The OdosielatelID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $OdosielatelID;
    /**
     * The Meno
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Meno;
    /**
     * The Organizacia
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Organizacia;
    /**
     * The Ulica
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Ulica;
    /**
     * The Mesto
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Mesto;
    /**
     * The PSC
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $PSC;
    /**
     * The Krajina
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Krajina;
    /**
     * The Telefon
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Telefon;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Email;
    /**
     * The CisloUctu
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CisloUctu;
    /**
     * Constructor method for Odosielatel
     * @uses Odosielatel::setOdosielatelID()
     * @uses Odosielatel::setMeno()
     * @uses Odosielatel::setOrganizacia()
     * @uses Odosielatel::setUlica()
     * @uses Odosielatel::setMesto()
     * @uses Odosielatel::setPSC()
     * @uses Odosielatel::setKrajina()
     * @uses Odosielatel::setTelefon()
     * @uses Odosielatel::setEmail()
     * @uses Odosielatel::setCisloUctu()
     * @param string $odosielatelID
     * @param string $meno
     * @param string $organizacia
     * @param string $ulica
     * @param string $mesto
     * @param string $pSC
     * @param string $krajina
     * @param string $telefon
     * @param string $email
     * @param string $cisloUctu
     */
    public function __construct($odosielatelID = null, $meno = null, $organizacia = null, $ulica = null, $mesto = null, $pSC = null, $krajina = null, $telefon = null, $email = null, $cisloUctu = null)
    {
        $this
            ->setOdosielatelID($odosielatelID)
            ->setMeno($meno)
            ->setOrganizacia($organizacia)
            ->setUlica($ulica)
            ->setMesto($mesto)
            ->setPSC($pSC)
            ->setKrajina($krajina)
            ->setTelefon($telefon)
            ->setEmail($email)
            ->setCisloUctu($cisloUctu);
    }
    /**
     * Get OdosielatelID value
     * @return string
     */
    public function getOdosielatelID()
    {
        return $this->OdosielatelID;
    }
    /**
     * Set OdosielatelID value
     * @param string $odosielatelID
     * @return \Unio\SlovakPost\StructType\Odosielatel
     */
    public function setOdosielatelID($odosielatelID = null)
    {
        // validation for constraint: string
        if (!is_null($odosielatelID) && !is_string($odosielatelID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($odosielatelID, true), gettype($odosielatelID)), __LINE__);
        }
        $this->OdosielatelID = $odosielatelID;
        return $this;
    }
    /**
     * Get Meno value
     * @return string
     */
    public function getMeno()
    {
        return $this->Meno;
    }
    /**
     * Set Meno value
     * @param string $meno
     * @return \Unio\SlovakPost\StructType\Odosielatel
     */
    public function setMeno($meno = null)
    {
        // validation for constraint: string
        if (!is_null($meno) && !is_string($meno)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($meno, true), gettype($meno)), __LINE__);
        }
        $this->Meno = $meno;
        return $this;
    }
    /**
     * Get Organizacia value
     * @return string
     */
    public function getOrganizacia()
    {
        return $this->Organizacia;
    }
    /**
     * Set Organizacia value
     * @param string $organizacia
     * @return \Unio\SlovakPost\StructType\Odosielatel
     */
    public function setOrganizacia($organizacia = null)
    {
        // validation for constraint: string
        if (!is_null($organizacia) && !is_string($organizacia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organizacia, true), gettype($organizacia)), __LINE__);
        }
        $this->Organizacia = $organizacia;
        return $this;
    }
    /**
     * Get Ulica value
     * @return string
     */
    public function getUlica()
    {
        return $this->Ulica;
    }
    /**
     * Set Ulica value
     * @param string $ulica
     * @return \Unio\SlovakPost\StructType\Odosielatel
     */
    public function setUlica($ulica = null)
    {
        // validation for constraint: string
        if (!is_null($ulica) && !is_string($ulica)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ulica, true), gettype($ulica)), __LINE__);
        }
        $this->Ulica = $ulica;
        return $this;
    }
    /**
     * Get Mesto value
     * @return string
     */
    public function getMesto()
    {
        return $this->Mesto;
    }
    /**
     * Set Mesto value
     * @param string $mesto
     * @return \Unio\SlovakPost\StructType\Odosielatel
     */
    public function setMesto($mesto = null)
    {
        // validation for constraint: string
        if (!is_null($mesto) && !is_string($mesto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mesto, true), gettype($mesto)), __LINE__);
        }
        $this->Mesto = $mesto;
        return $this;
    }
    /**
     * Get PSC value
     * @return string
     */
    public function getPSC()
    {
        return $this->PSC;
    }
    /**
     * Set PSC value
     * @param string $pSC
     * @return \Unio\SlovakPost\StructType\Odosielatel
     */
    public function setPSC($pSC = null)
    {
        // validation for constraint: string
        if (!is_null($pSC) && !is_string($pSC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pSC, true), gettype($pSC)), __LINE__);
        }
        $this->PSC = $pSC;
        return $this;
    }
    /**
     * Get Krajina value
     * @return string|null
     */
    public function getKrajina()
    {
        return $this->Krajina;
    }
    /**
     * Set Krajina value
     * @param string $krajina
     * @return \Unio\SlovakPost\StructType\Odosielatel
     */
    public function setKrajina($krajina = null)
    {
        // validation for constraint: string
        if (!is_null($krajina) && !is_string($krajina)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($krajina, true), gettype($krajina)), __LINE__);
        }
        $this->Krajina = $krajina;
        return $this;
    }
    /**
     * Get Telefon value
     * @return string|null
     */
    public function getTelefon()
    {
        return $this->Telefon;
    }
    /**
     * Set Telefon value
     * @param string $telefon
     * @return \Unio\SlovakPost\StructType\Odosielatel
     */
    public function setTelefon($telefon = null)
    {
        // validation for constraint: string
        if (!is_null($telefon) && !is_string($telefon)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($telefon, true), gettype($telefon)), __LINE__);
        }
        $this->Telefon = $telefon;
        return $this;
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \Unio\SlovakPost\StructType\Odosielatel
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->Email = $email;
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
     * @return \Unio\SlovakPost\StructType\Odosielatel
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Unio\SlovakPost\StructType\Odosielatel
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
