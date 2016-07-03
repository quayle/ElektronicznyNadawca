<?php

namespace PocztaPolska\ElektronicznyNadawca;

class sendEnvelope
{

    /**
     * @var urzadNadaniaType $urzadNadania
     */
    protected $urzadNadania = null;

    /**
     * @var pakietType $pakiet
     */
    protected $pakiet = null;

    /**
     * @var int $idBufor
     */
    protected $idBufor = null;

    /**
     * @param urzadNadaniaType $urzadNadania
     * @param pakietType $pakiet
     * @param int $idBufor
     */
    public function __construct($urzadNadania, $pakiet, $idBufor)
    {
      $this->urzadNadania = $urzadNadania;
      $this->pakiet = $pakiet;
      $this->idBufor = $idBufor;
    }

    /**
     * @return urzadNadaniaType
     */
    public function getUrzadNadania()
    {
      return $this->urzadNadania;
    }

    /**
     * @param urzadNadaniaType $urzadNadania
     * @return \PocztaPolska\ElektronicznyNadawca\sendEnvelope
     */
    public function setUrzadNadania($urzadNadania)
    {
      $this->urzadNadania = $urzadNadania;
      return $this;
    }

    /**
     * @return pakietType
     */
    public function getPakiet()
    {
      return $this->pakiet;
    }

    /**
     * @param pakietType $pakiet
     * @return \PocztaPolska\ElektronicznyNadawca\sendEnvelope
     */
    public function setPakiet($pakiet)
    {
      $this->pakiet = $pakiet;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdBufor()
    {
      return $this->idBufor;
    }

    /**
     * @param int $idBufor
     * @return \PocztaPolska\ElektronicznyNadawca\sendEnvelope
     */
    public function setIdBufor($idBufor)
    {
      $this->idBufor = $idBufor;
      return $this;
    }

}
