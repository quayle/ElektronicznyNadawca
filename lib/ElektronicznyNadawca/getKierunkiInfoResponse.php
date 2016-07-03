<?php

namespace PocztaPolska\ElektronicznyNadawca;

class getKierunkiInfoResponse
{

    /**
     * @var date $lastUpdate
     */
    protected $lastUpdate = null;

    /**
     * @var uslugiType $usluga
     */
    protected $usluga = null;

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @param date $lastUpdate
     * @param uslugiType $usluga
     * @param errorType $error
     */
    public function __construct($lastUpdate, $usluga, $error)
    {
      $this->lastUpdate = $lastUpdate;
      $this->usluga = $usluga;
      $this->error = $error;
    }

    /**
     * @return date
     */
    public function getLastUpdate()
    {
      return $this->lastUpdate;
    }

    /**
     * @param date $lastUpdate
     * @return \PocztaPolska\ElektronicznyNadawca\getKierunkiInfoResponse
     */
    public function setLastUpdate($lastUpdate)
    {
      $this->lastUpdate = $lastUpdate;
      return $this;
    }

    /**
     * @return uslugiType
     */
    public function getUsluga()
    {
      return $this->usluga;
    }

    /**
     * @param uslugiType $usluga
     * @return \PocztaPolska\ElektronicznyNadawca\getKierunkiInfoResponse
     */
    public function setUsluga($usluga)
    {
      $this->usluga = $usluga;
      return $this;
    }

    /**
     * @return errorType
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param errorType $error
     * @return \PocztaPolska\ElektronicznyNadawca\getKierunkiInfoResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
