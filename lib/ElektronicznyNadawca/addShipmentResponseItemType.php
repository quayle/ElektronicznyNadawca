<?php

namespace PocztaPolska\ElektronicznyNadawca;

class addShipmentResponseItemType
{

    /**
     * @var errorType[] $error
     */
    protected $error = null;

    /**
     * @var numerNadaniaType $numerNadania
     */
    protected $numerNadania = null;

    /**
     * @var guidType $guid
     */
    protected $guid = null;

    /**
     * @param numerNadaniaType $numerNadania
     * @param guidType $guid
     */
    public function __construct($numerNadania, $guid)
    {
      $this->numerNadania = $numerNadania;
      $this->guid = $guid;
    }

    /**
     * @return errorType[]
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param errorType[] $error
     * @return \PocztaPolska\ElektronicznyNadawca\addShipmentResponseItemType
     */
    public function setError(array $error = null)
    {
      $this->error = $error;
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
     * @return \PocztaPolska\ElektronicznyNadawca\addShipmentResponseItemType
     */
    public function setNumerNadania($numerNadania)
    {
      $this->numerNadania = $numerNadania;
      return $this;
    }

    /**
     * @return guidType
     */
    public function getGuid()
    {
      return $this->guid;
    }

    /**
     * @param guidType $guid
     * @return \PocztaPolska\ElektronicznyNadawca\addShipmentResponseItemType
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

}
