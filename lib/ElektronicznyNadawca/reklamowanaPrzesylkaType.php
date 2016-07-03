<?php

namespace PocztaPolska\ElektronicznyNadawca;

class reklamowanaPrzesylkaType
{

    /**
     * @var przesylkaType $przesylka
     */
    protected $przesylka = null;

    /**
     * @var powodReklamacjiType $powodReklamacji
     */
    protected $powodReklamacji = null;

    /**
     * @var date $dataNadania
     */
    protected $dataNadania = null;

    /**
     * @var urzadNadaniaType $urzadNadania
     */
    protected $urzadNadania = null;

    /**
     * @var string $powodReklamacjiOpis
     */
    protected $powodReklamacjiOpis = null;

    /**
     * @var int $odszkodowanie
     */
    protected $odszkodowanie = null;

    /**
     * @var int $oplata
     */
    protected $oplata = null;

    /**
     * @param przesylkaType $przesylka
     * @param powodReklamacjiType $powodReklamacji
     * @param date $dataNadania
     * @param urzadNadaniaType $urzadNadania
     * @param string $powodReklamacjiOpis
     * @param int $odszkodowanie
     * @param int $oplata
     */
    public function __construct($przesylka, $powodReklamacji, $dataNadania, $urzadNadania, $powodReklamacjiOpis, $odszkodowanie, $oplata)
    {
      $this->przesylka = $przesylka;
      $this->powodReklamacji = $powodReklamacji;
      $this->dataNadania = $dataNadania;
      $this->urzadNadania = $urzadNadania;
      $this->powodReklamacjiOpis = $powodReklamacjiOpis;
      $this->odszkodowanie = $odszkodowanie;
      $this->oplata = $oplata;
    }

    /**
     * @return przesylkaType
     */
    public function getPrzesylka()
    {
      return $this->przesylka;
    }

    /**
     * @param przesylkaType $przesylka
     * @return \PocztaPolska\ElektronicznyNadawca\reklamowanaPrzesylkaType
     */
    public function setPrzesylka($przesylka)
    {
      $this->przesylka = $przesylka;
      return $this;
    }

    /**
     * @return powodReklamacjiType
     */
    public function getPowodReklamacji()
    {
      return $this->powodReklamacji;
    }

    /**
     * @param powodReklamacjiType $powodReklamacji
     * @return \PocztaPolska\ElektronicznyNadawca\reklamowanaPrzesylkaType
     */
    public function setPowodReklamacji($powodReklamacji)
    {
      $this->powodReklamacji = $powodReklamacji;
      return $this;
    }

    /**
     * @return date
     */
    public function getDataNadania()
    {
      return $this->dataNadania;
    }

    /**
     * @param date $dataNadania
     * @return \PocztaPolska\ElektronicznyNadawca\reklamowanaPrzesylkaType
     */
    public function setDataNadania($dataNadania)
    {
      $this->dataNadania = $dataNadania;
      return $this;
    }

    /**
     * @return urzadNadaniaType
     */
    public function getUrzadNadania()
    {
      return $this->urzadNadania;
    }

    /**
     * @param urzadNadaniaType $urzadNadania
     * @return \PocztaPolska\ElektronicznyNadawca\reklamowanaPrzesylkaType
     */
    public function setUrzadNadania($urzadNadania)
    {
      $this->urzadNadania = $urzadNadania;
      return $this;
    }

    /**
     * @return string
     */
    public function getPowodReklamacjiOpis()
    {
      return $this->powodReklamacjiOpis;
    }

    /**
     * @param string $powodReklamacjiOpis
     * @return \PocztaPolska\ElektronicznyNadawca\reklamowanaPrzesylkaType
     */
    public function setPowodReklamacjiOpis($powodReklamacjiOpis)
    {
      $this->powodReklamacjiOpis = $powodReklamacjiOpis;
      return $this;
    }

    /**
     * @return int
     */
    public function getOdszkodowanie()
    {
      return $this->odszkodowanie;
    }

    /**
     * @param int $odszkodowanie
     * @return \PocztaPolska\ElektronicznyNadawca\reklamowanaPrzesylkaType
     */
    public function setOdszkodowanie($odszkodowanie)
    {
      $this->odszkodowanie = $odszkodowanie;
      return $this;
    }

    /**
     * @return int
     */
    public function getOplata()
    {
      return $this->oplata;
    }

    /**
     * @param int $oplata
     * @return \PocztaPolska\ElektronicznyNadawca\reklamowanaPrzesylkaType
     */
    public function setOplata($oplata)
    {
      $this->oplata = $oplata;
      return $this;
    }

}
