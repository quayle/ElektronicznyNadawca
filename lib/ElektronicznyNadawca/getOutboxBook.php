<?php

namespace PocztaPolska\ElektronicznyNadawca;

class getOutboxBook
{

    /**
     * @var int $idEnvelope
     */
    protected $idEnvelope = null;

    /**
     * @var boolean $includeNierejestrowane
     */
    protected $includeNierejestrowane = null;

    /**
     * @param int $idEnvelope
     * @param boolean $includeNierejestrowane
     */
    public function __construct($idEnvelope, $includeNierejestrowane)
    {
      $this->idEnvelope = $idEnvelope;
      $this->includeNierejestrowane = $includeNierejestrowane;
    }

    /**
     * @return int
     */
    public function getIdEnvelope()
    {
      return $this->idEnvelope;
    }

    /**
     * @param int $idEnvelope
     * @return \PocztaPolska\ElektronicznyNadawca\getOutboxBook
     */
    public function setIdEnvelope($idEnvelope)
    {
      $this->idEnvelope = $idEnvelope;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeNierejestrowane()
    {
      return $this->includeNierejestrowane;
    }

    /**
     * @param boolean $includeNierejestrowane
     * @return \PocztaPolska\ElektronicznyNadawca\getOutboxBook
     */
    public function setIncludeNierejestrowane($includeNierejestrowane)
    {
      $this->includeNierejestrowane = $includeNierejestrowane;
      return $this;
    }

}
