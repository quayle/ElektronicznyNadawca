<?php

namespace PocztaPolska\ElektronicznyNadawca;

class placowkaPocztowaType
{

    /**
     * @var lokalizacjaGeograficznaType $lokalizacjaGeograficzna
     */
    protected $lokalizacjaGeograficzna = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $prefixNazwy
     */
    protected $prefixNazwy = null;

    /**
     * @var string $nazwa
     */
    protected $nazwa = null;

    /**
     * @var string $wojewodztwo
     */
    protected $wojewodztwo = null;

    /**
     * @var string $powiat
     */
    protected $powiat = null;

    /**
     * @var string $miejsce
     */
    protected $miejsce = null;

    /**
     * @var anonymous124 $kodPocztowy
     */
    protected $kodPocztowy = null;

    /**
     * @var anonymous125 $miejscowosc
     */
    protected $miejscowosc = null;

    /**
     * @var string $ulica
     */
    protected $ulica = null;

    /**
     * @var string $numerDomu
     */
    protected $numerDomu = null;

    /**
     * @var string $numerLokalu
     */
    protected $numerLokalu = null;

    /**
     * @var string $nazwaWydruk
     */
    protected $nazwaWydruk = null;

    /**
     * @var boolean $punktWydaniaEPrzesylki
     */
    protected $punktWydaniaEPrzesylki = null;

    /**
     * @var boolean $powiadomienieSMS
     */
    protected $powiadomienieSMS = null;

    /**
     * @var boolean $punktWydaniaPrzesylkiBiznesowejPlus
     */
    protected $punktWydaniaPrzesylkiBiznesowejPlus = null;

    /**
     * @var boolean $punktWydaniaPrzesylkiBiznesowej
     */
    protected $punktWydaniaPrzesylkiBiznesowej = null;

    /**
     * @param int $id
     * @param string $prefixNazwy
     * @param string $nazwa
     * @param string $wojewodztwo
     * @param string $powiat
     * @param string $miejsce
     * @param anonymous124 $kodPocztowy
     * @param anonymous125 $miejscowosc
     * @param string $ulica
     * @param string $numerDomu
     * @param string $numerLokalu
     * @param string $nazwaWydruk
     * @param boolean $punktWydaniaEPrzesylki
     * @param boolean $powiadomienieSMS
     * @param boolean $punktWydaniaPrzesylkiBiznesowejPlus
     * @param boolean $punktWydaniaPrzesylkiBiznesowej
     */
    public function __construct($id, $prefixNazwy, $nazwa, $wojewodztwo, $powiat, $miejsce, $kodPocztowy, $miejscowosc, $ulica, $numerDomu, $numerLokalu, $nazwaWydruk, $punktWydaniaEPrzesylki, $powiadomienieSMS, $punktWydaniaPrzesylkiBiznesowejPlus, $punktWydaniaPrzesylkiBiznesowej)
    {
      $this->id = $id;
      $this->prefixNazwy = $prefixNazwy;
      $this->nazwa = $nazwa;
      $this->wojewodztwo = $wojewodztwo;
      $this->powiat = $powiat;
      $this->miejsce = $miejsce;
      $this->kodPocztowy = $kodPocztowy;
      $this->miejscowosc = $miejscowosc;
      $this->ulica = $ulica;
      $this->numerDomu = $numerDomu;
      $this->numerLokalu = $numerLokalu;
      $this->nazwaWydruk = $nazwaWydruk;
      $this->punktWydaniaEPrzesylki = $punktWydaniaEPrzesylki;
      $this->powiadomienieSMS = $powiadomienieSMS;
      $this->punktWydaniaPrzesylkiBiznesowejPlus = $punktWydaniaPrzesylkiBiznesowejPlus;
      $this->punktWydaniaPrzesylkiBiznesowej = $punktWydaniaPrzesylkiBiznesowej;
    }

    /**
     * @return lokalizacjaGeograficznaType
     */
    public function getLokalizacjaGeograficzna()
    {
      return $this->lokalizacjaGeograficzna;
    }

    /**
     * @param lokalizacjaGeograficznaType $lokalizacjaGeograficzna
     * @return \PocztaPolska\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setLokalizacjaGeograficzna($lokalizacjaGeograficzna)
    {
      $this->lokalizacjaGeograficzna = $lokalizacjaGeograficzna;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \PocztaPolska\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrefixNazwy()
    {
      return $this->prefixNazwy;
    }

    /**
     * @param string $prefixNazwy
     * @return \PocztaPolska\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setPrefixNazwy($prefixNazwy)
    {
      $this->prefixNazwy = $prefixNazwy;
      return $this;
    }

    /**
     * @return string
     */
    public function getNazwa()
    {
      return $this->nazwa;
    }

    /**
     * @param string $nazwa
     * @return \PocztaPolska\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setNazwa($nazwa)
    {
      $this->nazwa = $nazwa;
      return $this;
    }

    /**
     * @return string
     */
    public function getWojewodztwo()
    {
      return $this->wojewodztwo;
    }

    /**
     * @param string $wojewodztwo
     * @return \PocztaPolska\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setWojewodztwo($wojewodztwo)
    {
      $this->wojewodztwo = $wojewodztwo;
      return $this;
    }

    /**
     * @return string
     */
    public function getPowiat()
    {
      return $this->powiat;
    }

    /**
     * @param string $powiat
     * @return \PocztaPolska\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setPowiat($powiat)
    {
      $this->powiat = $powiat;
      return $this;
    }

    /**
     * @return string
     */
    public function getMiejsce()
    {
      return $this->miejsce;
    }

    /**
     * @param string $miejsce
     * @return \PocztaPolska\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setMiejsce($miejsce)
    {
      $this->miejsce = $miejsce;
      return $this;
    }

    /**
     * @return anonymous124
     */
    public function getKodPocztowy()
    {
      return $this->kodPocztowy;
    }

    /**
     * @param anonymous124 $kodPocztowy
     * @return \PocztaPolska\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setKodPocztowy($kodPocztowy)
    {
      $this->kodPocztowy = $kodPocztowy;
      return $this;
    }

    /**
     * @return anonymous125
     */
    public function getMiejscowosc()
    {
      return $this->miejscowosc;
    }

    /**
     * @param anonymous125 $miejscowosc
     * @return \PocztaPolska\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setMiejscowosc($miejscowosc)
    {
      $this->miejscowosc = $miejscowosc;
      return $this;
    }

    /**
     * @return string
     */
    public function getUlica()
    {
      return $this->ulica;
    }

    /**
     * @param string $ulica
     * @return \PocztaPolska\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setUlica($ulica)
    {
      $this->ulica = $ulica;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumerDomu()
    {
      return $this->numerDomu;
    }

    /**
     * @param string $numerDomu
     * @return \PocztaPolska\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setNumerDomu($numerDomu)
    {
      $this->numerDomu = $numerDomu;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumerLokalu()
    {
      return $this->numerLokalu;
    }

    /**
     * @param string $numerLokalu
     * @return \PocztaPolska\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setNumerLokalu($numerLokalu)
    {
      $this->numerLokalu = $numerLokalu;
      return $this;
    }

    /**
     * @return string
     */
    public function getNazwaWydruk()
    {
      return $this->nazwaWydruk;
    }

    /**
     * @param string $nazwaWydruk
     * @return \PocztaPolska\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setNazwaWydruk($nazwaWydruk)
    {
      $this->nazwaWydruk = $nazwaWydruk;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPunktWydaniaEPrzesylki()
    {
      return $this->punktWydaniaEPrzesylki;
    }

    /**
     * @param boolean $punktWydaniaEPrzesylki
     * @return \PocztaPolska\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setPunktWydaniaEPrzesylki($punktWydaniaEPrzesylki)
    {
      $this->punktWydaniaEPrzesylki = $punktWydaniaEPrzesylki;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPowiadomienieSMS()
    {
      return $this->powiadomienieSMS;
    }

    /**
     * @param boolean $powiadomienieSMS
     * @return \PocztaPolska\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setPowiadomienieSMS($powiadomienieSMS)
    {
      $this->powiadomienieSMS = $powiadomienieSMS;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPunktWydaniaPrzesylkiBiznesowejPlus()
    {
      return $this->punktWydaniaPrzesylkiBiznesowejPlus;
    }

    /**
     * @param boolean $punktWydaniaPrzesylkiBiznesowejPlus
     * @return \PocztaPolska\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setPunktWydaniaPrzesylkiBiznesowejPlus($punktWydaniaPrzesylkiBiznesowejPlus)
    {
      $this->punktWydaniaPrzesylkiBiznesowejPlus = $punktWydaniaPrzesylkiBiznesowejPlus;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPunktWydaniaPrzesylkiBiznesowej()
    {
      return $this->punktWydaniaPrzesylkiBiznesowej;
    }

    /**
     * @param boolean $punktWydaniaPrzesylkiBiznesowej
     * @return \PocztaPolska\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setPunktWydaniaPrzesylkiBiznesowej($punktWydaniaPrzesylkiBiznesowej)
    {
      $this->punktWydaniaPrzesylkiBiznesowej = $punktWydaniaPrzesylkiBiznesowej;
      return $this;
    }

}
