<?php

namespace PocztaPolska\ElektronicznyNadawca;

class clearEnvelope
{

    /**
     * @var int $idBufor
     */
    protected $idBufor = null;

    /**
     * @param int $idBufor
     */
    public function __construct($idBufor)
    {
      $this->idBufor = $idBufor;
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
     * @return \PocztaPolska\ElektronicznyNadawca\clearEnvelope
     */
    public function setIdBufor($idBufor)
    {
      $this->idBufor = $idBufor;
      return $this;
    }

}
