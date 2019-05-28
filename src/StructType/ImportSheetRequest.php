<?php

namespace Unio\SlovakPost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for importSheetRequest StructType
 * @subpackage Structs
 */
class ImportSheetRequest extends AbstractStructBase
{
    /**
     * The auth
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Unio\SlovakPost\StructType\AuthType
     */
    public $auth;
    /**
     * The EPH
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Unio\SlovakPost\StructType\EphType
     */
    public $EPH;
    /**
     * The contract
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $contract;
    /**
     * Constructor method for importSheetRequest
     * @uses ImportSheetRequest::setAuth()
     * @uses ImportSheetRequest::setEPH()
     * @uses ImportSheetRequest::setContract()
     * @param \Unio\SlovakPost\StructType\AuthType $auth
     * @param \Unio\SlovakPost\StructType\EphType $ePH
     * @param bool $contract
     */
    public function __construct(\Unio\SlovakPost\StructType\AuthType $auth, \Unio\SlovakPost\StructType\EphType $ePH, $contract = null)
    {
        $this
            ->setAuth($auth)
            ->setEPH($ePH)
            ->setContract($contract);
    }
    /**
     * Get auth value
     * @return \Unio\SlovakPost\StructType\AuthType
     */
    public function getAuth()
    {
        return $this->auth;
    }
    /**
     * Set auth value
     * @param \Unio\SlovakPost\StructType\AuthType $auth
     * @return \Unio\SlovakPost\StructType\ImportSheetRequest
     */
    public function setAuth(\Unio\SlovakPost\StructType\AuthType $auth)
    {
        $this->auth = $auth;
        return $this;
    }
    /**
     * Get EPH value
     * @return \Unio\SlovakPost\StructType\EphType
     */
    public function getEPH()
    {
        return $this->EPH;
    }
    /**
     * Set EPH value
     * @param \Unio\SlovakPost\StructType\EphType $ePH
     * @return \Unio\SlovakPost\StructType\ImportSheetRequest
     */
    public function setEPH(\Unio\SlovakPost\StructType\EphType $ePH)
    {
        $this->EPH = $ePH;
        return $this;
    }
    /**
     * Get contract value
     * @return bool|null
     */
    public function getContract()
    {
        return $this->contract;
    }
    /**
     * Set contract value
     * @param bool $contract
     * @return \Unio\SlovakPost\StructType\ImportSheetRequest
     */
    public function setContract($contract = null)
    {
        // validation for constraint: boolean
        if (!is_null($contract) && !is_bool($contract)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($contract, true), gettype($contract)), __LINE__);
        }
        $this->contract = $contract;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Unio\SlovakPost\StructType\ImportSheetRequest
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
