<?php

namespace PocztaPolska\ElektronicznyNadawca;

class ElektronicznyNadawca extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'addShipment' => 'PocztaPolska\\ElektronicznyNadawca\\addShipment',
      'addShipmentResponse' => 'PocztaPolska\\ElektronicznyNadawca\\addShipmentResponse',
      'przesylkaType' => 'PocztaPolska\\ElektronicznyNadawca\\przesylkaType',
      'pocztexKrajowyType' => 'PocztaPolska\\ElektronicznyNadawca\\pocztexKrajowyType',
      'changePassword' => 'PocztaPolska\\ElektronicznyNadawca\\changePassword',
      'changePasswordResponse' => 'PocztaPolska\\ElektronicznyNadawca\\changePasswordResponse',
      'paczkaPocztowaType' => 'PocztaPolska\\ElektronicznyNadawca\\paczkaPocztowaType',
      'paczkaPocztowaPLUSType' => 'PocztaPolska\\ElektronicznyNadawca\\paczkaPocztowaPLUSType',
      'przesylkaPobraniowaType' => 'PocztaPolska\\ElektronicznyNadawca\\przesylkaPobraniowaType',
      'przesylkaNaWarunkachSzczegolnychType' => 'PocztaPolska\\ElektronicznyNadawca\\przesylkaNaWarunkachSzczegolnychType',
      'przesylkaPoleconaKrajowaType' => 'PocztaPolska\\ElektronicznyNadawca\\przesylkaPoleconaKrajowaType',
      'przesylkaHandlowaType' => 'PocztaPolska\\ElektronicznyNadawca\\przesylkaHandlowaType',
      'przesylkaListowaZadeklarowanaWartoscType' => 'PocztaPolska\\ElektronicznyNadawca\\przesylkaListowaZadeklarowanaWartoscType',
      'przesylkaFullType' => 'PocztaPolska\\ElektronicznyNadawca\\przesylkaFullType',
      'errorType' => 'PocztaPolska\\ElektronicznyNadawca\\errorType',
      'adresType' => 'PocztaPolska\\ElektronicznyNadawca\\adresType',
      'sendEnvelope' => 'PocztaPolska\\ElektronicznyNadawca\\sendEnvelope',
      'sendEnvelopeResponseType' => 'PocztaPolska\\ElektronicznyNadawca\\sendEnvelopeResponseType',
      'getUrzedyNadania' => 'PocztaPolska\\ElektronicznyNadawca\\getUrzedyNadania',
      'getUrzedyNadaniaResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getUrzedyNadaniaResponse',
      'clearEnvelope' => 'PocztaPolska\\ElektronicznyNadawca\\clearEnvelope',
      'clearEnvelopeResponse' => 'PocztaPolska\\ElektronicznyNadawca\\clearEnvelopeResponse',
      'urzadNadaniaFullType' => 'PocztaPolska\\ElektronicznyNadawca\\urzadNadaniaFullType',
      'ePrzesylkaType' => 'PocztaPolska\\ElektronicznyNadawca\\ePrzesylkaType',
      'urzadWydaniaEPrzesylkiType' => 'PocztaPolska\\ElektronicznyNadawca\\urzadWydaniaEPrzesylkiType',
      'pobranieType' => 'PocztaPolska\\ElektronicznyNadawca\\pobranieType',
      'przesylkaPoleconaZagranicznaType' => 'PocztaPolska\\ElektronicznyNadawca\\przesylkaPoleconaZagranicznaType',
      'przesylkaZadeklarowanaWartoscZagranicznaType' => 'PocztaPolska\\ElektronicznyNadawca\\przesylkaZadeklarowanaWartoscZagranicznaType',
      'getUrzedyWydajaceEPrzesylki' => 'PocztaPolska\\ElektronicznyNadawca\\getUrzedyWydajaceEPrzesylki',
      'getUrzedyWydajaceEPrzesylkiResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getUrzedyWydajaceEPrzesylkiResponse',
      'uploadIWDContent' => 'PocztaPolska\\ElektronicznyNadawca\\uploadIWDContent',
      'getEnvelopeStatus' => 'PocztaPolska\\ElektronicznyNadawca\\getEnvelopeStatus',
      'getEnvelopeStatusResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getEnvelopeStatusResponse',
      'downloadIWDContent' => 'PocztaPolska\\ElektronicznyNadawca\\downloadIWDContent',
      'downloadIWDContentResponse' => 'PocztaPolska\\ElektronicznyNadawca\\downloadIWDContentResponse',
      'przesylkaShortType' => 'PocztaPolska\\ElektronicznyNadawca\\przesylkaShortType',
      'addShipmentResponseItemType' => 'PocztaPolska\\ElektronicznyNadawca\\addShipmentResponseItemType',
      'getKarty' => 'PocztaPolska\\ElektronicznyNadawca\\getKarty',
      'getKartyResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getKartyResponse',
      'getPasswordExpiredDate' => 'PocztaPolska\\ElektronicznyNadawca\\getPasswordExpiredDate',
      'getPasswordExpiredDateResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getPasswordExpiredDateResponse',
      'setAktywnaKarta' => 'PocztaPolska\\ElektronicznyNadawca\\setAktywnaKarta',
      'setAktywnaKartaResponse' => 'PocztaPolska\\ElektronicznyNadawca\\setAktywnaKartaResponse',
      'getEnvelopeContentFull' => 'PocztaPolska\\ElektronicznyNadawca\\getEnvelopeContentFull',
      'getEnvelopeContentFullResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getEnvelopeContentFullResponse',
      'getEnvelopeContentShort' => 'PocztaPolska\\ElektronicznyNadawca\\getEnvelopeContentShort',
      'getEnvelopeContentShortResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getEnvelopeContentShortResponse',
      'hello' => 'PocztaPolska\\ElektronicznyNadawca\\hello',
      'helloResponse' => 'PocztaPolska\\ElektronicznyNadawca\\helloResponse',
      'kartaType' => 'PocztaPolska\\ElektronicznyNadawca\\kartaType',
      'getAddressLabel' => 'PocztaPolska\\ElektronicznyNadawca\\getAddressLabel',
      'getAddressLabelResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getAddressLabelResponse',
      'addressLabelContent' => 'PocztaPolska\\ElektronicznyNadawca\\addressLabelContent',
      'getOutboxBook' => 'PocztaPolska\\ElektronicznyNadawca\\getOutboxBook',
      'getOutboxBookResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getOutboxBookResponse',
      'getFirmowaPocztaBook' => 'PocztaPolska\\ElektronicznyNadawca\\getFirmowaPocztaBook',
      'getFirmowaPocztaBookResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getFirmowaPocztaBookResponse',
      'getEnvelopeList' => 'PocztaPolska\\ElektronicznyNadawca\\getEnvelopeList',
      'getEnvelopeListResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getEnvelopeListResponse',
      'envelopeInfoType' => 'PocztaPolska\\ElektronicznyNadawca\\envelopeInfoType',
      'przesylkaZagranicznaType' => 'PocztaPolska\\ElektronicznyNadawca\\przesylkaZagranicznaType',
      'przesylkaRejestrowanaType' => 'PocztaPolska\\ElektronicznyNadawca\\przesylkaRejestrowanaType',
      'przesylkaNieRejestrowanaType' => 'PocztaPolska\\ElektronicznyNadawca\\przesylkaNieRejestrowanaType',
      'przesylkaBiznesowaType' => 'PocztaPolska\\ElektronicznyNadawca\\przesylkaBiznesowaType',
      'subPrzesylkaBiznesowaType' => 'PocztaPolska\\ElektronicznyNadawca\\subPrzesylkaBiznesowaType',
      'subPrzesylkaBiznesowaPlusType' => 'PocztaPolska\\ElektronicznyNadawca\\subPrzesylkaBiznesowaPlusType',
      'getAddresLabelByGuid' => 'PocztaPolska\\ElektronicznyNadawca\\getAddresLabelByGuid',
      'getAddresLabelByGuidResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getAddresLabelByGuidResponse',
      'przesylkaBiznesowaPlusType' => 'PocztaPolska\\ElektronicznyNadawca\\przesylkaBiznesowaPlusType',
      'pakietType' => 'PocztaPolska\\ElektronicznyNadawca\\pakietType',
      'opakowanieType' => 'PocztaPolska\\ElektronicznyNadawca\\opakowanieType',
      'getPlacowkiPocztowe' => 'PocztaPolska\\ElektronicznyNadawca\\getPlacowkiPocztowe',
      'getPlacowkiPocztoweResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getPlacowkiPocztoweResponse',
      'getGuid' => 'PocztaPolska\\ElektronicznyNadawca\\getGuid',
      'getGuidResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getGuidResponse',
      'kierunekType' => 'PocztaPolska\\ElektronicznyNadawca\\kierunekType',
      'getKierunki' => 'PocztaPolska\\ElektronicznyNadawca\\getKierunki',
      'getKierunkiResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getKierunkiResponse',
      'getKierunkiInfo' => 'PocztaPolska\\ElektronicznyNadawca\\getKierunkiInfo',
      'getKierunkiInfoResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getKierunkiInfoResponse',
      'uslugiType' => 'PocztaPolska\\ElektronicznyNadawca\\uslugiType',
      'placowkaPocztowaType' => 'PocztaPolska\\ElektronicznyNadawca\\placowkaPocztowaType',
      'punktWydaniaPrzesylkiBiznesowejPlus' => 'PocztaPolska\\ElektronicznyNadawca\\punktWydaniaPrzesylkiBiznesowejPlus',
      'getEnvelopeBufor' => 'PocztaPolska\\ElektronicznyNadawca\\getEnvelopeBufor',
      'getEnvelopeBuforResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getEnvelopeBuforResponse',
      'clearEnvelopeByGuids' => 'PocztaPolska\\ElektronicznyNadawca\\clearEnvelopeByGuids',
      'clearEnvelopeByGuidsResponse' => 'PocztaPolska\\ElektronicznyNadawca\\clearEnvelopeByGuidsResponse',
      'zwrotDokumentowType' => 'PocztaPolska\\ElektronicznyNadawca\\zwrotDokumentowType',
      'odbiorPrzesylkiOdNadawcyType' => 'PocztaPolska\\ElektronicznyNadawca\\odbiorPrzesylkiOdNadawcyType',
      'potwierdzenieDoreczeniaType' => 'PocztaPolska\\ElektronicznyNadawca\\potwierdzenieDoreczeniaType',
      'rodzajListType' => 'PocztaPolska\\ElektronicznyNadawca\\rodzajListType',
      'potwierdzenieOdbioruType' => 'PocztaPolska\\ElektronicznyNadawca\\potwierdzenieOdbioruType',
      'doreczenieType' => 'PocztaPolska\\ElektronicznyNadawca\\doreczenieType',
      'doreczenieUslugaPocztowaType' => 'PocztaPolska\\ElektronicznyNadawca\\doreczenieUslugaPocztowaType',
      'doreczenieUslugaKurierskaType' => 'PocztaPolska\\ElektronicznyNadawca\\doreczenieUslugaKurierskaType',
      'paczkaZagranicznaType' => 'PocztaPolska\\ElektronicznyNadawca\\paczkaZagranicznaType',
      'setEnvelopeBuforDataNadania' => 'PocztaPolska\\ElektronicznyNadawca\\setEnvelopeBuforDataNadania',
      'setEnvelopeBuforDataNadaniaResponse' => 'PocztaPolska\\ElektronicznyNadawca\\setEnvelopeBuforDataNadaniaResponse',
      'lokalizacjaGeograficznaType' => 'PocztaPolska\\ElektronicznyNadawca\\lokalizacjaGeograficznaType',
      'wspolrzednaGeograficznaType' => 'PocztaPolska\\ElektronicznyNadawca\\wspolrzednaGeograficznaType',
      'zwrotType' => 'PocztaPolska\\ElektronicznyNadawca\\zwrotType',
      'listZwyklyType' => 'PocztaPolska\\ElektronicznyNadawca\\listZwyklyType',
      'reklamowaType' => 'PocztaPolska\\ElektronicznyNadawca\\reklamowaType',
      'getEPOStatus' => 'PocztaPolska\\ElektronicznyNadawca\\getEPOStatus',
      'getEPOStatusResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getEPOStatusResponse',
      'EPOType' => 'PocztaPolska\\ElektronicznyNadawca\\EPOType',
      'EPOSimpleType' => 'PocztaPolska\\ElektronicznyNadawca\\EPOSimpleType',
      'EPOExtendedType' => 'PocztaPolska\\ElektronicznyNadawca\\EPOExtendedType',
      'przesylkaEPOType' => 'PocztaPolska\\ElektronicznyNadawca\\przesylkaEPOType',
      'przesylkaFirmowaPoleconaType' => 'PocztaPolska\\ElektronicznyNadawca\\przesylkaFirmowaPoleconaType',
      'EPOInfoType' => 'PocztaPolska\\ElektronicznyNadawca\\EPOInfoType',
      'awizoPrzesylkiType' => 'PocztaPolska\\ElektronicznyNadawca\\awizoPrzesylkiType',
      'doreczeniePrzesylkiType' => 'PocztaPolska\\ElektronicznyNadawca\\doreczeniePrzesylkiType',
      'zwrotPrzesylkiType' => 'PocztaPolska\\ElektronicznyNadawca\\zwrotPrzesylkiType',
      'getAddresLabelCompact' => 'PocztaPolska\\ElektronicznyNadawca\\getAddresLabelCompact',
      'getAddresLabelCompactResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getAddresLabelCompactResponse',
      'getAddresLabelByGuidCompact' => 'PocztaPolska\\ElektronicznyNadawca\\getAddresLabelByGuidCompact',
      'getAddresLabelByGuidCompactResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getAddresLabelByGuidCompactResponse',
      'ubezpieczenieType' => 'PocztaPolska\\ElektronicznyNadawca\\ubezpieczenieType',
      'EMSType' => 'PocztaPolska\\ElektronicznyNadawca\\EMSType',
      'getEnvelopeBuforList' => 'PocztaPolska\\ElektronicznyNadawca\\getEnvelopeBuforList',
      'getEnvelopeBuforListResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getEnvelopeBuforListResponse',
      'buforType' => 'PocztaPolska\\ElektronicznyNadawca\\buforType',
      'createEnvelopeBufor' => 'PocztaPolska\\ElektronicznyNadawca\\createEnvelopeBufor',
      'createEnvelopeBuforResponse' => 'PocztaPolska\\ElektronicznyNadawca\\createEnvelopeBuforResponse',
      'moveShipments' => 'PocztaPolska\\ElektronicznyNadawca\\moveShipments',
      'moveShipmentsResponse' => 'PocztaPolska\\ElektronicznyNadawca\\moveShipmentsResponse',
      'updateEnvelopeBufor' => 'PocztaPolska\\ElektronicznyNadawca\\updateEnvelopeBufor',
      'updateEnvelopeBuforResponse' => 'PocztaPolska\\ElektronicznyNadawca\\updateEnvelopeBuforResponse',
      'getUbezpieczeniaInfo' => 'PocztaPolska\\ElektronicznyNadawca\\getUbezpieczeniaInfo',
      'getUbezpieczeniaInfoResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getUbezpieczeniaInfoResponse',
      'ubezpieczeniaInfoType' => 'PocztaPolska\\ElektronicznyNadawca\\ubezpieczeniaInfoType',
      'isMiejscowa' => 'PocztaPolska\\ElektronicznyNadawca\\isMiejscowa',
      'isMiejscowaResponse' => 'PocztaPolska\\ElektronicznyNadawca\\isMiejscowaResponse',
      'trasaRequestType' => 'PocztaPolska\\ElektronicznyNadawca\\trasaRequestType',
      'trasaResponseType' => 'PocztaPolska\\ElektronicznyNadawca\\trasaResponseType',
      'deklaracjaCelnaType' => 'PocztaPolska\\ElektronicznyNadawca\\deklaracjaCelnaType',
      'szczegolyDeklaracjiCelnejType' => 'PocztaPolska\\ElektronicznyNadawca\\szczegolyDeklaracjiCelnejType',
      'przesylkaPaletowaType' => 'PocztaPolska\\ElektronicznyNadawca\\przesylkaPaletowaType',
      'paletaType' => 'PocztaPolska\\ElektronicznyNadawca\\paletaType',
      'platnikType' => 'PocztaPolska\\ElektronicznyNadawca\\platnikType',
      'subPrzesylkaPaletowaType' => 'PocztaPolska\\ElektronicznyNadawca\\subPrzesylkaPaletowaType',
      'getBlankietPobraniaByGuids' => 'PocztaPolska\\ElektronicznyNadawca\\getBlankietPobraniaByGuids',
      'getBlankietPobraniaByGuidsResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getBlankietPobraniaByGuidsResponse',
      'updateAccount' => 'PocztaPolska\\ElektronicznyNadawca\\updateAccount',
      'updateAccountResponse' => 'PocztaPolska\\ElektronicznyNadawca\\updateAccountResponse',
      'accountType' => 'PocztaPolska\\ElektronicznyNadawca\\accountType',
      'getAccountList' => 'PocztaPolska\\ElektronicznyNadawca\\getAccountList',
      'getAccountListResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getAccountListResponse',
      'profilType' => 'PocztaPolska\\ElektronicznyNadawca\\profilType',
      'getProfilList' => 'PocztaPolska\\ElektronicznyNadawca\\getProfilList',
      'getProfilListResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getProfilListResponse',
      'updateProfil' => 'PocztaPolska\\ElektronicznyNadawca\\updateProfil',
      'updateProfilResponse' => 'PocztaPolska\\ElektronicznyNadawca\\updateProfilResponse',
      'uslugaPaczkowaType' => 'PocztaPolska\\ElektronicznyNadawca\\uslugaPaczkowaType',
      'subUslugaPaczkowaType' => 'PocztaPolska\\ElektronicznyNadawca\\subUslugaPaczkowaType',
      'uslugaKurierskaType' => 'PocztaPolska\\ElektronicznyNadawca\\uslugaKurierskaType',
      'subUslugaKurierskaType' => 'PocztaPolska\\ElektronicznyNadawca\\subUslugaKurierskaType',
      'createAccount' => 'PocztaPolska\\ElektronicznyNadawca\\createAccount',
      'createAccountResponse' => 'PocztaPolska\\ElektronicznyNadawca\\createAccountResponse',
      'createProfil' => 'PocztaPolska\\ElektronicznyNadawca\\createProfil',
      'createProfilResponse' => 'PocztaPolska\\ElektronicznyNadawca\\createProfilResponse',
      'potwierdzenieOdbioruPaczkowaType' => 'PocztaPolska\\ElektronicznyNadawca\\potwierdzenieOdbioruPaczkowaType',
      'zwrotDokumentowKurierskaType' => 'PocztaPolska\\ElektronicznyNadawca\\zwrotDokumentowKurierskaType',
      'potwierdzenieOdbioruKurierskaType' => 'PocztaPolska\\ElektronicznyNadawca\\potwierdzenieOdbioruKurierskaType',
      'addReklamacje' => 'PocztaPolska\\ElektronicznyNadawca\\addReklamacje',
      'addReklamacjeResponse' => 'PocztaPolska\\ElektronicznyNadawca\\addReklamacjeResponse',
      'getReklamacje' => 'PocztaPolska\\ElektronicznyNadawca\\getReklamacje',
      'getReklamacjeResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getReklamacjeResponse',
      'getZapowiedziFaktur' => 'PocztaPolska\\ElektronicznyNadawca\\getZapowiedziFaktur',
      'getZapowiedziFakturResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getZapowiedziFakturResponse',
      'addOdwolanieDoReklamacji' => 'PocztaPolska\\ElektronicznyNadawca\\addOdwolanieDoReklamacji',
      'addOdwolanieDoReklamacjiResponse' => 'PocztaPolska\\ElektronicznyNadawca\\addOdwolanieDoReklamacjiResponse',
      'addRozbieznoscDoZapowiedziFaktur' => 'PocztaPolska\\ElektronicznyNadawca\\addRozbieznoscDoZapowiedziFaktur',
      'addRozbieznoscDoZapowiedziFakturResponse' => 'PocztaPolska\\ElektronicznyNadawca\\addRozbieznoscDoZapowiedziFakturResponse',
      'reklamowanaPrzesylkaType' => 'PocztaPolska\\ElektronicznyNadawca\\reklamowanaPrzesylkaType',
      'powodReklamacjiType' => 'PocztaPolska\\ElektronicznyNadawca\\powodReklamacjiType',
      'reklamacjaRozpatrzonaType' => 'PocztaPolska\\ElektronicznyNadawca\\reklamacjaRozpatrzonaType',
      'getListaPowodowReklamacji' => 'PocztaPolska\\ElektronicznyNadawca\\getListaPowodowReklamacji',
      'getListaPowodowReklamacjiResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getListaPowodowReklamacjiResponse',
      'powodSzczegolowyType' => 'PocztaPolska\\ElektronicznyNadawca\\powodSzczegolowyType',
      'kategoriePowodowReklamacjiType' => 'PocztaPolska\\ElektronicznyNadawca\\kategoriePowodowReklamacjiType',
      'listBiznesowyType' => 'PocztaPolska\\ElektronicznyNadawca\\listBiznesowyType',
      'zamowKuriera' => 'PocztaPolska\\ElektronicznyNadawca\\zamowKuriera',
      'zamowKurieraResponse' => 'PocztaPolska\\ElektronicznyNadawca\\zamowKurieraResponse',
      'getEZDOList' => 'PocztaPolska\\ElektronicznyNadawca\\getEZDOList',
      'getEZDOListResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getEZDOListResponse',
      'getEZDO' => 'PocztaPolska\\ElektronicznyNadawca\\getEZDO',
      'getEZDOResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getEZDOResponse',
      'EZDOPakietType' => 'PocztaPolska\\ElektronicznyNadawca\\EZDOPakietType',
      'EZDOPrzesylkaType' => 'PocztaPolska\\ElektronicznyNadawca\\EZDOPrzesylkaType',
      'wplataCKPType' => 'PocztaPolska\\ElektronicznyNadawca\\wplataCKPType',
      'getWplatyCKP' => 'PocztaPolska\\ElektronicznyNadawca\\getWplatyCKP',
      'getWplatyCKPResponse' => 'PocztaPolska\\ElektronicznyNadawca\\getWplatyCKPResponse',
      'globalExpresType' => 'PocztaPolska\\ElektronicznyNadawca\\globalExpresType',
      'cancelReklamacja' => 'PocztaPolska\\ElektronicznyNadawca\\cancelReklamacja',
      'cancelReklamacjaResponse' => 'PocztaPolska\\ElektronicznyNadawca\\cancelReklamacjaResponse',
      'zalacznikDoReklamacjiType' => 'PocztaPolska\\ElektronicznyNadawca\\zalacznikDoReklamacjiType',
      'addZalacznikDoReklamacji' => 'PocztaPolska\\ElektronicznyNadawca\\addZalacznikDoReklamacji',
      'addZalacznikDoReklamacjiResponse' => 'PocztaPolska\\ElektronicznyNadawca\\addZalacznikDoReklamacjiResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = '/home/rafal/prj/dlugolecki/elektroniczny-nadawca/bin/../docs/en.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param addShipment $parameters
     * @return addShipmentResponse
     */
    public function addShipment(addShipment $parameters)
    {
      return $this->__soapCall('addShipment', array($parameters));
    }

    /**
     * @param sendEnvelope $parameters
     * @return sendEnvelopeResponseType
     */
    public function sendEnvelope(sendEnvelope $parameters)
    {
      return $this->__soapCall('sendEnvelope', array($parameters));
    }

    /**
     * @param getEnvelopeBufor $parameters
     * @return getEnvelopeBuforResponse
     */
    public function getEnvelopeBufor(getEnvelopeBufor $parameters)
    {
      return $this->__soapCall('getEnvelopeBufor', array($parameters));
    }

    /**
     * @param getEnvelopeBuforList $parameters
     * @return getEnvelopeBuforListResponse
     */
    public function getEnvelopeBuforList(getEnvelopeBuforList $parameters)
    {
      return $this->__soapCall('getEnvelopeBuforList', array($parameters));
    }

    /**
     * @param createEnvelopeBufor $parameters
     * @return createEnvelopeBuforResponse
     */
    public function createEnvelopeBufor(createEnvelopeBufor $parameters)
    {
      return $this->__soapCall('createEnvelopeBufor', array($parameters));
    }

    /**
     * @param updateEnvelopeBufor $parameters
     * @return updateEnvelopeBuforResponse
     */
    public function updateEnvelopeBufor(updateEnvelopeBufor $parameters)
    {
      return $this->__soapCall('updateEnvelopeBufor', array($parameters));
    }

    /**
     * @param clearEnvelopeByGuids $parameters
     * @return clearEnvelopeByGuidsResponse
     */
    public function clearEnvelopeByGuids(clearEnvelopeByGuids $parameters)
    {
      return $this->__soapCall('clearEnvelopeByGuids', array($parameters));
    }

    /**
     * @param clearEnvelope $parameters
     * @return clearEnvelopeResponse
     */
    public function clearEnvelope(clearEnvelope $parameters)
    {
      return $this->__soapCall('clearEnvelope', array($parameters));
    }

    /**
     * @param moveShipments $parameters
     * @return moveShipmentsResponse
     */
    public function moveShipments(moveShipments $parameters)
    {
      return $this->__soapCall('moveShipments', array($parameters));
    }

    /**
     * @param getAddressLabel $parameters
     * @return getAddressLabelResponse
     */
    public function getAddressLabel(getAddressLabel $parameters)
    {
      return $this->__soapCall('getAddressLabel', array($parameters));
    }

    /**
     * @param getAddresLabelCompact $parameters
     * @return getAddresLabelCompactResponse
     */
    public function getAddresLabelCompact(getAddresLabelCompact $parameters)
    {
      return $this->__soapCall('getAddresLabelCompact', array($parameters));
    }

    /**
     * @param getOutboxBook $parameters
     * @return getOutboxBookResponse
     */
    public function getOutboxBook(getOutboxBook $parameters)
    {
      return $this->__soapCall('getOutboxBook', array($parameters));
    }

    /**
     * @param getFirmowaPocztaBook $parameters
     * @return getFirmowaPocztaBookResponse
     */
    public function getFirmowaPocztaBook(getFirmowaPocztaBook $parameters)
    {
      return $this->__soapCall('getFirmowaPocztaBook', array($parameters));
    }

    /**
     * @param getEnvelopeStatus $parameters
     * @return getEnvelopeStatusResponse
     */
    public function getEnvelopeStatus(getEnvelopeStatus $parameters)
    {
      return $this->__soapCall('getEnvelopeStatus', array($parameters));
    }

    /**
     * @param getEnvelopeList $parameters
     * @return getEnvelopeListResponse
     */
    public function getEnvelopeList(getEnvelopeList $parameters)
    {
      return $this->__soapCall('getEnvelopeList', array($parameters));
    }

    /**
     * @param getEnvelopeContentShort $parameters
     * @return getEnvelopeContentShortResponse
     */
    public function getEnvelopeContentShort(getEnvelopeContentShort $parameters)
    {
      return $this->__soapCall('getEnvelopeContentShort', array($parameters));
    }

    /**
     * @param getEnvelopeContentFull $parameters
     * @return getEnvelopeContentFullResponse
     */
    public function getEnvelopeContentFull(getEnvelopeContentFull $parameters)
    {
      return $this->__soapCall('getEnvelopeContentFull', array($parameters));
    }

    /**
     * @param getKarty $parameters
     * @return getKartyResponse
     */
    public function getKarty(getKarty $parameters)
    {
      return $this->__soapCall('getKarty', array($parameters));
    }

    /**
     * @param setAktywnaKarta $parameters
     * @return setAktywnaKartaResponse
     */
    public function setAktywnaKarta(setAktywnaKarta $parameters)
    {
      return $this->__soapCall('setAktywnaKarta', array($parameters));
    }

    /**
     * @param getUrzedyNadania $parameters
     * @return getUrzedyNadaniaResponse
     */
    public function getUrzedyNadania(getUrzedyNadania $parameters)
    {
      return $this->__soapCall('getUrzedyNadania', array($parameters));
    }

    /**
     * @param getUrzedyWydajaceEPrzesylki $parameters
     * @return getUrzedyWydajaceEPrzesylkiResponse
     */
    public function getUrzedyWydajaceEPrzesylki(getUrzedyWydajaceEPrzesylki $parameters)
    {
      return $this->__soapCall('getUrzedyWydajaceEPrzesylki', array($parameters));
    }

    /**
     * @param uploadIWDContent $parameters
     * @return sendEnvelopeResponseType
     */
    public function uploadIWDContent(uploadIWDContent $parameters)
    {
      return $this->__soapCall('uploadIWDContent', array($parameters));
    }

    /**
     * @param downloadIWDContent $parameters
     * @return downloadIWDContentResponse
     */
    public function downloadIWDContent(downloadIWDContent $parameters)
    {
      return $this->__soapCall('downloadIWDContent', array($parameters));
    }

    /**
     * @param changePassword $parameters
     * @return changePasswordResponse
     */
    public function changePassword(changePassword $parameters)
    {
      return $this->__soapCall('changePassword', array($parameters));
    }

    /**
     * @param getPasswordExpiredDate $parameters
     * @return getPasswordExpiredDateResponse
     */
    public function getPasswordExpiredDate(getPasswordExpiredDate $parameters)
    {
      return $this->__soapCall('getPasswordExpiredDate', array($parameters));
    }

    /**
     * @param hello $parameters
     * @return helloResponse
     */
    public function hello(hello $parameters)
    {
      return $this->__soapCall('hello', array($parameters));
    }

    /**
     * @param getAddresLabelByGuid $parameters
     * @return getAddresLabelByGuidResponse
     */
    public function getAddresLabelByGuid(getAddresLabelByGuid $parameters)
    {
      return $this->__soapCall('getAddresLabelByGuid', array($parameters));
    }

    /**
     * @param getAddresLabelByGuidCompact $parameters
     * @return getAddresLabelByGuidCompactResponse
     */
    public function getAddresLabelByGuidCompact(getAddresLabelByGuidCompact $parameters)
    {
      return $this->__soapCall('getAddresLabelByGuidCompact', array($parameters));
    }

    /**
     * @param getPlacowkiPocztowe $parameters
     * @return getPlacowkiPocztoweResponse
     */
    public function getPlacowkiPocztowe(getPlacowkiPocztowe $parameters)
    {
      return $this->__soapCall('getPlacowkiPocztowe', array($parameters));
    }

    /**
     * @param getGuid $parameters
     * @return getGuidResponse
     */
    public function getGuid(getGuid $parameters)
    {
      return $this->__soapCall('getGuid', array($parameters));
    }

    /**
     * @param getKierunki $parameters
     * @return getKierunkiResponse
     */
    public function getKierunki(getKierunki $parameters)
    {
      return $this->__soapCall('getKierunki', array($parameters));
    }

    /**
     * @param getKierunkiInfo $parameters
     * @return getKierunkiInfoResponse
     */
    public function getKierunkiInfo(getKierunkiInfo $parameters)
    {
      return $this->__soapCall('getKierunkiInfo', array($parameters));
    }

    /**
     * @param getEPOStatus $parameters
     * @return getEPOStatusResponse
     */
    public function getEPOStatus(getEPOStatus $parameters)
    {
      return $this->__soapCall('getEPOStatus', array($parameters));
    }

    /**
     * @param setEnvelopeBuforDataNadania $parameters
     * @return setEnvelopeBuforDataNadaniaResponse
     */
    public function setEnvelopeBuforDataNadania(setEnvelopeBuforDataNadania $parameters)
    {
      return $this->__soapCall('setEnvelopeBuforDataNadania', array($parameters));
    }

    /**
     * @param getUbezpieczeniaInfo $parameters
     * @return getUbezpieczeniaInfoResponse
     */
    public function getUbezpieczeniaInfo(getUbezpieczeniaInfo $parameters)
    {
      return $this->__soapCall('getUbezpieczeniaInfo', array($parameters));
    }

    /**
     * @param isMiejscowa $parameters
     * @return isMiejscowaResponse
     */
    public function isMiejscowa(isMiejscowa $parameters)
    {
      return $this->__soapCall('isMiejscowa', array($parameters));
    }

    /**
     * @param getBlankietPobraniaByGuids $parameters
     * @return getBlankietPobraniaByGuidsResponse
     */
    public function getBlankietPobraniaByGuids(getBlankietPobraniaByGuids $parameters)
    {
      return $this->__soapCall('getBlankietPobraniaByGuids', array($parameters));
    }

    /**
     * @param getAccountList $parameters
     * @return getAccountListResponse
     */
    public function getAccountList(getAccountList $parameters)
    {
      return $this->__soapCall('getAccountList', array($parameters));
    }

    /**
     * @param createAccount $parameters
     * @return createAccountResponse
     */
    public function createAccount(createAccount $parameters)
    {
      return $this->__soapCall('createAccount', array($parameters));
    }

    /**
     * @param updateAccount $parameters
     * @return updateAccountResponse
     */
    public function updateAccount(updateAccount $parameters)
    {
      return $this->__soapCall('updateAccount', array($parameters));
    }

    /**
     * @param getProfilList $parameters
     * @return getProfilListResponse
     */
    public function getProfilList(getProfilList $parameters)
    {
      return $this->__soapCall('getProfilList', array($parameters));
    }

    /**
     * @param createProfil $parameters
     * @return createProfilResponse
     */
    public function createProfil(createProfil $parameters)
    {
      return $this->__soapCall('createProfil', array($parameters));
    }

    /**
     * @param updateProfil $parameters
     * @return updateProfilResponse
     */
    public function updateProfil(updateProfil $parameters)
    {
      return $this->__soapCall('updateProfil', array($parameters));
    }

    /**
     * @param addReklamacje $parameters
     * @return addReklamacjeResponse
     */
    public function addReklamacje(addReklamacje $parameters)
    {
      return $this->__soapCall('addReklamacje', array($parameters));
    }

    /**
     * @param addZalacznikDoReklamacji $parameters
     * @return addZalacznikDoReklamacjiResponse
     */
    public function addZalacznikDoReklamacji(addZalacznikDoReklamacji $parameters)
    {
      return $this->__soapCall('addZalacznikDoReklamacji', array($parameters));
    }

    /**
     * @param getReklamacje $parameters
     * @return getReklamacjeResponse
     */
    public function getReklamacje(getReklamacje $parameters)
    {
      return $this->__soapCall('getReklamacje', array($parameters));
    }

    /**
     * @param getZapowiedziFaktur $parameters
     * @return getZapowiedziFakturResponse
     */
    public function getZapowiedziFaktur(getZapowiedziFaktur $parameters)
    {
      return $this->__soapCall('getZapowiedziFaktur', array($parameters));
    }

    /**
     * @param addOdwolanieDoReklamacji $parameters
     * @return addOdwolanieDoReklamacjiResponse
     */
    public function addOdwolanieDoReklamacji(addOdwolanieDoReklamacji $parameters)
    {
      return $this->__soapCall('addOdwolanieDoReklamacji', array($parameters));
    }

    /**
     * @param cancelReklamacja $parameters
     * @return cancelReklamacjaResponse
     */
    public function cancelReklamacja(cancelReklamacja $parameters)
    {
      return $this->__soapCall('cancelReklamacja', array($parameters));
    }

    /**
     * @param addRozbieznoscDoZapowiedziFaktur $parameters
     * @return addRozbieznoscDoZapowiedziFakturResponse
     */
    public function addRozbieznoscDoZapowiedziFaktur(addRozbieznoscDoZapowiedziFaktur $parameters)
    {
      return $this->__soapCall('addRozbieznoscDoZapowiedziFaktur', array($parameters));
    }

    /**
     * @param getListaPowodowReklamacji $parameters
     * @return getListaPowodowReklamacjiResponse
     */
    public function getListaPowodowReklamacji(getListaPowodowReklamacji $parameters)
    {
      return $this->__soapCall('getListaPowodowReklamacji', array($parameters));
    }

    /**
     * @param zamowKuriera $parameters
     * @return zamowKurieraResponse
     */
    public function zamowKuriera(zamowKuriera $parameters)
    {
      return $this->__soapCall('zamowKuriera', array($parameters));
    }

    /**
     * @param getEZDO $parameters
     * @return getEZDOResponse
     */
    public function getEZDO(getEZDO $parameters)
    {
      return $this->__soapCall('getEZDO', array($parameters));
    }

    /**
     * @param getEZDOList $parameters
     * @return getEZDOListResponse
     */
    public function getEZDOList(getEZDOList $parameters)
    {
      return $this->__soapCall('getEZDOList', array($parameters));
    }

    /**
     * @param getWplatyCKP $parameters
     * @return getWplatyCKPResponse
     */
    public function getWplatyCKP(getWplatyCKP $parameters)
    {
      return $this->__soapCall('getWplatyCKP', array($parameters));
    }

}
