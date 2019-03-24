<?php

namespace Unio\SlovakPost;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'authType' => '\\Unio\\SlovakPost\\StructType\\AuthType',
            'sheetErrorReportType' => '\\Unio\\SlovakPost\\StructType\\SheetErrorReportType',
            'error' => '\\Unio\\SlovakPost\\StructType\\Error',
            'ephType' => '\\Unio\\SlovakPost\\StructType\\EphType',
            'InfoEPH' => '\\Unio\\SlovakPost\\StructType\\InfoEPH',
            'Uhrada' => '\\Unio\\SlovakPost\\StructType\\Uhrada',
            'Odosielatel' => '\\Unio\\SlovakPost\\StructType\\Odosielatel',
            'Zasielky' => '\\Unio\\SlovakPost\\StructType\\Zasielky',
            'Zasielka' => '\\Unio\\SlovakPost\\StructType\\Zasielka',
            'Adresat' => '\\Unio\\SlovakPost\\StructType\\Adresat',
            'Spat' => '\\Unio\\SlovakPost\\StructType\\Spat',
            'Info' => '\\Unio\\SlovakPost\\StructType\\Info',
            'PouziteSluzby' => '\\Unio\\SlovakPost\\StructType\\PouziteSluzby',
            'DalsieUdaje' => '\\Unio\\SlovakPost\\StructType\\DalsieUdaje',
            'Udaj' => '\\Unio\\SlovakPost\\StructType\\Udaj',
            'ColneVyhlasenie' => '\\Unio\\SlovakPost\\StructType\\ColneVyhlasenie',
            'Obsah' => '\\Unio\\SlovakPost\\StructType\\Obsah',
            'Polozka' => '\\Unio\\SlovakPost\\StructType\\Polozka',
            'Dokumenty' => '\\Unio\\SlovakPost\\StructType\\Dokumenty',
            'Dokument' => '\\Unio\\SlovakPost\\StructType\\Dokument',
            'importSheetRequest' => '\\Unio\\SlovakPost\\StructType\\ImportSheetRequest',
            'importSheetResponse' => '\\Unio\\SlovakPost\\StructType\\ImportSheetResponse',
            'getSheetStatusRequest' => '\\Unio\\SlovakPost\\StructType\\GetSheetStatusRequest',
            'getSheetStatusResponse' => '\\Unio\\SlovakPost\\StructType\\GetSheetStatusResponse',
            'getSheetRequest' => '\\Unio\\SlovakPost\\StructType\\GetSheetRequest',
            'getSheetResponse' => '\\Unio\\SlovakPost\\StructType\\GetSheetResponse',
        );
    }
}
