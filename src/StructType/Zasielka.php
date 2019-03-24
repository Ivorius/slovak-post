<?php

namespace Unio\SlovakPost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Zasielka StructType
 * @subpackage Structs
 */
class Zasielka extends AbstractStructBase
{
    /**
     * The Adresat
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Unio\SlovakPost\StructType\Adresat
     */
    public $Adresat;
    /**
     * The Spat
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Unio\SlovakPost\StructType\Spat
     */
    public $Spat;
    /**
     * The Info
     * @var \Unio\SlovakPost\StructType\Info
     */
    public $Info;
    /**
     * The PouziteSluzby
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Unio\SlovakPost\StructType\PouziteSluzby
     */
    public $PouziteSluzby;
    /**
     * The DalsieUdaje
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Unio\SlovakPost\StructType\DalsieUdaje
     */
    public $DalsieUdaje;
    /**
     * The ColneVyhlasenie
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Unio\SlovakPost\StructType\ColneVyhlasenie
     */
    public $ColneVyhlasenie;
    /**
     * Constructor method for Zasielka
     * @uses Zasielka::setAdresat()
     * @uses Zasielka::setSpat()
     * @uses Zasielka::setInfo()
     * @uses Zasielka::setPouziteSluzby()
     * @uses Zasielka::setDalsieUdaje()
     * @uses Zasielka::setColneVyhlasenie()
     * @param \Unio\SlovakPost\StructType\Adresat $adresat
     * @param \Unio\SlovakPost\StructType\Spat $spat
     * @param \Unio\SlovakPost\StructType\Info $info
     * @param \Unio\SlovakPost\StructType\PouziteSluzby $pouziteSluzby
     * @param \Unio\SlovakPost\StructType\DalsieUdaje $dalsieUdaje
     * @param \Unio\SlovakPost\StructType\ColneVyhlasenie $colneVyhlasenie
     */
    public function __construct(\Unio\SlovakPost\StructType\Adresat $adresat = null, \Unio\SlovakPost\StructType\Spat $spat = null, \Unio\SlovakPost\StructType\Info $info = null, \Unio\SlovakPost\StructType\PouziteSluzby $pouziteSluzby = null, \Unio\SlovakPost\StructType\DalsieUdaje $dalsieUdaje = null, \Unio\SlovakPost\StructType\ColneVyhlasenie $colneVyhlasenie = null)
    {
        $this
            ->setAdresat($adresat)
            ->setSpat($spat)
            ->setInfo($info)
            ->setPouziteSluzby($pouziteSluzby)
            ->setDalsieUdaje($dalsieUdaje)
            ->setColneVyhlasenie($colneVyhlasenie);
    }
    /**
     * Get Adresat value
     * @return \Unio\SlovakPost\StructType\Adresat
     */
    public function getAdresat()
    {
        return $this->Adresat;
    }
    /**
     * Set Adresat value
     * @param \Unio\SlovakPost\StructType\Adresat $adresat
     * @return \Unio\SlovakPost\StructType\Zasielka
     */
    public function setAdresat(\Unio\SlovakPost\StructType\Adresat $adresat = null)
    {
        $this->Adresat = $adresat;
        return $this;
    }
    /**
     * Get Spat value
     * @return \Unio\SlovakPost\StructType\Spat|null
     */
    public function getSpat()
    {
        return $this->Spat;
    }
    /**
     * Set Spat value
     * @param \Unio\SlovakPost\StructType\Spat $spat
     * @return \Unio\SlovakPost\StructType\Zasielka
     */
    public function setSpat(\Unio\SlovakPost\StructType\Spat $spat = null)
    {
        $this->Spat = $spat;
        return $this;
    }
    /**
     * Get Info value
     * @return \Unio\SlovakPost\StructType\Info|null
     */
    public function getInfo()
    {
        return $this->Info;
    }
    /**
     * Set Info value
     * @param \Unio\SlovakPost\StructType\Info $info
     * @return \Unio\SlovakPost\StructType\Zasielka
     */
    public function setInfo(\Unio\SlovakPost\StructType\Info $info = null)
    {
        $this->Info = $info;
        return $this;
    }
    /**
     * Get PouziteSluzby value
     * @return \Unio\SlovakPost\StructType\PouziteSluzby|null
     */
    public function getPouziteSluzby()
    {
        return $this->PouziteSluzby;
    }
    /**
     * Set PouziteSluzby value
     * @param \Unio\SlovakPost\StructType\PouziteSluzby $pouziteSluzby
     * @return \Unio\SlovakPost\StructType\Zasielka
     */
    public function setPouziteSluzby(\Unio\SlovakPost\StructType\PouziteSluzby $pouziteSluzby = null)
    {
        $this->PouziteSluzby = $pouziteSluzby;
        return $this;
    }
    /**
     * Get DalsieUdaje value
     * @return \Unio\SlovakPost\StructType\DalsieUdaje|null
     */
    public function getDalsieUdaje()
    {
        return $this->DalsieUdaje;
    }
    /**
     * Set DalsieUdaje value
     * @param \Unio\SlovakPost\StructType\DalsieUdaje $dalsieUdaje
     * @return \Unio\SlovakPost\StructType\Zasielka
     */
    public function setDalsieUdaje(\Unio\SlovakPost\StructType\DalsieUdaje $dalsieUdaje = null)
    {
        $this->DalsieUdaje = $dalsieUdaje;
        return $this;
    }
    /**
     * Get ColneVyhlasenie value
     * @return \Unio\SlovakPost\StructType\ColneVyhlasenie|null
     */
    public function getColneVyhlasenie()
    {
        return $this->ColneVyhlasenie;
    }
    /**
     * Set ColneVyhlasenie value
     * @param \Unio\SlovakPost\StructType\ColneVyhlasenie $colneVyhlasenie
     * @return \Unio\SlovakPost\StructType\Zasielka
     */
    public function setColneVyhlasenie(\Unio\SlovakPost\StructType\ColneVyhlasenie $colneVyhlasenie = null)
    {
        $this->ColneVyhlasenie = $colneVyhlasenie;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Unio\SlovakPost\StructType\Zasielka
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
