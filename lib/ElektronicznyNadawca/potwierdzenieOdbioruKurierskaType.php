<?php

namespace PocztaPolska\ElektronicznyNadawca;

class potwierdzenieOdbioruKurierskaType
{

    /**
     * @var iloscPotwierdzenOdbioruType $ilosc
     */
    protected $ilosc = null;

    /**
     * @var sposobPrzekazaniaPotwierdzeniaOdbioruKurierskaType $sposob
     */
    protected $sposob = null;

    /**
     * @param iloscPotwierdzenOdbioruType $ilosc
     * @param sposobPrzekazaniaPotwierdzeniaOdbioruKurierskaType $sposob
     */
    public function __construct($ilosc, $sposob)
    {
      $this->ilosc = $ilosc;
      $this->sposob = $sposob;
    }

    /**
     * @return iloscPotwierdzenOdbioruType
     */
    public function getIlosc()
    {
      return $this->ilosc;
    }

    /**
     * @param iloscPotwierdzenOdbioruType $ilosc
     * @return \PocztaPolska\ElektronicznyNadawca\potwierdzenieOdbioruKurierskaType
     */
    public function setIlosc($ilosc)
    {
      $this->ilosc = $ilosc;
      return $this;
    }

    /**
     * @return sposobPrzekazaniaPotwierdzeniaOdbioruKurierskaType
     */
    public function getSposob()
    {
      return $this->sposob;
    }

    /**
     * @param sposobPrzekazaniaPotwierdzeniaOdbioruKurierskaType $sposob
     * @return \PocztaPolska\ElektronicznyNadawca\potwierdzenieOdbioruKurierskaType
     */
    public function setSposob($sposob)
    {
      $this->sposob = $sposob;
      return $this;
    }

}
