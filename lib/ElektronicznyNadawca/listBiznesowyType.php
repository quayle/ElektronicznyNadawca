<?php

namespace PocztaPolska\ElektronicznyNadawca;

class listBiznesowyType extends przesylkaNieRejestrowanaType
{

    /**
     * @var masaType $masa
     */
    protected $masa = null;

    /**
     * @param guidType $guid
     * @param guidType $pakietGuid
     * @param guidType $opakowanieGuid
     * @param opisType $opis
     * @param anonymous94 $ilosc
     * @param masaType $masa
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $ilosc, $masa)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $ilosc);
      $this->masa = $masa;
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
     * @return \PocztaPolska\ElektronicznyNadawca\listBiznesowyType
     */
    public function setMasa($masa)
    {
      $this->masa = $masa;
      return $this;
    }

}
