<?php

namespace PocztaPolska\ElektronicznyNadawca;

class getPlacowkiPocztowe
{

    /**
     * @var idWojewodztwoType $idWojewodztwo
     */
    protected $idWojewodztwo = null;

    /**
     * @param idWojewodztwoType $idWojewodztwo
     */
    public function __construct($idWojewodztwo)
    {
      $this->idWojewodztwo = $idWojewodztwo;
    }

    /**
     * @return idWojewodztwoType
     */
    public function getIdWojewodztwo()
    {
      return $this->idWojewodztwo;
    }

    /**
     * @param idWojewodztwoType $idWojewodztwo
     * @return \PocztaPolska\ElektronicznyNadawca\getPlacowkiPocztowe
     */
    public function setIdWojewodztwo($idWojewodztwo)
    {
      $this->idWojewodztwo = $idWojewodztwo;
      return $this;
    }

}
