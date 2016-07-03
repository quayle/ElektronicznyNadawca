<?php

namespace PocztaPolska\ElektronicznyNadawca;

class getEnvelopeContentShortResponse
{

    /**
     * @var przesylkaShortType $przesylka
     */
    protected $przesylka = null;

    /**
     * @param przesylkaShortType $przesylka
     */
    public function __construct($przesylka)
    {
      $this->przesylka = $przesylka;
    }

    /**
     * @return przesylkaShortType
     */
    public function getPrzesylka()
    {
      return $this->przesylka;
    }

    /**
     * @param przesylkaShortType $przesylka
     * @return \PocztaPolska\ElektronicznyNadawca\getEnvelopeContentShortResponse
     */
    public function setPrzesylka($przesylka)
    {
      $this->przesylka = $przesylka;
      return $this;
    }

}
