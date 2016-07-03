<?php

namespace PocztaPolska\ElektronicznyNadawca;

class addReklamacjeResponse
{

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @var string $idReklamacja
     */
    protected $idReklamacja = null;

    /**
     * @param errorType $error
     * @param string $idReklamacja
     */
    public function __construct($error, $idReklamacja)
    {
      $this->error = $error;
      $this->idReklamacja = $idReklamacja;
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
     * @return \PocztaPolska\ElektronicznyNadawca\addReklamacjeResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdReklamacja()
    {
      return $this->idReklamacja;
    }

    /**
     * @param string $idReklamacja
     * @return \PocztaPolska\ElektronicznyNadawca\addReklamacjeResponse
     */
    public function setIdReklamacja($idReklamacja)
    {
      $this->idReklamacja = $idReklamacja;
      return $this;
    }

}
