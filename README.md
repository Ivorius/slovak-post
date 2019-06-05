Automaticky generované třídy z wsdl pošty - https://mojezasielky.posta.sk/integration/webServices/api?wsdl
 pro Elektronický podací hárok Slovenské pošty - https://eph.posta.sk/

Použití
==


    $options = [
            AbstractSoapClientBase::WSDL_URL => 'https://mojezasielky.posta.sk/integration/webServices/api?wsdl',
            AbstractSoapClientBase::WSDL_CLASSMAP => \Unio\SlovakPost\ClassMap::get(),
    ];


    $odesilatel = new Odosielatel(null, 'Ivo Toman', 'Firma s.r.o.', 'Nějaká ulice',
        'Město', '09001', 'SK', '00421000000', 'test@gmail.com', 'iban cislo uctu');


    $zasilky = new Zasielky();


    foreach ($orders as $order) {

        $adresat = new Adresat(
            $order->getDeliveryFullName(),
            $order->getDeliveryCompany(),
            $order->getDeliveryStreet(),
            $order->getDeliveryTown(),
            $order->getDeliveryPostCode(),
            $order->getCountryCode(),
            $order->getMobilePhone(),
            $order->getEmail()
        );
        $cenaDobirky = (string) $order->getFinalPrice();
       
        $info = new Info(
            null, (string) $order->id, '0.00', $cenaDobirky, null, null,
            null, null, $order->getVariableSymbol()
        );

        $totalprice += $order->getFinalPrice();

        $zasilky->addToZasielka(new Zasielka($adresat, null, $info));
    }


    $infoEPH = new \Unio\SlovakPost\StructType\InfoEPH(
        'EUR',
        '1', //elektronicke podani - eph
        null,
        null,
        (string) count($zasilky->getZasielka()),
        8, //express
        $odesilatel,
        [new Uhrada(8, (string) $totalprice)],
        5, //dobirka na ucet
        null
    );

    $ephType = new EphType($infoEPH, $zasilky, '3.0');

    $import = new \Unio\SlovakPost\ServiceType\Import($options);
    if ($import->importSheet(new \Unio\SlovakPost\StructType\ImportSheetRequest($this->authType, $ephType, false)) !== false) {
        return $import->getResult();
    } else {
        var_dump($import->getLastError());
    }

