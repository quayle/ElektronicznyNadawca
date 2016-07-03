<?php

namespace PocztaPolska\ElektronicznyNadawca;

class przesylkaEPOType
{

    /**
     * @var EPOInfoType $EPOInfo
     */
    protected $EPOInfo = null;

    /**
     * @var guidType $guid
     */
    protected $guid = null;

    /**
     * @var numerNadaniaType $numerNadania
     */
    protected $numerNadania = null;

    /**
     * @var statusEPOEnum $statusEPO
     */
    protected $statusEPO = null;

    /**
     * @param guidType $guid
     * @param numerNadaniaType $numerNadania
     * @param statusEPOEnum $statusEPO
     */
    public function __construct($guid, $numerNadania, $statusEPO)
    {
      $this->guid = $guid;
      $this->numerNadania = $numerNadania;
      $this->statusEPO = $statusEPO;
    }

    /**
     * @return EPOInfoType
     */
    public function getEPOInfo()
    {
      return $this->EPOInfo;
    }

    /**
     * @param EPOInfoType $EPOInfo
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaEPOType
     */
    public function setEPOInfo($EPOInfo)
    {
      $this->EPOInfo = $EPOInfo;
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
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaEPOType
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
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
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaEPOType
     */
    public function setNumerNadania($numerNadania)
    {
      $this->numerNadania = $numerNadania;
      return $this;
    }

    /**
     * @return statusEPOEnum
     */
    public function getStatusEPO()
    {
      return $this->statusEPO;
    }

    /**
     * @param statusEPOEnum $statusEPO
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaEPOType
     */
    public function setStatusEPO($statusEPO)
    {
      $this->statusEPO = $statusEPO;
      return $this;
    }

}
