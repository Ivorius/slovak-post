<?php

namespace Unio\SlovakPost\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getSheet
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Unio\SlovakPost\StructType\GetSheetRequest $getSheetRequest
     * @return \Unio\SlovakPost\StructType\GetSheetResponse|bool
     */
    public function getSheet(\Unio\SlovakPost\StructType\GetSheetRequest $getSheetRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->getSheet($getSheetRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSheetStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Unio\SlovakPost\StructType\GetSheetStatusRequest $getSheetStatusRequest
     * @return \Unio\SlovakPost\StructType\GetSheetStatusResponse|bool
     */
    public function getSheetStatus(\Unio\SlovakPost\StructType\GetSheetStatusRequest $getSheetStatusRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->getSheetStatus($getSheetStatusRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Unio\SlovakPost\StructType\GetSheetResponse|\Unio\SlovakPost\StructType\GetSheetStatusResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
