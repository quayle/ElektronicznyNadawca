<?php

namespace PocztaPolska\ElektronicznyNadawca;

class getEnvelopeStatusResponse
{

    /**
     * @var envelopeStatusType $envelopeStatus
     */
    protected $envelopeStatus = null;

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @param envelopeStatusType $envelopeStatus
     * @param errorType $error
     */
    public function __construct($envelopeStatus, $error)
    {
      $this->envelopeStatus = $envelopeStatus;
      $this->error = $error;
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
     * @return \PocztaPolska\ElektronicznyNadawca\getEnvelopeStatusResponse
     */
    public function setEnvelopeStatus($envelopeStatus)
    {
      $this->envelopeStatus = $envelopeStatus;
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
     * @return \PocztaPolska\ElektronicznyNadawca\getEnvelopeStatusResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
