<?php

namespace PocztaPolska\ElektronicznyNadawca;

class EZDOPrzesylkaType
{

    /**
     * @var numerNadaniaType $numerNadania
     */
    protected $numerNadania = null;

    /**
     * @var string $rodzaj
     */
    protected $rodzaj = null;

    /**
     * @var kategoriaType $kategoria
     */
    protected $kategoria = null;

    /**
     * @var masaType $masa
     */
    protected $masa = null;

    /**
     * @var wartoscType $wartosc
     */
    protected $wartosc = null;

    /**
     * @var kwotaPobraniaType $kwotaPobrania
     */
    protected $kwotaPobrania = null;

    /**
     * @var string $numerWewnetrznyPrzesylki
     */
    protected $numerWewnetrznyPrzesylki = null;

    /**
     * @param numerNadaniaType $numerNadania
     * @param string $rodzaj
     * @param kategoriaType $kategoria
     * @param masaType $masa
     * @param wartoscType $wartosc
     * @param kwotaPobraniaType $kwotaPobrania
     * @param string $numerWewnetrznyPrzesylki
     */
    public function __construct($numerNadania, $rodzaj, $kategoria, $masa, $wartosc, $kwotaPobrania, $numerWewnetrznyPrzesylki)
    {
      $this->numerNadania = $numerNadania;
      $this->rodzaj = $rodzaj;
      $this->kategoria = $kategoria;
      $this->masa = $masa;
      $this->wartosc = $wartosc;
      $this->kwotaPobrania = $kwotaPobrania;
      $this->numerWewnetrznyPrzesylki = $numerWewnetrznyPrzesylki;
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
     * @return \PocztaPolska\ElektronicznyNadawca\EZDOPrzesylkaType
     */
    public function setNumerNadania($numerNadania)
    {
      $this->numerNadania = $numerNadania;
      return $this;
    }

    /**
     * @return string
     */
    public function getRodzaj()
    {
      return $this->rodzaj;
    }

    /**
     * @param string $rodzaj
     * @return \PocztaPolska\ElektronicznyNadawca\EZDOPrzesylkaType
     */
    public function setRodzaj($rodzaj)
    {
      $this->rodzaj = $rodzaj;
      return $this;
    }

    /**
     * @return kategoriaType
     */
    public function getKategoria()
    {
      return $this->kategoria;
    }

    /**
     * @param kategoriaType $kategoria
     * @return \PocztaPolska\ElektronicznyNadawca\EZDOPrzesylkaType
     */
    public function setKategoria($kategoria)
    {
      $this->kategoria = $kategoria;
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
     * @return \PocztaPolska\ElektronicznyNadawca\EZDOPrzesylkaType
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
     * @return \PocztaPolska\ElektronicznyNadawca\EZDOPrzesylkaType
     */
    public function setWartosc($wartosc)
    {
      $this->wartosc = $wartosc;
      return $this;
    }

    /**
     * @return kwotaPobraniaType
     */
    public function getKwotaPobrania()
    {
      return $this->kwotaPobrania;
    }

    /**
     * @param kwotaPobraniaType $kwotaPobrania
     * @return \PocztaPolska\ElektronicznyNadawca\EZDOPrzesylkaType
     */
    public function setKwotaPobrania($kwotaPobrania)
    {
      $this->kwotaPobrania = $kwotaPobrania;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumerWewnetrznyPrzesylki()
    {
      return $this->numerWewnetrznyPrzesylki;
    }

    /**
     * @param string $numerWewnetrznyPrzesylki
     * @return \PocztaPolska\ElektronicznyNadawca\EZDOPrzesylkaType
     */
    public function setNumerWewnetrznyPrzesylki($numerWewnetrznyPrzesylki)
    {
      $this->numerWewnetrznyPrzesylki = $numerWewnetrznyPrzesylki;
      return $this;
    }

}
