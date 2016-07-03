<?php

namespace PocztaPolska\ElektronicznyNadawca;

class moveShipmentsResponse
{

    /**
     * @var guidType $notMovedGuid
     */
    protected $notMovedGuid = null;

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @param guidType $notMovedGuid
     * @param errorType $error
     */
    public function __construct($notMovedGuid, $error)
    {
      $this->notMovedGuid = $notMovedGuid;
      $this->error = $error;
    }

    /**
     * @return guidType
     */
    public function getNotMovedGuid()
    {
      return $this->notMovedGuid;
    }

    /**
     * @param guidType $notMovedGuid
     * @return \PocztaPolska\ElektronicznyNadawca\moveShipmentsResponse
     */
    public function setNotMovedGuid($notMovedGuid)
    {
      $this->notMovedGuid = $notMovedGuid;
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
     * @return \PocztaPolska\ElektronicznyNadawca\moveShipmentsResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
