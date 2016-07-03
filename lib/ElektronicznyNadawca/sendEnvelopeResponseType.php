<?php

namespace PocztaPolska\ElektronicznyNadawca;

class sendEnvelopeResponseType
{

    /**
     * @var int $idEnvelope
     */
    protected $idEnvelope = null;

    /**
     * @var envelopeStatusType $envelopeStatus
     */
    protected $envelopeStatus = null;

    /**
     * @var errorType[] $error
     */
    protected $error = null;

    
    public function __construct()
    {
    
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
     * @return \PocztaPolska\ElektronicznyNadawca\sendEnvelopeResponseType
     */
    public function setIdEnvelope($idEnvelope)
    {
      $this->idEnvelope = $idEnvelope;
      return $this;
    }

    /**
     * @return envelopeStatusType
     */
    public function getEnvelopeStatus()
    {
      return $this->envelopeStatus;
    }

    /**
     * @param envelopeStatusType $envelopeStatus
     * @return \PocztaPolska\ElektronicznyNadawca\sendEnvelopeResponseType
     */
    public function setEnvelopeStatus($envelopeStatus)
    {
      $this->envelopeStatus = $envelopeStatus;
      return $this;
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
     * @return \PocztaPolska\ElektronicznyNadawca\sendEnvelopeResponseType
     */
    public function setError(array $error = null)
    {
      $this->error = $error;
      return $this;
    }

}
