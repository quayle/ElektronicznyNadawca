<?php

namespace PocztaPolska\ElektronicznyNadawca;

class potwierdzenieDoreczeniaType
{

    /**
     * @var sposobDoreczeniaPotwierdzeniaType $sposob
     */
    protected $sposob = null;

    /**
     * @var string $kontakt
     */
    protected $kontakt = null;

    /**
     * @param sposobDoreczeniaPotwierdzeniaType $sposob
     * @param string $kontakt
     */
    public function __construct($sposob, $kontakt)
    {
      $this->sposob = $sposob;
      $this->kontakt = $kontakt;
    }

    /**
     * @return sposobDoreczeniaPotwierdzeniaType
     */
    public function getSposob()
    {
      return $this->sposob;
    }

    /**
     * @param sposobDoreczeniaPotwierdzeniaType $sposob
     * @return \PocztaPolska\ElektronicznyNadawca\potwierdzenieDoreczeniaType
     */
    public function setSposob($sposob)
    {
      $this->sposob = $sposob;
      return $this;
    }

    /**
     * @return string
     */
    public function getKontakt()
    {
      return $this->kontakt;
    }

    /**
     * @param string $kontakt
     * @return \PocztaPolska\ElektronicznyNadawca\potwierdzenieDoreczeniaType
     */
    public function setKontakt($kontakt)
    {
      $this->kontakt = $kontakt;
      return $this;
    }

}
