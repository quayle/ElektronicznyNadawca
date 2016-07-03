<?php

namespace PocztaPolska\ElektronicznyNadawca;

class getPasswordExpiredDateResponse
{

    /**
     * @var date $dataWygasniecia
     */
    protected $dataWygasniecia = null;

    /**
     * @param date $dataWygasniecia
     */
    public function __construct($dataWygasniecia)
    {
      $this->dataWygasniecia = $dataWygasniecia;
    }

    /**
     * @return date
     */
    public function getDataWygasniecia()
    {
      return $this->dataWygasniecia;
    }

    /**
     * @param date $dataWygasniecia
     * @return \PocztaPolska\ElektronicznyNadawca\getPasswordExpiredDateResponse
     */
    public function setDataWygasniecia($dataWygasniecia)
    {
      $this->dataWygasniecia = $dataWygasniecia;
      return $this;
    }

}
