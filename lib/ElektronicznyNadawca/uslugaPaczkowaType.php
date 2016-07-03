<?php

namespace PocztaPolska\ElektronicznyNadawca;

class uslugaPaczkowaType extends przesylkaRejestrowanaType
{

    /**
     * @var pobranieType $pobranie
     */
    protected $pobranie = null;

    /**
     * @var potwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     */
    protected $potwierdzenieDoreczenia = null;

    /**
     * @var urzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     */
    protected $urzadWydaniaEPrzesylki = null;

    /**
     * @var subUslugaPaczkowaType[] $subPrzesylka
     */
    protected $subPrzesylka = null;

    /**
     * @var potwierdzenieOdbioruPaczkowaType $potwierdzenieOdbioru
     */
    protected $potwierdzenieOdbioru = null;

    /**
     * @var ubezpieczenieType $ubezpieczenie
     */
    protected $ubezpieczenie = null;

    /**
     * @var zwrotDokumentowPaczkowaType $zwrotDokumentow
     */
    protected $zwrotDokumentow = null;

    /**
     * @var doreczenieUslugaPocztowaType $doreczenie
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
     * @var terminPaczkowaType $termin
     */
    protected $termin = null;

    /**
     * @var opakowaniePocztowaType $opakowanie
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
     * @param subUslugaPaczkowaType[] $subPrzesylka
     * @param masaType $masa
     * @param wartoscType $wartosc
     * @param boolean $ponadgabaryt
     * @param string $zawartosc
     * @param boolean $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @param boolean $ostroznie
     * @param uiszczaOplateType $uiszczaOplate
     * @param terminPaczkowaType $termin
     * @param opakowaniePocztowaType $opakowanie
     * @param string $numerPrzesylkiKlienta
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania, array $subPrzesylka, $masa, $wartosc, $ponadgabaryt, $zawartosc, $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce, $ostroznie, $uiszczaOplate, $termin, $opakowanie, $numerPrzesylkiKlienta)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania);
      $this->subPrzesylka = $subPrzesylka;
      $this->masa = $masa;
      $this->wartosc = $wartosc;
      $this->ponadgabaryt = $ponadgabaryt;
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
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaPaczkowaType
     */
    public function setPobranie($pobranie)
    {
      $this->pobranie = $pobranie;
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
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaPaczkowaType
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
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaPaczkowaType
     */
    public function setUrzadWydaniaEPrzesylki($urzadWydaniaEPrzesylki)
    {
      $this->urzadWydaniaEPrzesylki = $urzadWydaniaEPrzesylki;
      return $this;
    }

    /**
     * @return subUslugaPaczkowaType[]
     */
    public function getSubPrzesylka()
    {
      return $this->subPrzesylka;
    }

    /**
     * @param subUslugaPaczkowaType[] $subPrzesylka
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaPaczkowaType
     */
    public function setSubPrzesylka(array $subPrzesylka)
    {
      $this->subPrzesylka = $subPrzesylka;
      return $this;
    }

    /**
     * @return potwierdzenieOdbioruPaczkowaType
     */
    public function getPotwierdzenieOdbioru()
    {
      return $this->potwierdzenieOdbioru;
    }

    /**
     * @param potwierdzenieOdbioruPaczkowaType $potwierdzenieOdbioru
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaPaczkowaType
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
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaPaczkowaType
     */
    public function setUbezpieczenie($ubezpieczenie)
    {
      $this->ubezpieczenie = $ubezpieczenie;
      return $this;
    }

    /**
     * @return zwrotDokumentowPaczkowaType
     */
    public function getZwrotDokumentow()
    {
      return $this->zwrotDokumentow;
    }

    /**
     * @param zwrotDokumentowPaczkowaType $zwrotDokumentow
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaPaczkowaType
     */
    public function setZwrotDokumentow($zwrotDokumentow)
    {
      $this->zwrotDokumentow = $zwrotDokumentow;
      return $this;
    }

    /**
     * @return doreczenieUslugaPocztowaType
     */
    public function getDoreczenie()
    {
      return $this->doreczenie;
    }

    /**
     * @param doreczenieUslugaPocztowaType $doreczenie
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaPaczkowaType
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
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaPaczkowaType
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
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaPaczkowaType
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
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaPaczkowaType
     */
    public function setPonadgabaryt($ponadgabaryt)
    {
      $this->ponadgabaryt = $ponadgabaryt;
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
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaPaczkowaType
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
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaPaczkowaType
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
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaPaczkowaType
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
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaPaczkowaType
     */
    public function setUiszczaOplate($uiszczaOplate)
    {
      $this->uiszczaOplate = $uiszczaOplate;
      return $this;
    }

    /**
     * @return terminPaczkowaType
     */
    public function getTermin()
    {
      return $this->termin;
    }

    /**
     * @param terminPaczkowaType $termin
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaPaczkowaType
     */
    public function setTermin($termin)
    {
      $this->termin = $termin;
      return $this;
    }

    /**
     * @return opakowaniePocztowaType
     */
    public function getOpakowanie()
    {
      return $this->opakowanie;
    }

    /**
     * @param opakowaniePocztowaType $opakowanie
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaPaczkowaType
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
     * @return \PocztaPolska\ElektronicznyNadawca\uslugaPaczkowaType
     */
    public function setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
    {
      $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
      return $this;
    }

}
