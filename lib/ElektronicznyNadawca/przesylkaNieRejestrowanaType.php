<?php

namespace PocztaPolska\ElektronicznyNadawca;

abstract class przesylkaNieRejestrowanaType extends przesylkaType
{

    /**
     * @var anonymous94 $ilosc
     */
    protected $ilosc = null;

    /**
     * @param guidType $guid
     * @param guidType $pakietGuid
     * @param guidType $opakowanieGuid
     * @param opisType $opis
     * @param anonymous94 $ilosc
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $ilosc)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis);
      $this->ilosc = $ilosc;
    }

    /**
     * @return anonymous94
     */
    public function getIlosc()
    {
      return $this->ilosc;
    }

    /**
     * @param anonymous94 $ilosc
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaNieRejestrowanaType
     */
    public function setIlosc($ilosc)
    {
      $this->ilosc = $ilosc;
      return $this;
    }

}
