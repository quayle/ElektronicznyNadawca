<?php

namespace PocztaPolska\ElektronicznyNadawca;

class getEnvelopeListResponse
{

    /**
     * @var envelopeInfoType $envelopes
     */
    protected $envelopes = null;

    /**
     * @param envelopeInfoType $envelopes
     */
    public function __construct($envelopes)
    {
      $this->envelopes = $envelopes;
    }

    /**
     * @return envelopeInfoType
     */
    public function getEnvelopes()
    {
      return $this->envelopes;
    }

    /**
     * @param envelopeInfoType $envelopes
     * @return \PocztaPolska\ElektronicznyNadawca\getEnvelopeListResponse
     */
    public function setEnvelopes($envelopes)
    {
      $this->envelopes = $envelopes;
      return $this;
    }

}
