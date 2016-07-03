<?php

namespace PocztaPolska\ElektronicznyNadawca;

class kategoriePowodowReklamacjiType
{

    /**
     * @var string $nazwa
     */
    protected $nazwa = null;

    /**
     * @var powodReklamacjiType[] $powodReklamacji
     */
    protected $powodReklamacji = null;

    /**
     * @param string $nazwa
     * @param powodReklamacjiType[] $powodReklamacji
     */
    public function __construct($nazwa, array $powodReklamacji)
    {
      $this->nazwa = $nazwa;
      $this->powodReklamacji = $powodReklamacji;
    }

    /**
     * @return string
     */
    public function getNazwa()
    {
      return $this->nazwa;
    }

    /**
     * @param string $nazwa
     * @return \PocztaPolska\ElektronicznyNadawca\kategoriePowodowReklamacjiType
     */
    public function setNazwa($nazwa)
    {
      $this->nazwa = $nazwa;
      return $this;
    }

    /**
     * @return powodReklamacjiType[]
     */
    public function getPowodReklamacji()
    {
      return $this->powodReklamacji;
    }

    /**
     * @param powodReklamacjiType[] $powodReklamacji
     * @return \PocztaPolska\ElektronicznyNadawca\kategoriePowodowReklamacjiType
     */
    public function setPowodReklamacji(array $powodReklamacji)
    {
      $this->powodReklamacji = $powodReklamacji;
      return $this;
    }

}
