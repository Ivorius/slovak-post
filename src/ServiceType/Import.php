<?php

namespace Unio\SlovakPost\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Import ServiceType
 * @subpackage Services
 */
class Import extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named importSheet
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Unio\SlovakPost\StructType\ImportSheetRequest $importSheetRequest
     * @return \Unio\SlovakPost\StructType\ImportSheetResponse|bool
     */
    public function importSheet(\Unio\SlovakPost\StructType\ImportSheetRequest $importSheetRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->importSheet($importSheetRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Unio\SlovakPost\StructType\ImportSheetResponse
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
