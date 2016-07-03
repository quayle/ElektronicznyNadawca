<?php

namespace PocztaPolska\ElektronicznyNadawca;

class getEPOStatus
{

    /**
     * @var guidType $guid
     */
    protected $guid = null;

    /**
     * @var boolean $endedOnly
     */
    protected $endedOnly = null;

    /**
     * @var int $idEnvelope
     */
    protected $idEnvelope = null;

    /**
     * @param guidType $guid
     * @param boolean $endedOnly
     * @param int $idEnvelope
     */
    public function __construct($guid, $endedOnly, $idEnvelope)
    {
      $this->guid = $guid;
      $this->endedOnly = $endedOnly;
      $this->idEnvelope = $idEnvelope;
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
     * @return \PocztaPolska\ElektronicznyNadawca\getEPOStatus
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEndedOnly()
    {
      return $this->endedOnly;
    }

    /**
     * @param boolean $endedOnly
     * @return \PocztaPolska\ElektronicznyNadawca\getEPOStatus
     */
    public function setEndedOnly($endedOnly)
    {
      $this->endedOnly = $endedOnly;
      return $this;
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
     * @return \PocztaPolska\ElektronicznyNadawca\getEPOStatus
     */
    public function setIdEnvelope($idEnvelope)
    {
      $this->idEnvelope = $idEnvelope;
      return $this;
    }

}
