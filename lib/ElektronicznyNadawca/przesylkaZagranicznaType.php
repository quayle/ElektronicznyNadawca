<?php

namespace PocztaPolska\ElektronicznyNadawca;

class przesylkaZagranicznaType extends przesylkaNieRejestrowanaType
{

    /**
     * @var boolean $posteRestante
     */
    protected $posteRestante = null;

    /**
     * @var kategoriaType $kategoria
     */
    protected $kategoria = null;

    /**
     * @var masaType $masa
     */
    protected $masa = null;

    /**
     * @var boolean $ekspres
     */
    protected $ekspres = null;

    /**
     * @var string $kraj
     */
    protected $kraj = null;

    /**
     * @param guidType $guid
     * @param guidType $pakietGuid
     * @param guidType $opakowanieGuid
     * @param opisType $opis
     * @param anonymous94 $ilosc
     * @param boolean $posteRestante
     * @param kategoriaType $kategoria
     * @param masaType $masa
     * @param boolean $ekspres
     * @param string $kraj
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $ilosc, $posteRestante, $kategoria, $masa, $ekspres, $kraj)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $ilosc);
      $this->posteRestante = $posteRestante;
      $this->kategoria = $kategoria;
      $this->masa = $masa;
      $this->ekspres = $ekspres;
      $this->kraj = $kraj;
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
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaZagranicznaType
     */
    public function setPosteRestante($posteRestante)
    {
      $this->posteRestante = $posteRestante;
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
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaZagranicznaType
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
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaZagranicznaType
     */
    public function setMasa($masa)
    {
      $this->masa = $masa;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEkspres()
    {
      return $this->ekspres;
    }

    /**
     * @param boolean $ekspres
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaZagranicznaType
     */
    public function setEkspres($ekspres)
    {
      $this->ekspres = $ekspres;
      return $this;
    }

    /**
     * @return string
     */
    public function getKraj()
    {
      return $this->kraj;
    }

    /**
     * @param string $kraj
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaZagranicznaType
     */
    public function setKraj($kraj)
    {
      $this->kraj = $kraj;
      return $this;
    }

}
