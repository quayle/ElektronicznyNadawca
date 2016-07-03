<?php

namespace PocztaPolska\ElektronicznyNadawca;

class errorType
{

    /**
     * @var int $errorNumber
     */
    protected $errorNumber = null;

    /**
     * @var string $errorDesc
     */
    protected $errorDesc = null;

    /**
     * @var guidType $guid
     */
    protected $guid = null;

    /**
     * @param int $errorNumber
     * @param string $errorDesc
     * @param guidType $guid
     */
    public function __construct($errorNumber, $errorDesc, $guid)
    {
      $this->errorNumber = $errorNumber;
      $this->errorDesc = $errorDesc;
      $this->guid = $guid;
    }

    /**
     * @return int
     */
    public function getErrorNumber()
    {
      return $this->errorNumber;
    }

    /**
     * @param int $errorNumber
     * @return \PocztaPolska\ElektronicznyNadawca\errorType
     */
    public function setErrorNumber($errorNumber)
    {
      $this->errorNumber = $errorNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorDesc()
    {
      return $this->errorDesc;
    }

    /**
     * @param string $errorDesc
     * @return \PocztaPolska\ElektronicznyNadawca\errorType
     */
    public function setErrorDesc($errorDesc)
    {
      $this->errorDesc = $errorDesc;
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
     * @return \PocztaPolska\ElektronicznyNadawca\errorType
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

}
