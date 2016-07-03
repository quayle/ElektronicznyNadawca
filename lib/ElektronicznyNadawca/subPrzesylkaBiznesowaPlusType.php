<?php

namespace PocztaPolska\ElektronicznyNadawca;

class subPrzesylkaBiznesowaPlusType extends przesylkaType
{

    /**
     * @var pobranieType $pobranie
     */
    protected $pobranie = null;

    /**
     * @var numerNadaniaType $numerNadania
     */
    protected $numerNadania = null;

    /**
     * @var masaType $masa
     */
    protected $masa = null;

    /**
     * @var gabarytBiznesowaType $gabaryt
     */
    protected $gabaryt = null;

    /**
     * @var wartoscType $wartosc
     */
    protected $wartosc = null;

    /**
     * @var boolean $ostroznie
     */
    protected $ostroznie = null;

    /**
     * @var string $numerPrzesylkiKlienta
     */
    protected $numerPrzesylkiKlienta = null;

    /**
     * @var int $kwotaTranzakcji
     */
    protected $kwotaTranzakcji = null;

    /**
     * @param guidType $guid
     * @param guidType $pakietGuid
     * @param guidType $opakowanieGuid
     * @param opisType $opis
     * @param numerNadaniaType $numerNadania
     * @param masaType $masa
     * @param gabarytBiznesowaType $gabaryt
     * @param wartoscType $wartosc
     * @param boolean $ostroznie
     * @param string $numerPrzesylkiKlienta
     * @param int $kwotaTranzakcji
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $numerNadania, $masa, $gabaryt, $wartosc, $ostroznie, $numerPrzesylkiKlienta, $kwotaTranzakcji)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis);
      $this->numerNadania = $numerNadania;
      $this->masa = $masa;
      $this->gabaryt = $gabaryt;
      $this->wartosc = $wartosc;
      $this->ostroznie = $ostroznie;
      $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
      $this->kwotaTranzakcji = $kwotaTranzakcji;
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
     * @return \PocztaPolska\ElektronicznyNadawca\subPrzesylkaBiznesowaPlusType
     */
    public function setPobranie($pobranie)
    {
      $this->pobranie = $pobranie;
      return $this;
    }

    /**
     * @return numerNadaniaType
     */
    public function getNumerNadania()
    {
      return $this->numerNadania;
    }

    /**
     * @param numerNadaniaType $numerNadania
     * @return \PocztaPolska\ElektronicznyNadawca\subPrzesylkaBiznesowaPlusType
     */
    public function setNumerNadania($numerNadania)
    {
      $this->numerNadania = $numerNadania;
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
     * @return \PocztaPolska\ElektronicznyNadawca\subPrzesylkaBiznesowaPlusType
     */
    public function setMasa($masa)
    {
      $this->masa = $masa;
      return $this;
    }

    /**
     * @return gabarytBiznesowaType
     */
    public function getGabaryt()
    {
      return $this->gabaryt;
    }

    /**
     * @param gabarytBiznesowaType $gabaryt
     * @return \PocztaPolska\ElektronicznyNadawca\subPrzesylkaBiznesowaPlusType
     */
    public function setGabaryt($gabaryt)
    {
      $this->gabaryt = $gabaryt;
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
     * @return \PocztaPolska\ElektronicznyNadawca\subPrzesylkaBiznesowaPlusType
     */
    public function setWartosc($wartosc)
    {
      $this->wartosc = $wartosc;
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
     * @return \PocztaPolska\ElektronicznyNadawca\subPrzesylkaBiznesowaPlusType
     */
    public function setOstroznie($ostroznie)
    {
      $this->ostroznie = $ostroznie;
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
     * @return \PocztaPolska\ElektronicznyNadawca\subPrzesylkaBiznesowaPlusType
     */
    public function setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
    {
      $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
      return $this;
    }

    /**
     * @return int
     */
    public function getKwotaTranzakcji()
    {
      return $this->kwotaTranzakcji;
    }

    /**
     * @param int $kwotaTranzakcji
     * @return \PocztaPolska\ElektronicznyNadawca\subPrzesylkaBiznesowaPlusType
     */
    public function setKwotaTranzakcji($kwotaTranzakcji)
    {
      $this->kwotaTranzakcji = $kwotaTranzakcji;
      return $this;
    }

}
