<?php

namespace PocztaPolska\ElektronicznyNadawca;

class przesylkaListowaZadeklarowanaWartoscType extends przesylkaRejestrowanaType
{

    /**
     * @var boolean $posteRestante
     */
    protected $posteRestante = null;

    /**
     * @var wartoscType $wartosc
     */
    protected $wartosc = null;

    /**
     * @var iloscPotwierdzenOdbioruType $iloscPotwierdzenOdbioru
     */
    protected $iloscPotwierdzenOdbioru = null;

    /**
     * @var kategoriaType $kategoria
     */
    protected $kategoria = null;

    /**
     * @var gabarytType $gabaryt
     */
    protected $gabaryt = null;

    /**
     * @var masaType $masa
     */
    protected $masa = null;

    /**
     * @param guidType $guid
     * @param guidType $pakietGuid
     * @param guidType $opakowanieGuid
     * @param opisType $opis
     * @param adresType $adres
     * @param numerNadaniaType $numerNadania
     * @param boolean $posteRestante
     * @param wartoscType $wartosc
     * @param iloscPotwierdzenOdbioruType $iloscPotwierdzenOdbioru
     * @param kategoriaType $kategoria
     * @param gabarytType $gabaryt
     * @param masaType $masa
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania, $posteRestante, $wartosc, $iloscPotwierdzenOdbioru, $kategoria, $gabaryt, $masa)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania);
      $this->posteRestante = $posteRestante;
      $this->wartosc = $wartosc;
      $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;
      $this->kategoria = $kategoria;
      $this->gabaryt = $gabaryt;
      $this->masa = $masa;
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
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaListowaZadeklarowanaWartoscType
     */
    public function setPosteRestante($posteRestante)
    {
      $this->posteRestante = $posteRestante;
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
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaListowaZadeklarowanaWartoscType
     */
    public function setWartosc($wartosc)
    {
      $this->wartosc = $wartosc;
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
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaListowaZadeklarowanaWartoscType
     */
    public function setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
    {
      $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;
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
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaListowaZadeklarowanaWartoscType
     */
    public function setKategoria($kategoria)
    {
      $this->kategoria = $kategoria;
      return $this;
    }

    /**
     * @return gabarytType
     */
    public function getGabaryt()
    {
      return $this->gabaryt;
    }

    /**
     * @param gabarytType $gabaryt
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaListowaZadeklarowanaWartoscType
     */
    public function setGabaryt($gabaryt)
    {
      $this->gabaryt = $gabaryt;
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
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaListowaZadeklarowanaWartoscType
     */
    public function setMasa($masa)
    {
      $this->masa = $masa;
      return $this;
    }

}
