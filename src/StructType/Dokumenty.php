<?php

namespace Unio\SlovakPost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Dokumenty StructType
 * @subpackage Structs
 */
class Dokumenty extends AbstractStructBase
{
    /**
     * The Dokument
     * Meta informations extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var \Unio\SlovakPost\StructType\Dokument[]
     */
    public $Dokument;
    /**
     * Constructor method for Dokumenty
     * @uses Dokumenty::setDokument()
     * @param \Unio\SlovakPost\StructType\Dokument[] $dokument
     */
    public function __construct(array $dokument = array())
    {
        $this
            ->setDokument($dokument);
    }
    /**
     * Get Dokument value
     * @return \Unio\SlovakPost\StructType\Dokument[]|null
     */
    public function getDokument()
    {
        return $this->Dokument;
    }
    /**
     * This method is responsible for validating the values passed to the setDokument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDokument method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDokumentForArrayConstraintsFromSetDokument(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $dokumentyDokumentItem) {
            // validation for constraint: itemType
            if (!$dokumentyDokumentItem instanceof \Unio\SlovakPost\StructType\Dokument) {
                $invalidValues[] = is_object($dokumentyDokumentItem) ? get_class($dokumentyDokumentItem) : sprintf('%s(%s)', gettype($dokumentyDokumentItem), var_export($dokumentyDokumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Dokument property can only contain items of type \Unio\SlovakPost\StructType\Dokument, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Dokument value
     * @throws \InvalidArgumentException
     * @param \Unio\SlovakPost\StructType\Dokument[] $dokument
     * @return \Unio\SlovakPost\StructType\Dokumenty
     */
    public function setDokument(array $dokument = array())
    {
        // validation for constraint: array
        if ('' !== ($dokumentArrayErrorMessage = self::validateDokumentForArrayConstraintsFromSetDokument($dokument))) {
            throw new \InvalidArgumentException($dokumentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($dokument) && count($dokument) > 3) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 3', count($dokument)), __LINE__);
        }
        $this->Dokument = $dokument;
        return $this;
    }
    /**
     * Add item to Dokument value
     * @throws \InvalidArgumentException
     * @param \Unio\SlovakPost\StructType\Dokument $item
     * @return \Unio\SlovakPost\StructType\Dokumenty
     */
    public function addToDokument(\Unio\SlovakPost\StructType\Dokument $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Unio\SlovakPost\StructType\Dokument) {
            throw new \InvalidArgumentException(sprintf('The Dokument property can only contain items of type \Unio\SlovakPost\StructType\Dokument, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($this->Dokument) && count($this->Dokument) >= 3) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 3', count($this->Dokument)), __LINE__);
        }
        $this->Dokument[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Unio\SlovakPost\StructType\Dokumenty
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
