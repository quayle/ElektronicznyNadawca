<?php

namespace PocztaPolska\ElektronicznyNadawca;

abstract class przesylkaRejestrowanaType extends przesylkaType
{

    /**
     * @var adresType $adres
     */
    protected $adres = null;

    /**
     * @var numerNadaniaType $numerNadania
     */
    protected $numerNadania = null;

    /**
     * @param guidType $guid
     * @param guidType $pakietGuid
     * @param guidType $opakowanieGuid
     * @param opisType $opis
     * @param adresType $adres
     * @param numerNadaniaType $numerNadania
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis);
      $this->adres = $adres;
      $this->numerNadania = $numerNadania;
    }

    /**
     * @return adresType
     */
    public function getAdres()
    {
      return $this->adres;
    }

    /**
     * @param adresType $adres
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaRejestrowanaType
     */
    public function setAdres($adres)
    {
      $this->adres = $adres;
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
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaRejestrowanaType
     */
    public function setNumerNadania($numerNadania)
    {
      $this->numerNadania = $numerNadania;
      return $this;
    }

}
