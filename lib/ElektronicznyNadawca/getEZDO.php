<?php

namespace PocztaPolska\ElektronicznyNadawca;

class getEZDO
{

    /**
     * @var int $idEZDOPakiet
     */
    protected $idEZDOPakiet = null;

    /**
     * @param int $idEZDOPakiet
     */
    public function __construct($idEZDOPakiet)
    {
      $this->idEZDOPakiet = $idEZDOPakiet;
    }

    /**
     * @return int
     */
    public function getIdEZDOPakiet()
    {
      return $this->idEZDOPakiet;
    }

    /**
     * @param int $idEZDOPakiet
     * @return \PocztaPolska\ElektronicznyNadawca\getEZDO
     */
    public function setIdEZDOPakiet($idEZDOPakiet)
    {
      $this->idEZDOPakiet = $idEZDOPakiet;
      return $this;
    }

}
