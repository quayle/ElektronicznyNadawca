<?php

namespace PocztaPolska\ElektronicznyNadawca;

class powodReklamacjiType
{

    /**
     * @var powodSzczegolowyType[] $powodSzczegolowy
     */
    protected $powodSzczegolowy = null;

    /**
     * @var int $idPowodGlowny
     */
    protected $idPowodGlowny = null;

    /**
     * @var string $powodGlownyOpis
     */
    protected $powodGlownyOpis = null;

    /**
     * @param powodSzczegolowyType[] $powodSzczegolowy
     * @param int $idPowodGlowny
     * @param string $powodGlownyOpis
     */
    public function __construct(array $powodSzczegolowy, $idPowodGlowny, $powodGlownyOpis)
    {
      $this->powodSzczegolowy = $powodSzczegolowy;
      $this->idPowodGlowny = $idPowodGlowny;
      $this->powodGlownyOpis = $powodGlownyOpis;
    }

    /**
     * @return powodSzczegolowyType[]
     */
    public function getPowodSzczegolowy()
    {
      return $this->powodSzczegolowy;
    }

    /**
     * @param powodSzczegolowyType[] $powodSzczegolowy
     * @return \PocztaPolska\ElektronicznyNadawca\powodReklamacjiType
     */
    public function setPowodSzczegolowy(array $powodSzczegolowy)
    {
      $this->powodSzczegolowy = $powodSzczegolowy;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdPowodGlowny()
    {
      return $this->idPowodGlowny;
    }

    /**
     * @param int $idPowodGlowny
     * @return \PocztaPolska\ElektronicznyNadawca\powodReklamacjiType
     */
    public function setIdPowodGlowny($idPowodGlowny)
    {
      $this->idPowodGlowny = $idPowodGlowny;
      return $this;
    }

    /**
     * @return string
     */
    public function getPowodGlownyOpis()
    {
      return $this->powodGlownyOpis;
    }

    /**
     * @param string $powodGlownyOpis
     * @return \PocztaPolska\ElektronicznyNadawca\powodReklamacjiType
     */
    public function setPowodGlownyOpis($powodGlownyOpis)
    {
      $this->powodGlownyOpis = $powodGlownyOpis;
      return $this;
    }

}
