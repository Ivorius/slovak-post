<?php

namespace Unio\SlovakPost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSheetStatusRequest StructType
 * @subpackage Structs
 */
class GetSheetStatusRequest extends AbstractStructBase
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
     * The sheetId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $sheetId;
    /**
     * Constructor method for getSheetStatusRequest
     * @uses GetSheetStatusRequest::setAuth()
     * @uses GetSheetStatusRequest::setSheetId()
     * @param \Unio\SlovakPost\StructType\AuthType $auth
     * @param string $sheetId
     */
    public function __construct(\Unio\SlovakPost\StructType\AuthType $auth = null, $sheetId = null)
    {
        $this
            ->setAuth($auth)
            ->setSheetId($sheetId);
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
     * @return \Unio\SlovakPost\StructType\GetSheetStatusRequest
     */
    public function setAuth(\Unio\SlovakPost\StructType\AuthType $auth = null)
    {
        $this->auth = $auth;
        return $this;
    }
    /**
     * Get sheetId value
     * @return string
     */
    public function getSheetId()
    {
        return $this->sheetId;
    }
    /**
     * Set sheetId value
     * @param string $sheetId
     * @return \Unio\SlovakPost\StructType\GetSheetStatusRequest
     */
    public function setSheetId($sheetId = null)
    {
        // validation for constraint: string
        if (!is_null($sheetId) && !is_string($sheetId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sheetId, true), gettype($sheetId)), __LINE__);
        }
        $this->sheetId = $sheetId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Unio\SlovakPost\StructType\GetSheetStatusRequest
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
