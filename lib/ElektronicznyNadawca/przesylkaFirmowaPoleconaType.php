<?php

namespace PocztaPolska\ElektronicznyNadawca;

class przesylkaFirmowaPoleconaType extends przesylkaRejestrowanaType
{

    /**
     * @var EPOType $epo
     */
    protected $epo = null;

    /**
     * @var boolean $posteRestante
     */
    protected $posteRestante = null;

    /**
     * @var iloscPotwierdzenOdbioruType $iloscPotwierdzenOdbioru
     */
    protected $iloscPotwierdzenOdbioru = null;

    /**
     * @var masaType $masa
     */
    protected $masa = null;

    /**
     * @var boolean $miejscowa
     */
    protected $miejscowa = null;

    /**
     * @param guidType $guid
     * @param guidType $pakietGuid
     * @param guidType $opakowanieGuid
     * @param opisType $opis
     * @param adresType $adres
     * @param numerNadaniaType $numerNadania
     * @param boolean $posteRestante
     * @param iloscPotwierdzenOdbioruType $iloscPotwierdzenOdbioru
     * @param masaType $masa
     * @param boolean $miejscowa
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania, $posteRestante, $iloscPotwierdzenOdbioru, $masa, $miejscowa)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania);
      $this->posteRestante = $posteRestante;
      $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;
      $this->masa = $masa;
      $this->miejscowa = $miejscowa;
    }

    /**
     * @return EPOType
     */
    public function getEpo()
    {
      return $this->epo;
    }

    /**
     * @param EPOType $epo
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaFirmowaPoleconaType
     */
    public function setEpo($epo)
    {
      $this->epo = $epo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPosteRestante()
    {
      return $this->posteRestante;
    }

    /**
     * @param boolean $posteRestante
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaFirmowaPoleconaType
     */
    public function setPosteRestante($posteRestante)
    {
      $this->posteRestante = $posteRestante;
      return $this;
    }

    /**
     * @return iloscPotwierdzenOdbioruType
     */
    public function getIloscPotwierdzenOdbioru()
    {
      return $this->iloscPotwierdzenOdbioru;
    }

    /**
     * @param iloscPotwierdzenOdbioruType $iloscPotwierdzenOdbioru
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaFirmowaPoleconaType
     */
    public function setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
    {
      $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;
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
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaFirmowaPoleconaType
     */
    public function setMasa($masa)
    {
      $this->masa = $masa;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMiejscowa()
    {
      return $this->miejscowa;
    }

    /**
     * @param boolean $miejscowa
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaFirmowaPoleconaType
     */
    public function setMiejscowa($miejscowa)
    {
      $this->miejscowa = $miejscowa;
      return $this;
    }

}
