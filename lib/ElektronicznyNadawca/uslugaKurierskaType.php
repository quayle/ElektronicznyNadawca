<?php

namespace PocztaPolska\ElektronicznyNadawca;

class uslugaKurierskaType extends przesylkaRejestrowanaType
{

    /**
     * @var pobranieType $pobranie
     */
    protected $pobranie = null;

    /**
     * @var odbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy
     */
    protected $odbiorPrzesylkiOdNadawcy = null;

    /**
     * @var potwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     */
    protected $potwierdzenieDoreczenia = null;

    /**
     * @var urzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     */
    protected $urzadWydaniaEPrzesylki = null;

    /**
     * @var subUslugaKurierskaType[] $subPrzesylka
     */
    protected $subPrzesylka = null;

    /**
     * @var potwierdzenieOdbioruKurierskaType $potwierdzenieOdbioru
     */
    protected $potwierdzenieOdbioru = null;

    /**
     * @var ubezpieczenieType $ubezpieczenie
     */
    protected $ubezpieczenie = null;

    /**
     * @var zwrotDokumentowKurierskaType $zwrotDokumentow
     */
    protected $zwrotDokumentow = null;

    /**
     * @var doreczenieUslugaKurierskaType $doreczenie
     */
    protected $doreczenie = null;

    /**
     * @var masaType $masa
     */
    protected $masa = null;

    /**
     * @var wartoscType $wartosc
     */
    protected $wartosc = null;

    /**
     * @var boolean $ponadgabaryt
     */
    protected $ponadgabaryt = null;

    /**
     * @var int $odleglosc
     */
    protected $odleglosc = null;

    /**
     * @var string $zawartosc
     */
    protected $zawartosc = null;

    /**
     * @var boolean $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     */
    protected $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null;

    /**
     * @var boolean $ostroznie
     */
    protected $ostroznie = null;

    /**
     * @var uiszczaOplateType $uiszczaOplate
     */
    protected $uiszczaOplate = null;

    /**
     * @var terminKurierskaType $termin
     */
    protected $termin = null;

    /**
     * @var opakowanieKurierskaType $opakowanie
     */
    protected $opakowanie = null;

    /**
     * @var string $numerPrzesylkiKlienta
     */
    protected $numerPrzesylkiKlienta = null;

    /**
     * @param guidType $guid
     * @param guidType $pakietGuid
     * @param guidType $opakowanieGuid
     * @param opisType $opis
     * @param adresType $adres
     * @param numerNadaniaType $numerNadania
     * @param subUslugaKurierskaType[] $subPrzesylka
     * @param masaType $masa
     * @param wartoscType $wartosc
     * @param boolean $ponadgabaryt
     * @param int $odleglosc
     * @param string $zawartosc
     * @param boolean $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @param boolean $ostroznie
     * @param uiszczaOplateType $uiszczaOplate
     * @param terminKurierskaType $termin
     * @param opakowanieKurierskaType $opakowanie
     * @param string $numerPrzesylkiKlienta
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania, array $subPrzesylka, $masa, $wartosc, $ponadgabaryt, $odleglosc, $zawartosc, $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce, $ostroznie, $uiszczaOplate, $termin, $opakowanie, $numerPrzesylkiKlienta)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania);
      $this->subPrzesylka = $subPrzesylka;
      $this->masa = $masa;
      $this->wartosc = $wartosc;
      $this->ponadgabaryt = $ponadgabaryt;
      $this->odleglosc = $odleglosc;
      $this->zawartosc = $zawartosc;
      $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
      $this->ostroznie = $ostroznie;
      $this->uiszczaOplate = $uiszczaOplate;
      $this->termin = $termin;
      $this->opakowanie = $opakowanie;
      $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
    }

    /**
     * @return pobranieType
     */
    public function getPobranie()
    {
      return $this->pobranie;
    }

    /**
     * @param pobranieType $pobranie
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaKurierskaType
     */
    public function setPobranie($pobranie)
    {
      $this->pobranie = $pobranie;
      return $this;
    }

    /**
     * @return odbiorPrzesylkiOdNadawcyType
     */
    public function getOdbiorPrzesylkiOdNadawcy()
    {
      return $this->odbiorPrzesylkiOdNadawcy;
    }

    /**
     * @param odbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaKurierskaType
     */
    public function setOdbiorPrzesylkiOdNadawcy($odbiorPrzesylkiOdNadawcy)
    {
      $this->odbiorPrzesylkiOdNadawcy = $odbiorPrzesylkiOdNadawcy;
      return $this;
    }

    /**
     * @return potwierdzenieDoreczeniaType
     */
    public function getPotwierdzenieDoreczenia()
    {
      return $this->potwierdzenieDoreczenia;
    }

    /**
     * @param potwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaKurierskaType
     */
    public function setPotwierdzenieDoreczenia($potwierdzenieDoreczenia)
    {
      $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;
      return $this;
    }

    /**
     * @return urzadWydaniaEPrzesylkiType
     */
    public function getUrzadWydaniaEPrzesylki()
    {
      return $this->urzadWydaniaEPrzesylki;
    }

    /**
     * @param urzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaKurierskaType
     */
    public function setUrzadWydaniaEPrzesylki($urzadWydaniaEPrzesylki)
    {
      $this->urzadWydaniaEPrzesylki = $urzadWydaniaEPrzesylki;
      return $this;
    }

    /**
     * @return subUslugaKurierskaType[]
     */
    public function getSubPrzesylka()
    {
      return $this->subPrzesylka;
    }

    /**
     * @param subUslugaKurierskaType[] $subPrzesylka
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaKurierskaType
     */
    public function setSubPrzesylka(array $subPrzesylka)
    {
      $this->subPrzesylka = $subPrzesylka;
      return $this;
    }

    /**
     * @return potwierdzenieOdbioruKurierskaType
     */
    public function getPotwierdzenieOdbioru()
    {
      return $this->potwierdzenieOdbioru;
    }

    /**
     * @param potwierdzenieOdbioruKurierskaType $potwierdzenieOdbioru
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaKurierskaType
     */
    public function setPotwierdzenieOdbioru($potwierdzenieOdbioru)
    {
      $this->potwierdzenieOdbioru = $potwierdzenieOdbioru;
      return $this;
    }

    /**
     * @return ubezpieczenieType
     */
    public function getUbezpieczenie()
    {
      return $this->ubezpieczenie;
    }

    /**
     * @param ubezpieczenieType $ubezpieczenie
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaKurierskaType
     */
    public function setUbezpieczenie($ubezpieczenie)
    {
      $this->ubezpieczenie = $ubezpieczenie;
      return $this;
    }

    /**
     * @return zwrotDokumentowKurierskaType
     */
    public function getZwrotDokumentow()
    {
      return $this->zwrotDokumentow;
    }

    /**
     * @param zwrotDokumentowKurierskaType $zwrotDokumentow
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaKurierskaType
     */
    public function setZwrotDokumentow($zwrotDokumentow)
    {
      $this->zwrotDokumentow = $zwrotDokumentow;
      return $this;
    }

    /**
     * @return doreczenieUslugaKurierskaType
     */
    public function getDoreczenie()
    {
      return $this->doreczenie;
    }

    /**
     * @param doreczenieUslugaKurierskaType $doreczenie
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaKurierskaType
     */
    public function setDoreczenie($doreczenie)
    {
      $this->doreczenie = $doreczenie;
      return $this;
    }

    /**
     * @return masaType
     */
    public function getMasa()
    {
      return $this->masa;
    }

    /**
     * @param masaType $masa
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaKurierskaType
     */
    public function setMasa($masa)
    {
      $this->masa = $masa;
      return $this;
    }

    /**
     * @return wartoscType
     */
    public function getWartosc()
    {
      return $this->wartosc;
    }

    /**
     * @param wartoscType $wartosc
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaKurierskaType
     */
    public function setWartosc($wartosc)
    {
      $this->wartosc = $wartosc;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPonadgabaryt()
    {
      return $this->ponadgabaryt;
    }

    /**
     * @param boolean $ponadgabaryt
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaKurierskaType
     */
    public function setPonadgabaryt($ponadgabaryt)
    {
      $this->ponadgabaryt = $ponadgabaryt;
      return $this;
    }

    /**
     * @return int
     */
    public function getOdleglosc()
    {
      return $this->odleglosc;
    }

    /**
     * @param int $odleglosc
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaKurierskaType
     */
    public function setOdleglosc($odleglosc)
    {
      $this->odleglosc = $odleglosc;
      return $this;
    }

    /**
     * @return string
     */
    public function getZawartosc()
    {
      return $this->zawartosc;
    }

    /**
     * @param string $zawartosc
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaKurierskaType
     */
    public function setZawartosc($zawartosc)
    {
      $this->zawartosc = $zawartosc;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSprawdzenieZawartosciPrzesylkiPrzezOdbiorce()
    {
      return $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
    }

    /**
     * @param boolean $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaKurierskaType
     */
    public function setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)
    {
      $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOstroznie()
    {
      return $this->ostroznie;
    }

    /**
     * @param boolean $ostroznie
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaKurierskaType
     */
    public function setOstroznie($ostroznie)
    {
      $this->ostroznie = $ostroznie;
      return $this;
    }

    /**
     * @return uiszczaOplateType
     */
    public function getUiszczaOplate()
    {
      return $this->uiszczaOplate;
    }

    /**
     * @param uiszczaOplateType $uiszczaOplate
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaKurierskaType
     */
    public function setUiszczaOplate($uiszczaOplate)
    {
      $this->uiszczaOplate = $uiszczaOplate;
      return $this;
    }

    /**
     * @return terminKurierskaType
     */
    public function getTermin()
    {
      return $this->termin;
    }

    /**
     * @param terminKurierskaType $termin
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaKurierskaType
     */
    public function setTermin($termin)
    {
      $this->termin = $termin;
      return $this;
    }

    /**
     * @return opakowanieKurierskaType
     */
    public function getOpakowanie()
    {
      return $this->opakowanie;
    }

    /**
     * @param opakowanieKurierskaType $opakowanie
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaKurierskaType
     */
    public function setOpakowanie($opakowanie)
    {
      $this->opakowanie = $opakowanie;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumerPrzesylkiKlienta()
    {
      return $this->numerPrzesylkiKlienta;
    }

    /**
     * @param string $numerPrzesylkiKlienta
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaKurierskaType
     */
    public function setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
    {
      $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
      return $this;
    }

}
